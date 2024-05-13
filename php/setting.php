<?php
// Привет, детка.

// Привет малышка, если ты скачала этот комментарий себе, то у нас всё получилось

// Все получилось.

function is_password(string $password): bool
{
    if (
        mb_strlen($password) >= 8
        and preg_match('/[A-Z]/', $password)
        and preg_match('/[a-z]/', $password)
        and preg_match('/[0-9]/', $password)
    ) {
        return true;  // Passed all tests
    }
    return false;     // Invalid
}
    // подключаемся к серверу
    $conn = new PDO("mysql:host=localhost", "root", "");
     
    // SQL-выражение для создания базы данных
    $sql = "CREATE DATABASE IF NOT EXISTS example1";
    // выполняем SQL-выражение
    $conn->exec($sql);

    $conn = new PDO("mysql:host=localhost;dbname=example1", "root", "");

    // SQL-выражение для создания таблицы
    $sql = "CREATE TABLE IF NOT EXISTS users (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), password varchar(30), password_2 varchar(30));";
    // выполняем SQL-выражение
    $conn->exec($sql);

    if (isset($_POST["name"]) AND isset($_POST["password"]) AND isset($_POST["password_2"])) {
        $conn = new PDO("mysql:host=localhost;dbname=example1", "root", "");

        $name = $_POST["name"];
        $password = $_POST["password"];
        $password_2 = $_POST["password_2"];

        $valid    = is_password($password);
        
        if ($valid == true AND $password === $password_2) {
            $sql = "INSERT INTO users (name, password, password_2) VALUES (:name, :password, :password_2)";

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(":name", $name);
            $stmt->bindValue(":password", $password);
            $stmt->bindValue(":password_2", $password_2);
            $stmt->execute();
            header('Location: index.php', true, 303);
        }
         else {
            echo 'Password not strong enough or password values ​​are different.';
        }
    }
?>