<?php

declare(strict_types=1);

// Функции
// Включение файлов
// Классы

$data = include 'data/data.php';
$finance = new Finance();
$template = new Template();

$expenses = $finance->getByType($data, 'expense');
$output = $template->render('templates/table.html', [
    'tableData' => $expenses,
    'title' => 'расходы'
]);

echo $output;


