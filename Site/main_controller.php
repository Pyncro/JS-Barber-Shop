<?php

// We include different functions that enable to avoid data breaches
include_once 'function/validation.php';
include_once 'function/validation_css.php';

// Domain name
const DOMAIN = "http://localhost:8080";

// To get the directory of current included file :
define('RACINE', dirname(__FILE__));

// Returns the URI of the current page
define('URL', $_SERVER['REQUEST_URI']);

$safe_uri = validateInput(URL);

// Send a cookie if there is none
if (!isset($_SESSION)) {
    session_start();
}

/*
 * Routing system with switch statement :
 * get the user requested path with '$_SERVER' super global variable
 * require the corresponding page
 * */
switch (URL)
{
    case '/':
    case '':
    case '/accueil':
    case '/accueil?':
        include_once RACINE . DIRECTORY_SEPARATOR . "/controllers/home.php";
        break;


    case '/employes':
    case '/employes?':
        include_once RACINE . DIRECTORY_SEPARATOR . "/controllers/employees.php";
        break;


    case '/espaceAdmin':
    case '/espaceAdmin?':
        include_once RACINE.DIRECTORY_SEPARATOR."/controllers/espaceAdmin.php";
        break;


    case '/nouveauBarber':
    case '/nouveauBarber?':
        include_once RACINE.DIRECTORY_SEPARATOR."/controllers/nouveauBarber.php";
        break;


    case str_starts_with($safe_uri, "/javascript/");
        include_once RACINE.DIRECTORY_SEPARATOR."/controllers/javascript.php";
        break;


    case str_starts_with(URL, "/img/"):
        #!!! Data breach
        include_once RACINE.DIRECTORY_SEPARATOR."/controllers/img.php";
        #!!!
        break;


    case str_starts_with(URL, "/css/");
        if (validate_css_path(URL)) {
            include_once RACINE.DIRECTORY_SEPARATOR."/controllers/css.php";
        } else {
            echo "Error";
        }
        break;


    default:
        http_response_code(404);
        include_once RACINE.DIRECTORY_SEPARATOR."/controllers/404_Page.php";
        break;
}
