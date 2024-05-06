<?php

/**
 * fonction d'action par défaut du controlleur "home"
 */

function index()
{
    $title = "bienvenue sur la page d'Accueil";
    $template = '../views/home/index.html.php'; // fichier de vue du même nom que l'action dans un dossier du même nom que le controleur
    require '../views/layout.html.php';
}

function about()
{
    $title = "A propos de nous";

    $template = '../views/home/about.html.php';
    require '../views/layout.html.php';
}

function faq()
{
    $title = "FAQ";

    $template = '../views/home/faq.html.php';
    require '../views/layout.html.php';
}
