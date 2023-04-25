<?php

include_once RACINE.DIRECTORY_SEPARATOR."/models/Database.php";

class Barber extends Database
{
    function emailFree($email)
    {
        try
        {
            $db = new Database();
            $db->prep_request("SELECT COUNT(email) FROM Barber WHERE email = '".$email."'");
            $result = $db->result();
            if ($result[0]["COUNT(email)"] == "0")
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch (PDOException $e)
        {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }


    function numFree($phone_number)
    {
        try
        {
            $db = new Database();
            $db->prep_request("SELECT COUNT(numero_tel) FROM Barber WHERE numero_tel = '".$phone_number."'");
            $result = $db->result();
            if ($result[0]["COUNT(numero_tel)"] == "0")
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch (PDOException $e)
        {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }


    function newBarber($last_name, $name, $email, $phone_number, $password, $gender)
    {
        try
        {
            $db = new Database();
            $db->prep_request("INSERT INTO Barber (nom, prenom, email, numero_tel, password_hash, genre) VALUES ('" . $last_name . "', '" . $name . "', '" . $email . "' , '" . $phone_number . "','" . $password . "', '" . $gender ."')");
            return true;
        }
        catch (PDOException $e)
        {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }
}