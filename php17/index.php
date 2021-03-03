
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
                    ты в чате
                </p>
                <h1 class="info__title">
                    КОМНАТА НАЗВАНИЕ
                </h1>
                <span class="info__time">
						мы online
					</span>
            </div>
            <!------ БЭМ БЛОК для формы------>
            <div class="reg">
                <h6 class="reg__title">Забронировать участие</h6>
                <p class="reg__text">
                    Чтобы стать профессионалом в  HTML и CSS, а также делать WOW
                </p>
                <form action="#" class="reg__form">
                    <input type="text" name="name" class="reg__input input"placeholder="Введите имя" required>
                    <input type="email" name="email" class="reg__input input" placeholder="Введите E-mail" required>
                    <input type="tel" name="phone" class="reg__input input" placeholder="Введите телефон" required>
                    <button type="submit" class="reg__btn button"> Оставить заявку </button>
                </form>
                <p class="reg__text reg__text_tiny">
                    Ваши данные под защитой
                </p>
            </div>
        </div>
    </div>
</header>

</body>