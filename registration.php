<?php
    include 'php/reg.php';
?>
<!DOCTYPE html>
<html lang="ru-RU">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="">
        <meta name="discription" content="Тестовое задание">
        <meta name="author" content="Петр Ласточкин">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/style.css?24">
        <title>Тестовое задание</title>
    </head>
    <body>
        <div class="main__block">
            <div class="form__reg">
                <div><?=  $answer ?></div>
                <form action="" method="POST">
                    <div class="block__input"><input type="text" name="name" maxlength="15" placeholder="Имя"></div>
                    <div class="block__input"><input type="text" name="email" maxlength="30" placeholder="Email"></div>
                    <div class="block__input"><input type="text" name="tel" maxlength="11" placeholder="Телефон 89990000000"></div>
                    <div class="block__input"><input type="password" name="password" maxlength="30" placeholder="Пароль"></div>
                    <div class="block__input"><input type="password" name="password_two" maxlength="30" placeholder="Пароль повторно"></div>
                    <div class="block__input"><input type="submit" value="Зарегистрироваться"></div>
                </form>
            </div>
        </div>
    </body>
    <script src="js/index.js"></script>
</html>