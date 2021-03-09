<?php

require_once '../db.php';
$new_img = false;
$path = "";
if ($_FILES["img"]["name"]) {
    $new_img = true;

    //создаем переменную для фото
    $path = "uploads/" . time() . "_" . $_FILES["img"]["name"];
    //проврка на ошибки

    if (!move_uploaded_file($_FILES["img"]["tmp_name"], "../../" . $path)) {
        die("Error add image");
    }
}
$id = $_POST["id"];
$title = $_POST["title"];
$description = $_POST["description"];
$price = $_POST["price"];
$category = $_POST["category"];


if (!$new_img){
    $path = $_POST["img_url"];
}


$query =  mysqli_query($db,"UPDATE `products` SET `title` = '$title', `description` = '$description',  `price` = '$price', `category` = '$category', `img` = '$path' WHERE `products`.`id` = $id");

echo "<a href='/'>Home</a> <br>
<br>";

die ($query ? "Save" : "Error query save");
