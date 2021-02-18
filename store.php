<?php


print_r ($_POST);




$title = $_POST['title'];
$category = $_POST['category'];
$textare = $_POST['textare'];

$content = "назкание товара : $title\nкатегория: $category\nОписание: $textare";
$filename = "$title.txt";
$fp = fopen($filename, "w"); //w - write (записать)
fwrite($fp, $content);
fclose($fp);