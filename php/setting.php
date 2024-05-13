<?php
// Привет, детка.

// Привет малышка, если ты скачала этот комментарий себе, то у нас всё получилось

// Все получилось.

    // подключаемся к серверу
    $conn = new PDO("mysql:host=localhost", "root", "");
     
    // SQL-выражение для создания базы данных
    $sql = "CREATE IF NOT EXISTS DATABASE example-1";
    // выполняем SQL-выражение
    $conn->exec($sql);
    echo "Database has been created";
?>