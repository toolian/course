<?php

declare(strict_types=1);

// Функции
// Включение файлов
// Классы


$data = [
    [
        'id' => 1,
        'type' => 'income',
        'value' => 50500,
        'text' => 'ЗП',
    ],
    [
        'id' => 6,
        'type' => 'expense',
        'value' => 500,
        'text' => 'Бензин',
    ],
    [
        'id' => 2,
        'type' => 'expense',
        'value' => 200,
        'text' => 'Конфеты',
    ],
    [
        'id' => 3,
        'type' => 'income',
        'value' => 300,
        'text' => 'Кэшбэк',
    ],
    [
        'id' => 4,
        'type' => 'expense',
        'value' => 10,
        'text' => 'Вода',
    ],
    [
        'id' => 5,
        'type' => 'income',
        'value' => 1100,
        'text' => 'Премия',
    ],
    [
        'id' => 7,
        'type' => 'expense',
        'value' => 200,
        'text' => 'Мороженое',
    ],
    [
        'id' => 17,
        'type' => 'expense',
        'value' => 10.5,
        'text' => 'Комиссия',
    ],
];

//include 'templates/table.html';

function printTable($data, $type) {
    $result = '';
    $result .= '<table>';
    $result .= '<tr>';
    $result .= '<td>Тип</td>';
    $result .= '<td>Значение</td>';
    $result .= '<td>Текст</td>';
    $result .= '</tr>';
    foreach ($data as $value) {
        if ($value['type'] === $type) {
            $result .= '<tr>';
            $result .= '<td>' . $value['type'] . '</td>';
            $result .= '<td>' . $value['value'] . '</td>';
            $result .= '<td>' . $value['text'] . '</td>';
            $result .= '</tr>';
        }
    }
    $result .= '</table>';

    return $result;
}

echo printTable($data, 'expense');

