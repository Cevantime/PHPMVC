<?php

require_once 'vendor/autoload.php';

session_start();

// Je transforme les URI du type nomhote/index.php/qqchose?foo=bar 
// en /qqchose
$uri = $_SERVER['REQUEST_URI'];

$uri = str_replace($_SERVER['SCRIPT_NAME'], '', $uri);

$questionMarkPos = strpos($uri, "?");

if ($questionMarkPos !== FALSE) {
    $uri = substr($uri, 0, $questionMarkPos);
}


switch ($uri) {
    case "":
    case "/":
        // CODE A EXECUTER POUR LA PAGE D'ACCUEIL
        require_once 'Controller/home.php';
        break;
    case "/listusers":
        // CODE A EXECUTER SI LA PAGE VISITEE A L'URI /edituser
        require_once 'Controller/listusers.php';
        break;

    default :
        // SI L'URI N'EST PAS GEREE : ERREUR 404
        http_response_code(404);
        echo 'Page Not Found';
}

