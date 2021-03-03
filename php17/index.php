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
    <div class="container text-align-center align-items-center">
        <h2> Список комнат:</h2>


<ul class="rooms">

    <?php
    $rooms = mysqli_query(Connect::db(), "SELECT * FROM `rooms`");
    while ($room = mysqli_fetch_assoc($rooms)){
    ?>

    <li class="rooms_list">
        <h6 class="reg__title">

            <?= $room["title"] ?>

        </h6>
        <p class="reg__text">
            Количество участников 92
        </p>
        <form action="/" class="reg__form" method="post">
            <input type="hidden" name="id" value=" <?= $room["id"] ?>">
            <input type="text" name="username" class="reg__input input"placeholder="Ваше имя" required>
            <button type="submit" name="submit_<?=$room["id"] ?>" class="reg__btn button"> Войти</button>
        </form>

        <?php
                 if (!is_null($_POST["submit_" . $room["id"]])){
                  $member = Rooms::addMembers($_POST["username"], $_POST["id"]);
                  if ($member){
                        header('location: /chat.php?room_id=' . $room["id"] . '&member_id' . $member);
                  }else{
                echo '  <p class="reg__text reg__text_tiny">
           Ошибка при переходе 
                </p>';
            }
        }

        ?>
    </li>
        <?php
        }
        ?>
</ul>



    </div>
</div>
</header>

</body>