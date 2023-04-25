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
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="espaceAdmin">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Ajouter un Etudiant</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>