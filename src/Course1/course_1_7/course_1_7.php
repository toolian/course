<?php

declare(strict_types=1);

$users = [
    [
        'name' => 'Игорь',
        'gender' => 'male',
        'birthday' => '1983-08-17',
    ],
    [
        'name' => 'Толик',
        'gender' => 'male',
        'birthday' => '1994-09-17',
    ],
    [
        'name' => 'Саша',
        'gender' => 'male',
        'birthday' => '1992-07-09',
    ],
    [
        'name' => 'Света',
        'gender' => 'female',
        'birthday' => '31-12-1994',
    ],
    [
        'name' => 'Даша',
        'gender' => 'female',
        'birthday' => '01-05-2001',
    ],
    [
        'name' => 'Вика',
        'gender' => 'female',
        'birthday' => '1995-01-01',
    ],
];

$males = [];
$females = [];
$filterDate = '01-01-1995';
$filteredUsers = [];
/*
 * 1 задание:
 * разложить пользователей из $users по гендерному признаку в массивы $males и $females
 */

foreach ($users as  $user){
    if($user['gender'] === 'male'){
        $males[] = $user;
    }else{
        $females[] = $user;
    }
}
//var_dump($females);
//var_dump($males);
/*
 * 2 задание:
 * отфильтровать пользователей из $users, берем всех пользователе день рождение которых больше или равно $filterDate и кладем их в массив $filteredUsers
 */
//foreach ($users as $user) {
//    if (strtotime($user['birthday']) >= strtotime($filterDate)) {
//        $filteredUsers[] = $user;
//    }
//}
//
// var_dump($filteredUsers);
/*
 * 3 задание:
 * отфильтровать пользователей из $users, оставить в $users пользователей у которых дата >= $filterDate, без использования доп массивов
 */
//foreach ($users as $key => $user) {
//    if (date("Y-m-d", strtotime($user['birthday'])) >= date("Y-m-d", strtotime($filterDate))) {
//        unset($users[$key]);
//    }
//}
//
//
//var_dump($users);
foreach ($users as $key => $user) {
    unset($users[$key]['gender'], $users[$key]['birthday']);
}
var_dump($users);