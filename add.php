<?php
require_once ('functions.php');
require_once ('data.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lot['name'] = $_POST['lot-name'];
    $lot['cat'] = $_POST['category'];
    $lot['description'] = $_POST['message'];
    $lot['price'] = $_POST['lot-rate'];

    $required = ['lot-name', 'category', 'message', 'lot-rate', 'lot-step', 'lot-date'];
    $errors = [];

    foreach ($required as $key) {
        if (empty($_POST[$key])) {
            $errors[] = $key;
        }
    }

    if (isset($_FILES['lot-img']['name'])) {
        $path = 'img/' . $_FILES['lot-img']['name'];
        $res = move_uploaded_file($_FILES['lot-img']['tmp_name'], $path);
    }

    if (isset($path)) {
        $lot['img'] = $path;
    }

    $page_content = render_template('lot.php', ['lot' => $lot, 'categories' => $categories]);
} else {
    $page_content = render_template('add.php', ['categories' => $categories]);
}

$layout_content = render_template('layout.php', 
    ['is_auth' => $is_auth, 
    'user_name' => $user_name, 
    'user_avatar' => $user_avatar, 
    'content' => $page_content, 
    'title' => 'Добавление лота', 
    'categories' => $categories]);

print($layout_content);
?>
