<?php

declare(strict_types=1);

// числа
$number = 1;
$number2 = 1.5;

//echo $number + $number2 . '<br>';

//echo '$number - 1' . '<br>';
//echo "{$number} - 1" . "<br>";

// строки
$str = '$number - 1' . '<br>';
$str2 = "{$number} - 1" . "<br>";

//echo $str . '<br>';
//echo $str2 . '<br>';

for ($i = 0; $i < strlen($str); $i++) {
    echo 'char -' . $i . '<br>';
}

// логические значения
//$t = true;
//$f = false;
//if (1 === 1 && 1 === 0) {
//    echo 'true';
//} else {
//    echo 'false';
//}

// массивы
$params = [
  1,
  3,
  4,
];
$params2 = [
    2,
    5,
    6,
];

$result = [];
//$result[] = 1;
//$result[] = 3;
print_r($params);
echo '<br>';
for ($i = 0; $i < count($params); $i++) {
    $result[] = $params[$i];
}
for ($i = 0; $i < count($params2); $i++) {
    $result[] = $params2[$i];
}
print_r($result);