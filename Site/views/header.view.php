<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Barber Shop</title>
    <!--Check whether a variable is empty-->
    <!--This function returns true if the variable exists and is not NULL, otherwise it returns false-->
    <?php
    if (isset($head))
    {
        echo $head;
    }
    ?>
</head>
<body>
<!--Header-->
    <header class="head_nav">
        <img class="logo" src="../img/logo.jpg" alt="logo">
        <nav>
            <ul class="nav_links">
            <li><a href="accueil.php">Accueil</a></li>
            <li><a href="#">Galerie</a></li>
            <li><a class="replace" href="#">Boutique</a></li>
            <li><a class="change" href="#">Prendre rendez vous</a></li>
            <li><a href="#">Contact</a></li>
        </nav>
        <div class="main">
            <a class="btn" href="employe.php"><button>Se connecter</button></a>
        </div>
    </header>
<!--End header-->
<?php echo '<img src="../img/menu.png" alt="menu" class="menu-bar">'; ?>
<script src="/Site/js/menu.js"></script>
