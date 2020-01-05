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

function validate_length ($str, $min, $max) {
    if (strlen($str) < $min || strlen($str) > $max) {
        return "Количество символов данного поля должно быть от $min до $max";
    }
};

function validate_category ($cat, $cat_list) {
    if (!in_array($cat, $cat_list)) {
        return 'Выбрана несуществующая категория';
    }
};

function validate_rate ($price) {
    if ($price <= 0) {
        return 'Начальная цена должна быть больше 0';
    }
};

function validate_step ($price) {
    if ($price <= 0) {
        return 'Шаг ставки должен быть больше 0';
    }
};

function validate_date ($date) {
    $tomorrow_date = date('Y-m-d', strtotime("+1 days"));
    $target_date = date_parse($date);
    $is_date_valid = checkdate($target_date['month'], $target_date['day'], $target_date['year']);
    if ($date < $tomorrow_date) {
        return 'Дата должна быть по меньшей мере больше на 1 день текущей даты';
    } else if (!$is_date_valid) {
        return ('Введите корректную дату. Правильный формат: ГГГГ-ММ-ДД');
    }
}

function validate_post ($rules) {
    foreach ($rules as $key => $value) {
        if(!empty($rules[$key])) {
            $errors[$key] = $value;
        }
    }
    return $errors;
}

function filtrate_lots ($numbers, $lots) {
    $result = [];
    foreach ($numbers as $num) {
        if ($lots[$num]) {
            $result[] = $lots[$num];
        }
    }
    return $result;
};

function search_user_by_email($email, $users) {
    foreach ($users as $user) {
        if ($email == $user['email']) {
            return $user;
        }
    }
}

?>
