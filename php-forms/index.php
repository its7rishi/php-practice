<?php

if ($_SERVER['REQUEST_METHOD'] == "post") {
    if (empty($_POST["username"])) {
        $username_error = "Username is required";
    }

    if (empty($_POST["password"])) {
        $password_error = "Password is required";
    }
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
</head>

<body>
    <form action="" auto_complete="off" method="POST">
        Username: <input type="text" name="username">
        <span><?php if (isset($username_error)) echo $username_error; ?></span>
        <br><br>
        Password: <input type="password" name="password" id="">
        <span><?php if (isset($password_error)) echo $password_error; ?></span>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>