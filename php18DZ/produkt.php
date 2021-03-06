<?php

//вывод одного продукта


//print_r($_GET);

//подключаем файл
require_once 'includes/db.php';

//смотрим наш id из запроса
$id = $_GET["id"];

$product = mysqli_query($db, "SELECT * FROM `products` WHERE  `id` = $id");
//если оштка, то
if (mysqli_num_rows($product) === 0){
    die("not product");
}

$product = mysqli_fetch_assoc($product);

?>

<h2>Category: <?= $product["category"]?></h2>
<h1>Model: <?= $product["title"]?></h1>
<div>
    <img src="<?= $product["img"]?>" alt="" width="230">
    <p><?= $product["description"]?></p>
    <p>price: <?= $product["price"]?> $ </p>
</div>


