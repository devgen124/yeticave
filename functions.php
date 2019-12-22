<?php 
function format_price($price) {
    $rounded_price = ceil($price);
    $formatted_price = number_format($rounded_price, 0, ",", " ");
    $formatted_price .= " ₽";
    return $formatted_price;
};
function render_template($src, $data_array) {
    $src = 'templates/' . $src;
    $result = "";

    if (!is_readable($src)) {
        return $result;
    }

    ob_start();
    extract($data_array);
    require($src);

    $result = ob_get_clean();
    return $result;
};
function set_timer () {
    date_default_timezone_set('Asia/Krasnoyarsk');
    $sec_per_day = 86400;
    $curtime = time();
    $tomorrow_date = date('d.m.Y', $curtime + $sec_per_day);
    $tomorrow_timestamp = strtotime($tomorrow_date);
    $diff_in_sec = $tomorrow_timestamp - $curtime;
    $hours = floor($diff_in_sec / 3600);
    $mins = floor(($diff_in_sec % 3600) / 60);
    $separator = $mins < 10 ? ':0' : ':';
    $remaining_time = $hours . $separator . $mins;
    return $remaining_time;
};
?>