<?php

ini_set('memory_limit', '300M');

$list = __DIR__. '/comments.csv';
$csv = fopen($list,'rb');

$comments = [];
while(!feof($csv)) {
    $comments[] = fgetcsv($csv);
}
fclose($csv);

unset($comments[0]);
//echo '<pre>';
//print_r($comments);
//echo '</pre>';
$userNameKey = 3;
$questionKey = 5;
$startNameKey = 6;
$startTextKey = 8;
$maxComments = 10;

foreach ($comments as $row) {
	echo "{$row[$userNameKey]} {$row[$questionKey]}:<br>";
    $nameKey = $startNameKey;
    $textKey = $startTextKey;
	for ($i = 0; $i < $maxComments; $i++) {
        if (!empty($row[$nameKey])) {
            echo "- {$row[$nameKey]} {$row[$textKey]}<br>";
        }
        $nameKey += 3;
        $textKey += 3;
    }

	echo '<br>';
}