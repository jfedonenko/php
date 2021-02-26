<?php

print_r ($_POST);

$model = $_POST['model'];
$color = $_POST['color'];
$horsepower = $_POST['horsepower'];
$production_year = $_POST['production_year'];

$content = "назкание: $model\nЦвет: $color\nСила: $horsepower\nГод $production_year";
$filename = "$model.txt";
$fp = fopen($filename, "w"); //w - write (записать)
fwrite($fp, $content);
fclose($fp);