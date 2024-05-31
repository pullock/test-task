<?php
    session_start();

    include 'php/create-table.php';
    include 'php/enter.php';
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
            <div class="form__enter">
                <div><?=  $answer ?></div>
                <form action="" method="POST">
                    <div class="block__input"><input type="text" name="login" placeholder="Email или телефон"></div>
                    <div class="block__input"><input type="password" name="password" placeholder="Пароль"></div>
                    <div class="block__input"><input type="submit" value="Войти"></div>
                    <div class="block__input"><a href="registration.php">Регистрация</a></div>
                </form>
            </div>
        </div>
    </body>
    <script src="js/index.js"></script>
</html>