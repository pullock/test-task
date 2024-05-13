<?php
// Привет, детка.

// Привет малышка, если ты скачала этот комментарий себе, то у нас всё получилось

// Все получилось.

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

    if (isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["password_2"])) {

        $name = $_POST["name"];
        $password = $_POST["password"];
        $password_2 = $_POST["password_2"];

        $sql = "INSERT INTO users (name, password, password_2) VALUES ($name, $password, $password_2)";
        $conn->exec($sql);
        header('Location: index.php', true, 303);
    }
?>