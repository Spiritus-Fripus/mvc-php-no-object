<?php

// On inclut dynamiquement le fichier de contrôleur

if (!empty($_GET['controller'])) {

    $controllerName = $_GET['controller'];
} else {
    $controllerName = 'home';
}

if (file_exists('../controllers/' . $controllerName . '.controller.php')) {

    require '../controllers/' . $controllerName . '.controller.php';

    if (!empty($_GET['action'])) {

        $action = $_GET['action'];
    } else {

        $action = 'index'; // Action par défault du contrôleur
    }
    if (function_exists($action)) {
        $action(); // Index par défaut
    } else {
        require '../controllers/error.controller.php';
        notFound(); // Action 404
    }
} else {
    require '../controllers/error.controller.php';
    notFound(); // Action 404
}
