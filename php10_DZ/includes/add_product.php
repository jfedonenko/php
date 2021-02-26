<?php

print_r ($_POST);

$title = $_POST['title'];
$textare = $_POST['textare'];
$category = $_POST['category'];
$prace = $_POST['prace'];

$content = "назкание товара : $title\nкатегория: $category\nОписание: $textare\nЦена: $prace";
$filename = "$prace.txt";
$fp = fopen($filename, "w"); //w - write (записать)
fwrite($fp, $content);
fclose($fp);