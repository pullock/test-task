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
?>