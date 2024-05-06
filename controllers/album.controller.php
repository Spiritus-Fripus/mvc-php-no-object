<?php

function index()
{
    require '../models/album.manager.php';
    $albums = getAllAlbum();

    $template = '../views/album/index.html.php';
    require '../views/layout.html.php';
}
