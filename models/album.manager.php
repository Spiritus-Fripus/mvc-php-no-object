<?php
require '../config/connect.php';

function getAllAlbum()
{
    global $pdo;
    $query = $pdo->query("SELECT * FROM album");
    return $query->fetchAll();
}
