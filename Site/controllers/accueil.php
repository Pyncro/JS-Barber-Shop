<?php

/*
 * $head variable
 * All css files are included in this variable
 * This variable is then controlled to display the content of
 * the different files
 * */

$head =     '<link rel="stylesheet" href="'.$domain.'/css/body.css" type="text/css"/>
             <link rel="stylesheet" href="http://www.js_barber_shop.com:8080/css/entete.css" type="text/css"/>';

// We include the different pages in the view directory with the "include_once" keyword
include_once $racine .DIRECTORY_SEPARATOR. "/views/header.view.php";