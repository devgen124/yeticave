<?php
// ставки пользователей, которыми надо заполнить таблицу
$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];
$is_auth = (bool) rand(0, 1);
$user_name = 'Константин';
$user_avatar = 'img/user.jpg';
$categories = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];
$lots_list = [
    [
        'lot-name' => '2014 Rossignol District Snowboard',
        'category' => $categories[0],
        'lot-rate' => 10999,
        'lot-img' => 'img/lot-1.jpg',
        'message' => ''
    ],
    [
        'lot-name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => $categories[0],
        'lot-rate' => 159999,
        'lot-img' => 'img/lot-2.jpg',
        'message' => ''
    ],
    [
        'lot-name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => $categories[1],
        'lot-rate' => 8000,
        'lot-img' => 'img/lot-3.jpg',
        'message' => ''
    ],
    [
        'lot-name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => $categories[2],
        'lot-rate' => 10999,
        'lot-img' => 'img/lot-4.jpg',
        'message' => ''
    ],
    [
        'lot-name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => $categories[3],
        'lot-rate' => 7500,
        'lot-img' => 'img/lot-5.jpg',
        'message' => ''
    ],
    [
        'lot-name' => 'Маска Oakley Canopy',
        'category' => $categories[5],
        'lot-rate' => 5400,
        'lot-img' => 'img/lot-6.jpg',
        'message' => ''
    ]
];
?>
