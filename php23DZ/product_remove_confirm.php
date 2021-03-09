<?php
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
<form action="includes/action/delit.php" method="post">
    <input type="hidden" name="id" value="<?= $product["id"]?>">

    <h3>Действительно удалить продукт: <?= $product["title"]?>?</h3>
    <img src="<?= $product["img"]?>" width="150">

    <br><br><br>
    <button type="submit">Done</button>
    <br><br><br>
    <a href='/'>Вернутся на ГЛАВНУЮ</a> <br>
    <br>
</form>

