<?php
    $servername = "MySQL-8.2";
    $username = "root";
    $password = "";
    $dbname = "users";

    if (isset($_POST['login']) AND isset($_POST['password'])){
        $answer = '';

        $login = $_POST['login'];
        $password_enter = $_POST['password'];

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $stmt = $conn->prepare("SELECT user_name, user_mail, user_tel, user_password FROM users WHERE user_mail='$login' OR user_tel='$login'");

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            $answer = 'Пользователь не найден';
        } else if ($password_enter != $result['user_password']) {
            $answer = 'Неверный пароль!';
        } else if ($password_enter == $result['user_password']) {
            $_SESSION['name'] = $result['user_name'];
            $_SESSION['tel'] = $result['user_tel'];
            $_SESSION['email'] = $result['user_mail'];

            $conn = null;

            header("Location: main-page.php");
            exit();
        }
    }
?>