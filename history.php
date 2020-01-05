<?php
require_once ('init.php');
require_once ('data.php');

if (isset($_COOKIE['history'])) {
    $history = json_decode($_COOKIE['history']);
    $history_list = filtrate_lots ($history, $lots_list);
    $page_content = render_template('all_lots.php', ['heading' => 'История просмотров', 'lots_list' => $history_list, 'categories' => $categories]);
} else {
    $page_content = render_template('all_lots.php', ['heading' => 'История просмотров', 'categories' => $categories]);
}

$layout_content = render_template('layout.php',
    ['is_auth' => $is_auth,
    'user' => $user,
    'user_avatar' => $user_avatar,
    'content' => $page_content,
    'title' => 'Yeticave - История просмотров',
    'categories' => $categories]);

print($layout_content);
print_r($_COOKIE['history'])
?>
