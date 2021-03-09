<?php



//подключаем БД
require_once '../db.php';


//создаем переменную для фото
$path = "uploads/" . time() . "_" . $_FILES["image"]["name"];


//проврка на ошибки
if (move_uploaded_file($_FILES["image"]["tmp_name"],"../../" . $path)){


    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $category = $_POST["category"];

// подключаем mysqli вносим в переменную
   $query = mysqli_query($db, "INSERT INTO `products` (`id`, `title`, `description`, `price`, `category`, `img`)
VALUES (NULL, '$title', '$description', '$price', '$category', '$path')");




   // делаем проверку переменной mysqli
//    if($query){
//        die("Produck  is store");
//    }else {
//        die("Errrrorrr  is store");
//    }

// можно сделавть через тернарный оператор
       $message = ($query) ?  "Produck  is store" : "Errrrorrr  is store";

    // т.к у нас остановка кода в любом случаи ьл тожно :
    die(($query) ?  "Produck  is store" : "Errrrorrr  is store");

    } else {
        die('Errrrorrr');
        }
