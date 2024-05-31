<?php
    $servername = "MySQL-8.2";
    $username = "root";
    $password = "";
    $dbname = "users";

    $conn = new PDO("mysql:host=$servername;", $username, $password);

    $sql = "CREATE DATABASE IF NOT EXISTS users";
    $conn->exec($sql);

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(30) NOT NULL,
    user_mail VARCHAR(30) NOT NULL,
    user_tel INT(10),
    user_password VARCHAR(30) NOT NULL
    )";

    $conn->exec($sql);

    $conn = null;

    #123
?>