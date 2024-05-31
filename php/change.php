<?php

    include 'connect.php';

    if (isset($_POST['name']) OR isset($_POST['email']) OR isset($_POST['tel']) OR isset($_POST['password'])){

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $login = $_SESSION['name'];

        if (isset($_POST['name'])){

            $login = $_SESSION['email'];
            $name = $_POST['name'];
            $sql = "UPDATE users SET user_name='$name' WHERE user_mail='$login'";

        } else if (isset($_POST['email'])){

            $email = $_POST['email'];
            $sql = "UPDATE users SET user_mail='$email' WHERE user_name='$login'";

        } else if (isset($_POST['tel'])){

            $tel = $_POST['tel'];
            $sql = "UPDATE users SET user_tel='$tel' WHERE user_name='$login'";

        } else if (isset($_POST['password'])){
            
            $pass = $_POST['password'];
            $sql = "UPDATE users SET user_password='$pass' WHERE user_name='$login'";

        }

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $stmt = $conn->prepare("SELECT user_name, user_mail, user_tel FROM users WHERE user_name='$login' OR user_mail='$login'");

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $_SESSION['name'] = $result['user_name'];
        $_SESSION['tel'] = $result['user_tel'];
        $_SESSION['email'] = $result['user_mail'];

        $conn = null;

    }
?>