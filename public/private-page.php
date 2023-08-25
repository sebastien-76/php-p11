<?php

require __DIR__.'/../vendor/autoload.php';

session_start();

/*  if (!isset($_SESSION['auth']) || $_SESSION['auth'] != true) {

}*/

if (($_SESSION['auth'] ?? null) != true) {
    header('LOCATION: login.php', true, 302);
    exit();
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page privée</title>
</head>
<body>
    <h1>page privée</h1>
</body>
</html>
