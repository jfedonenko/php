<?php

require_once 'includes/db.php';

$products = mysqli_query($db ,"SELECT * FROM `products`");

?>


<h1>
    Добавление товара
</h1>
<form action="includes/action/add_product.php"
      method="post"
      enctype="multipart/form-data">
    <p>Title</p>
    <input type="text" name="title">
    <p>description</p>
    <textarea name="description" ></textarea>
    <p>Price</p>
    <input type="number" name="price">
    <p>Category</p>
    <select name="category" id="">
        <option value="">Смартфон </option>
        <option value="">Ноутбук </option>
        <option value="">Телевизор </option>
    </select>
    <p>Product IMG</p>
    <input type="file" name="image">
    <br>
    <br>
    <button type="submit"> New Product </button>

</form>

<H1>
    Вывод списока товаров
</H1>
<table>
    <tr>
        <th>id</th>
        <th>image</th>
        <th>title</th>
        <th>price</th>
        <th>category</th>
    </tr>
    <?php

    while ($product = mysqli_fetch_assoc($products))
    {
        ?>
        <tr>
            <td><?= $product["id"]?></td>
            <td><img src="<?= $product["img"]?>" width="150"></td>
            <td><?= $product["title"]?></td>
            <td><?= $product["price"]?>$</td>
            <td><?= $product["category"]?></td>
            // один продукт
            <td>
                <a href="produkt.php?id=<?= $product["id"]?> ">Look</a>
            </td>
        </tr>

        <?php
    }
    ?>

</table>