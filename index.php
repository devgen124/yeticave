<?php
require_once ('init.php');
require_once ('data.php');

$page_content = render_template('main.php', ['lots_list' => $lots_list, 'categories' => $categories]);
$layout_content = render_template('layout.php',
    ['is_auth' => $is_auth,
    'user' => $user,
    'user_avatar' => $user_avatar,
    'content' => $page_content,
    'title' => 'YetiCave - Главная',
    'categories' => $categories]);

print($layout_content);
?>
