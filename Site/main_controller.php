<?php

// We include different functions that enable to avoid data breaches
include_once 'function/validation.php';
include_once 'function/validation_css.php';

// Domain name
$domain = "http://localhost";

// To get the directory of current included file :
$racine = dirname(__FILE__);

// Returns the URI of the current page
$req_uri = $_SERVER['REQUEST_URI'];

$safe_uri = validateInput($req_uri);

// Send a cookie if there is none
if (!isset($_SESSION)) {
    session_start();
}

/*
 * Routing system with switch statement :
 * get the user requested path with '$_SERVER' super global variable
 * require the corresponding page
 * */
switch ($req_uri)
{
    case '/':
    case '':
    case '/accueil.php':
    case '/accueil.php?':
        include_once $racine.DIRECTORY_SEPARATOR."/controllers/accueil.php";
        break;


    case str_starts_with($safe_uri, "/javascript/");
        include_once $racine.DIRECTORY_SEPARATOR."/controllers/javascript.php";
        break;


    case str_starts_with($req_uri, "/img/"):
        #!!! Data breach
        include_once $racine.DIRECTORY_SEPARATOR."/controllers/img.php";
        #!!!
        break;


    case str_starts_with($req_uri, "/css/");
        if (validate_css_path($req_uri)) {
            include_once $racine .DIRECTORY_SEPARATOR. "/controllers/css.php";
        } else {
            echo "Error";
        }
        break;


    default:
        http_response_code(404);
        include_once $racine .DIRECTORY_SEPARATOR. "/controllers/404_Page.php";
        break;
}
