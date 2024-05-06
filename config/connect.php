<?php


try {
    global $pdo;
    $pdo = new PDO('mysql:host=localhost;dbname=spotiflux;charset=utf8mb4', 'root', '', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die($e->getMessage());
}
