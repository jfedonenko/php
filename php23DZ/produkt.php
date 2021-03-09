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

<h1>Оставить отзыв</h1>

<form action="/includes/action/comment.php" method="post">

    <input
            type="hidden"
            name="product_id"
            value="<?= $product["id"]?>
    ">

    <p>Ваше имя</p>
    <input type="text" name="name">
    <p>Отзыв</p>
    <textarea name="body" id="" cols="30" rows="10"></textarea>
    <br>
    <br>
    <button> Добавить отзыв</button>
</form>

<h3>
    Все отзывы
</h3>
<ul>
    <pre>

    <!--Делаем выборку все комментариев -->
<?php
$comments = mysqli_query($db, "SELECT * FROM `reviews` WHERE  `product_id` = $id");

while ($comment = mysqli_fetch_assoc($comments)){
//    print_r($comment);
    ?>

    <li>
        <?= $comment["name"]?></b>
        <?= $comment["body"]?>
    </li>


<?php
}
?>


    </pre>
</ul>

