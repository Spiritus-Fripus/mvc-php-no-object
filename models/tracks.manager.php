<?php

function getAllTracks()
{
    require '../config/connect.php';
    $query = $pdo->query("SELECT * FROM track");
    return $query->fetchAll();
}
