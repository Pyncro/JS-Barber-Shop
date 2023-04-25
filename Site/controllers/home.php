<?php

/*
 * $head variable
 * All css files are included in this variable
 * This variable is then controlled to display the content of
 * the different files
 * */

$head =     '<link rel="stylesheet" href="'.DOMAIN.'/css/body.css" type="text/css"/>
             <link rel="stylesheet" href="http://localhost:8080/css/header.css" type="text/css"/>';

// We include the different pages in the view directory with the "include_once" keyword
include_once RACINE.DIRECTORY_SEPARATOR."/views/header.view.php";