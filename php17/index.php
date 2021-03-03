
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
         <div class="container text-align-center align-items-center">
             <div class="reg">


                <?php

                $rooms = mysqli_query(Connect::db(), "SELECT * FROM `rooms`");

                while ($room = mysqli_fetch_assoc($rooms)){


                ?>
                 <h6 class="reg__title">
                    
                  <?= $room["title"] ?>

                </h6>
                <p class="reg__text">
                    Количество участников 92
                </p>
                <form action="#" class="reg__form">
                    <input type="text" name="name" class="reg__input input"placeholder="Ваше имя" required>

                    <button type="submit" class="reg__btn button"> Войти</button>
                </form>
                <p class="reg__text reg__text_tiny">
                    Ваши данные под защитой
                </p>

                <?php


                }
                ?>
            </div>
        </div>
    </div>
</header>

</body>
