<?php
require_once ('init.php');
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

  if (isset($_COOKIE['history'])) {
    $history = json_decode($_COOKIE['history']);
    if (!in_array($lot_id, $history)) {
        $history[] = $lot_id;
        $history_str = $history_str = json_encode($history);
        setcookie('history', $history_str);
    }
} else {
    $history[] = $lot_id;
    $history_str = json_encode($history);
    setcookie('history', $history_str, time() + 60*60*24*7);
}

  if ($lot) {
    $title = $lot['name'];
    $page_content = render_template('lot.php', ['lot' => $lot, 'categories' => $categories]);
  }

} else {
  http_response_code(404);
  $title = 'Страница не найдена';
  $page_content = render_template('error.php', ['heading' => 'Ошибка 404', 'text' => 'Запрашиваемая страница не найдена']);
}

$layout_content = render_template('layout.php',
    ['is_auth' => $is_auth,
    'user' => $user,
    'user_avatar' => $user_avatar,
    'content' => $page_content,
    'title' => $title,
    'categories' => $categories]);

print($layout_content);
?>
