<?php


// print_r($_FILES);

if($_FILES ["image"]["type"] !== "image/png" "image/jpg"){
	echo"Файл не поддерживается";
	die();
}
$path = "includes/". time() . "_" .  $_FILES["image"]["name"]; // запись в папку с присвоением имени

$_FILES["image"];
if(move_uploaded_file($_FILES["image"]["tmp_name"], $path)){
	echo "DONE";
} else {
	echo "NO";
}