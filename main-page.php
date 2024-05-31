<?php
    session_start();

    include 'php/change.php';
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
                    <form action="" method="POST">
                        <div class="block__input"><input type="text" name="name" placeholder="<?= $_SESSION['name'] ?>"><input type="submit" value="Изменить"></div>
                    </form>
                    <form action="" method="POST">
                        <div class="block__input"><input type="text" name="email" placeholder="<?= $_SESSION['email'] ?>"><input type="submit" value="Изменить"></div>
                    </form>
                    <form action="" method="POST">
                        <div class="block__input"><input type="text" name="tel" placeholder="<?= $_SESSION['tel'] ?>"><input type="submit" value="Изменить"></div>
                    </form>
                    <form action="" method="POST">
                        <div class="block__input"><input type="password" name="password" placeholder="Пароль"><input type="submit" value="Изменить"></div>
                    </form>
            </div>
        </div>
    </body>
    <script src="js/index.js"></script>
</html>