<?php
require_once  __DIR__ . "/vendor/autoload.php";

//подключаем класс Connect
use App\Connect;


//для проверки БД $bd Connect делаем код
if (!Connect::check()){
    die("-----Ошибка в классе Connect - База Данных-----");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "inclides/head.php"?>
<body>
<?php require_once "inclides/header.php"?>
<div class="offer">
    <div class="container d-flex  align-items-center">

        <div class="reg">
            <h6 class="reg__title">Чат</h6>
            <p class="reg__text">
                Начни общаться легко
            </p>
            <form action="#" class="reg__form">
                <input type="text" name="name" class="reg__input input"placeholder="Введите имя" required>
                <input type="email" name="email" class="reg__input input" placeholder="Введите E-mail" required>
                <input type="tel" name="phone" class="reg__input input" placeholder="сообщение" required>
                <button type="submit" class="reg__btn button"> Оставить сообщение </button>
            </form>
            <p class="reg__text reg__text_tiny">
                Ваши данные под защитой
            </p>
        </div>
    </div>
</div>
</header>

</body>
