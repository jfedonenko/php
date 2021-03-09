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


<h1>
   Добавление и редактирование товаров
</h1>
создаем новый файл для сохранения продуктоа
<form action="includes/action/save.php"
      method="post"
      enctype="multipart/form-data">

делаем input с  type="hidden"
    <input type="hidden" name="id" value="<?= $product["id"]?>">
    <input type="hidden" name="img_url" value="<?= $product["img"]?>">
    <p>Title</p>
    <input type="text" name="title" value="<?= $product["title"]?>">
    <p>description</p>
    <textarea name="description" ><?= $product["description"]?></textarea>
    <p>Price</p>
    <input type="number" name="price" value="<?= $product["price"]?>">
    <p>Category</p>
    <select name="category" id="">
        <option><?= $product["category"]?> </option>

        <?php $categories = ['Смартфон', 'Ноутбук', 'Телевизор'];
            foreach ( $categories as $category){
                if ($category !== $product ["category"]) {
                    echo "<option>" . $category . " </option>";
                }
            }

        ?>


    </select>
    <p>Product IMG</p>
    <img src="<?= $product["img"]?>" alt="" width="150"> <br><br>
    <input type="file" name="img">
    <br>
    <br>
    <button type="submit"> Save</button>

</form>
<br>
<a href='/'>Home</a> <br>
<br>