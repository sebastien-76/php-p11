

session_start();

if (($_SESSION['auth'] ?? false) == false) {
    // si l'utilisateur n'est pas authentifié, on le renvoie vers la page d'accueil
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
