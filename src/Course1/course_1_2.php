<?php

declare(strict_types=1);

// if
if (' ' === true) {
    echo 'true';
}

$result = '';
$test = 15;
//if ($test !== null) {
//    $result = $test;
//}
$result = $test ?? '';
//$result = null ?? 0 ?? 1;

//$limit = stripslashes($_GET['limit']) ?? 10;

//$sql = 'SELECT id FROM table LIMIT ' . $limit;
//echo $sql;

// switch
$result = '';
$o = $_GET['o'] ?? '';
$a = 10;
$b = 2;

//if ($o === '+') {
//    $result = $a + $b;
//}
//if ($o === '-') {
//    $result = $a - $b;
//}
//if ($o === '*') {
//    $result = $a * $b;
//}
//if ($o === '/') {
//    $result = $a / $b;
//}

//switch ($o) {
//    case '+':
//        $result = $a + $b;
//        break;
//    case '-':
//        $result = $a - $b;
//        break;
//    case '*':
//        $result = $a * $b;
//        break;
//    case '/':
//        $result = $a / $b;
//        break;
//    default: $result = 0;
//}
//echo $result;

// for

// while

// foreach

// Array

// Функции
