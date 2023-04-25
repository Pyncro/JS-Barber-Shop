<?php

$head =     '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
             <link rel="stylesheet" href="http://localhost:8080/css/espaceAdmin.css" type="text/css">';

include_once RACINE.DIRECTORY_SEPARATOR."/views/navabarAdmin.php";
include_once RACINE.DIRECTORY_SEPARATOR."/views/newBarber.view.php";
include_once RACINE.DIRECTORY_SEPARATOR."/models/Barber.php";
include_once RACINE.DIRECTORY_SEPARATOR."/function/regex_validator.php";


if (isset($_POST["last_name"]) && isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone_number"]) && isset($_POST["password"]) && isset($_POST["gender"]) && isset($_POST["password_confirmation"]))
{

    $newBarber = new Barber();
    $last_name = $_POST['last_name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['password_confirmation'];
    $gender = $_POST['gender'];

    if (email_validator($email))
    {
        if ($newBarber->emailFree($email))
        {
            if (phone_number_validator($phone_number))
            {
                try {
                    if ($newBarber->numFree($phone_number))
                    {
                        if (password_validator($password)[0])
                        {
                            if (confirmation($password, $repeatPassword))
                            {
                                if (select($gender))
                                {
                                    $newBarber->newBarber($last_name, $name, $email, $phone_number, hash("sha256", $password), $gender);
                                    echo "Barber Ajouté";
                                }
                                else
                                {
                                    echo "Veuillez sélectionner un genre !";
                                }
                            }
                            else
                            {
                                echo "Le mot de passe ne correspond pas !";
                            }
                        }
                        else
                        {
                            echo password_validator($password)[1];
                        }
                    }
                    else
                    {
                        echo "Numéro de telephone deja utilisé";
                    }
                }
                catch (Exception $e)
                {
                    echo "Error : " . $e->getMessage();
                }
            }
            else
            {
                echo "Numéro de téléphone invalide";
            }
        }
        else
        {
            echo "email deja utillisez";
        }
    }
    else
    {
        echo "email invalide";
    }
}
else
{
    include_once RACINE . DIRECTORY_SEPARATOR . "/views/newBarber.view.php";
}
