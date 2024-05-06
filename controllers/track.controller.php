<?php

function index()
{
    require '../models/tracks.manager.php';
    $tracks = getAllTracks();

    $template = '../views/track/index.html.php';
    require '../views/layout.html.php';
}
