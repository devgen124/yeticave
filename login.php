<?php
require_once ('init.php');
require_once ('data.php');
require_once ('userdata.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $form = $_POST;
    $errors = [];
    $required = ['email', 'password'];
    $error_rules = ['email' => ['empty' => 'Введите e-mail', 'wrong' => 'Пользователь не найден'], 'password' => ['empty' => 'Введите пароль', 'wrong' => 'Неверный пароль']];

    foreach ($required as $field) {
        if (empty($form[$field])) {
            $errors[$field] = $error_rules[$field]['empty'];
        }
    }
    $user = search_user_by_email($form['email'], $users);

    if (!count($errors) && $user) {
        if (password_verify($form['password'], $user['password'])) {
            $_SESSION['user'] = $user;
        } else {
            $errors['password'] = $error_rules['password']['wrong'];
        }
    } else {
        $errors['email'] = $error_rules['email']['wrong'];
    }

    if (count($errors)) {
        $page_content = render_template('login.php', ['errors' => $errors, 'form' => $form, 'categories' => $categories]);
    } else {
        header('Location: /yeticave/index.php');
    }
} else {
    $page_content = render_template('login.php', ['categories' => $categories]);
}

$layout_content = render_template('layout.php',
    ['is_auth' => $is_auth,
    'user' => $user,
    'user_avatar' => $user_avatar,
    'content' => $page_content,
    'title' => 'YetiCave - Вход',
    'categories' => $categories]);

print($layout_content);
?>
