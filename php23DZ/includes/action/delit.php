<?php
require_once '../db.php';
//смотрим наш id из запроса
$id = $_POST["id"];

//print_r($id);

$query = mysqli_query($db, "DELETE FROM `products` WHERE `products`.`id` = $id");
?>

    <br>
    <a href='/'>Home</a> <br>
    <br>
<?php
// тернарный код если будет ошибе=ка
die ($query ? "ok delit" : "ni  delit - error");