<?php

function email_validator($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function select($gender)
{
    if (!empty($gender))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function deleteid($id)
{
    if (!empty($id))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function phone_number_validator($phone_number)
{
    if (preg_match('#(0|\+33)[1-9]( *[0-9]{2}){4}#', $phone_number))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function password_validator($password)
{

    if (preg_match("/[a-z]/i", $password))
    {
        if (preg_match("/[0-9]/", $password))
        {
            if (preg_match("/^.{8,32}$/", $password))
            {
                return array(true, "Compte crée");
            }
            else
            {
                return array(false, "le mots de pass doit faire entre 8 et 32 charactere");
            }
        }
        else
        {
            return array(false, "il manque au moin un numero");
        }
    }
   else
   {
       return array(false, "il manque au moin une lettre");
   }
}


function confirmation($password, $repeatPassword): bool
{
    if ($password !== $repeatPassword)
    {
        return false;
    }
    else
    {
        return true;
    }
}