<?php
require_once ('functions.php');
require_once ('data.php');

$lot = null;

if (isset($_GET['lot_id'])) {
  $lot_id = $_GET['lot_id'];

  foreach ($lots_list as $item) {
    if (array_search($item, $lots_list) == $lot_id) {
      $lot = $item;
    break;
    }
  }
}

if ($lot) {
  $title = $lot['name'];
  $page_content = render_template('lot.php', ['lot' => $lot, 'categories' => $categories]);
} else {
  http_response_code(404);
  $title = 'Страница не найдена';
  $page_content = render_template('404.php', []);
}

$layout_content = render_template('layout.php', 
    ['is_auth' => $is_auth, 
    'user_name' => $user_name, 
    'user_avatar' => $user_avatar, 
    'content' => $page_content, 
    'title' => $title, 
    'categories' => $categories]);

print($layout_content);
?>
