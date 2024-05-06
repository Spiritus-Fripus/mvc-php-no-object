<?php

function index()
{
    require '../models/artists.manager.php';
    $artists = getAllArtists();

    $template = '../views/artist/index.html.php';
    require '../views/layout.html.php';
}

// GET & POST
function create()
{
    // on verifie que le formulaire est bien envoyé grace au name du bouton
    if (isset($_POST['create_artist_submit'])) {

        if (!empty($_POST['artist']['name'])) {

            // on inclut notre ficher de manager
            require '../models/artists.manager.php';

            // on appel la fonction du manager pour insérer les donées en bdd
            if (addArtist($_POST['artist'])) {
                header('Location: /?controller=artist&action=index');
                exit;
            }
        }
    }
    $template = '../views/artist/create.html.php';
    require '../views/layout.html.php';
}
