
<?php
require_once  __DIR__ . "/vendor/autoload.php";

//подключаем класс Connect
use App\Connect;
use App\Rooms;



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
    <div class="container d-flex justify-content-between align-items-center">
        <!------ БЭМ БЛОК------>
        <div class="info">
            <p class="info__workshop info__worksho_">
                <i class="fa fa-power-off info__icon"></i>
                начни общатся сейчас
            </p>
            <h1 class="info__title">
                СОЗДАВАЙТЕ КОМНАТУ ЛЕГКО
            </h1>
            <span class="info__time">
						мы online
					</span>
        </div>

        <!------ БЭМ БЛОК для формы------>
        <div class="reg">
            <h6 class="reg__title">СОЗДАТЬ КОМНАТУ</h6>

<!--            для отправки формы указываем путь action="create-room.php" method="post"-->
<!--            input name="title"-->
<!--            button name="submit"-->

            <form action="/create-room.php" method="post" class="reg__form">
                <input type="text" name="title" class="reg__input input"placeholder="Название комнаты" required>
                <button class="reg__btn button" name="submit"> Отправить  </button>
            </form>

            <?php
                 if (!is_null($_POST["submit"]))
                    {
                      $room = Rooms::create($_POST["title"]);
             ?>

                    <p class="reg__text reg__text_tiny">
            <?php echo $room ? "Комната успешна создана" : "Ошибка при создании комнаты" ?>
                    </p>

            <?php
                    }
            ?>

        </div>
    </div>
</div>
</header>

</body>