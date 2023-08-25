<?php

session_start();

if (($_POST['password'] ?? '') === '123') {
    //l'utilisateur a renseigné le bon mot de passe
    //il est authnetifié
    $_SESSION['auth'] = true;
    header('LOCATION: private-page.php', true, 302);
    exit();
} else {
    //l'utilisateur n'a pasrenseigné le bon mot de passe
    $_SESSION['auth'] = false;
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="password" placeholder="password">
    </form>
</body>
</html>