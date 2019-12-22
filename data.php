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
        'name' => '2014 Rossignol District Snowboard',
        'cat' => $categories[0],
        'price' => 10999,
        'img' => 'img/lot-1.jpg',
        'description' => ''
    ],
    [
        'name' => 'DC Ply Mens 2016/2017 Snowboard',
        'cat' => $categories[0],
        'price' => 159999,
        'img' => 'img/lot-2.jpg',
        'description' => ''
    ],
    [
        'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'cat' => $categories[1],
        'price' => 8000,
        'img' => 'img/lot-3.jpg',
        'description' => ''
    ],
    [
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'cat' => $categories[2],
        'price' => 10999,
        'img' => 'img/lot-4.jpg',
        'description' => ''
    ],
    [
        'name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'cat' => $categories[3],
        'price' => 7500,
        'img' => 'img/lot-5.jpg',
        'description' => ''
    ],
    [
        'name' => 'Маска Oakley Canopy',
        'cat' => $categories[5],
        'price' => 5400,
        'img' => 'img/lot-6.jpg',
        'description' => ''
    ]
];
?>