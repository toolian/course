<?php

declare(strict_types=1);

/**
 * 1 income 500
 * 6 expense 600
 * 2 expense 200
 * 3 income 300
 */

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

// Задача 1

//print_r($data[7]['id']);

//echo '<table>';
//echo '<tr>';
//echo '<td>type</td>';
//echo '<td>value</td>';
//echo '<td>text</td>';
//echo '</tr>';
//$count = count($data);
//for ($i = 0; $i < $count; $i++) {
//    if ($data[$i]['type'] === 'income') {
//        echo '<tr>';
//        echo '<td>' . $data[$i]['type'] . '</td>';
//        echo '<td>' . $data[$i]['value'] . '</td>';
//        echo '<td>' . $data[$i]['text'] . '</td>';
//        echo '</tr>';
//    }
//}
//echo '</table>';
//
//
//echo '<table>';
//echo '<tr>';
//echo '<td>type</td>';
//echo '<td>value</td>';
//echo '<td>text</td>';
//echo '</tr>';
//$count = count($data);
//for ($i = 0; $i < $count; $i++) {
//    if ($data[$i]['type'] === 'expense') {
//        echo '<tr>';
//        echo '<td>' . $data[$i]['type'] . '</td>';
//        echo '<td>' . $data[$i]['value'] . '</td>';
//        echo '<td>' . $data[$i]['text'] . '</td>';
//        echo '</tr>';
//    }
//}
//echo '</table>';
//foreach ($data as $row) {
//    print_r($row);
//}
echo '<table>';
echo '<tr>';
echo '<td>type</td>';
echo '<td>value</td>';
echo '<td>text</td>';
echo '</tr>';

foreach ($data as $row) {
    if ($row['type'] === 'income') {
        echo '<tr>';
        echo '<td>' . $row['type'] . '</td>';
        echo '<td>' . $row['value'] . '</td>';
        echo '<td>' . $row['text'] . '</td>';
        echo '</tr>';
    }
}
echo '</table>';

echo '<table>';
echo '<tr>';
echo '<td>type</td>';
echo '<td>value</td>';
echo '<td>text</td>';
echo '</tr>';

foreach ($data as $row) {
    if ($row['type'] === 'expense') {
        echo '<tr>';
        echo '<td>' . $row['type'] . '</td>';
        echo '<td>' . $row['value'] . '</td>';
        echo '<td>' . $row['text'] . '</td>';
        echo '</tr>';
    }
}
echo '</table>';



function sum($a, $b) {
    return $a + $b;
}
echo  sum(2, 3);

function printTable($data, $type) {
    $result = '';
    $result .= '<table>';
    $result .= '<tr>';
    $result .= '<td>type</td>';
    $result .= '<td>value</td>';
    $result .= '<td>text</td>';
    $result .= '</tr>';

    foreach ($data as $row) {
        if ($row['type'] === $type) {
            $result .= '<tr>';
            $result .= '<td>' . $row['type'] . '</td>';
            $result .= '<td>' . $row['value'] . '</td>';
            $result .= '<td>' . $row['text'] . '</td>';
            $result .= '</tr>';
        }
    }
    $result .= '</table>';

    return $result;
}

$str1 = printTable($data, 'income');
$str2 = printTable($data, 'expense');

echo $str1 .'<hr>'. $str2;


// for

// foreach

// Array

// Функции
