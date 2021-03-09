<?php
require_once '../db.php';

// print_r($_POST);
//смотрим наш id из запроса
$name = $_POST["name"];
$body = $_POST["body"];
$product_id = $_POST["product_id"];



$query = mysqli_query($db, "INSERT INTO `reviews` (`id`,
`name`, `body`, `product_id`) VALUES (NULL, '$name', '$body', '$product_id')");

?>
    <a href="/produkt.php?id=<?= $product_id ?> ">Вернутся к продукту</a>



<?php
 //тернарный код если будет ошибе=ка
die ($query ? "ok comment" : "not  comment - error");