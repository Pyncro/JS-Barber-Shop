<?php

require dirname(__FILE__).DIRECTORY_SEPARATOR."/function/regex_validator.php";

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

if (isset($_POST['password']) && isset($_POST['password_confirmation']))
{
    $password = $_POST['password'];
    $repeatPassword = $_POST['password_confirmation'];

    if (password_validator($password)[0])
    {
        if (confirmation($password, $repeatPassword))
        {
            echo 'ok';
        }
        else
        {
            echo 'not match';
        }
    }
    else
    {
        echo password_validator($password)[1];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form method="post">
        <label for="password"></label>
        <input type="password" name="password" required id="password">

        <label for="password_confirmation"></label>
        <input type="password" name="password_confirmation" required id="password_confirmation">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
