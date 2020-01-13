<?php
require_once ('init.php');
require_once ('data.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $required = ['lot-name', 'category', 'message', 'lot-rate', 'lot-step', 'lot-date'];
    $errors = [];
    $empty_errors = ['lot-name' => 'Введите наименование лота',
                    'category' => 'Выберите категорию',
                    'message' => 'Напишите описание лота',
                    'lot-rate' => 'Добавьте фото',
                    'lot-rate' => 'Введите начальную цену',
                    'lot-step' => 'Введите шаг ставки',
                    'lot-date' => 'Введите дату завершения торгов'];

    $lot = filter_input_array(INPUT_POST, ['lot-name' => FILTER_SANITIZE_STRING,
                                            'category' => FILTER_DEFAULT,
                                            'message' => FILTER_SANITIZE_STRING,
                                            'lot-rate' => FILTER_VALIDATE_INT,
                                            'lot-step' => FILTER_VALIDATE_INT,
                                            'lot-date' => FILTER_DEFAULT], true);


    $validation_rules = ['lot-name' => validate_length($lot['lot-name'], 4, 40),
                        'category' => validate_category($lot['category'], $categories),
                        'message' => validate_length($lot['message'], 4, 40),
                        'lot-rate' => validate_rate($lot['lot-rate']),
                        'lot-step' => validate_step($lot['lot-step']),
                        'lot-date' => validate_date($lot['lot-date'])];

    $errors = validate_post($validation_rules);

    if (empty($_FILES['lot-img']['error'])) {
        $tmp_name = $_FILES['lot-img']['tmp_name'];
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $filetype = finfo_file($finfo, $tmp_name);

        if ($filetype == 'image/jpeg') {
            $file_ext = '.jpg';
        } else if ($filetype == 'image/png') {
            $file_ext = '.png';
        }
        $filename = uniqid() . $file_ext;
        $path = 'img/' . $filename;

        if ($filetype !== 'image/jpeg' && 'image/png') {
            $errors['lot-img'] = 'Загрузите картинку в формате JPG/JPEG/PNG';
        } else {
            move_uploaded_file($tmp_name, $path);
            $lot['lot-img'] = $path;
        }
    } else {
        $errors['lot-img'] = 'Вы не загрузили картинку';
    }

    if (count($errors)) {
        $page_content = render_template('add.php', ['lot' => $lot, 'errors' => $errors, 'categories' => $categories]);
    } else {
        $page_content = render_template('lot.php', ['lot' => $lot, 'categories' => $categories]);
    }

} else if (!$is_auth) {
    http_response_code(403);
    $page_content = render_template('error.php', ['heading' => 'Ошибка 403', 'text' => 'Необходимо авторизоваться']);
} else {
    $page_content = render_template('add.php', ['categories' => $categories]);
}

$layout_content = render_template('layout.php',
    ['is_auth' => $is_auth,
    'user' => $user,
    'user_avatar' => $user_avatar,
    'content' => $page_content,
    'title' => 'Yeticave - Добавление лота',
    'categories' => $categories]);

print($layout_content);
?>
