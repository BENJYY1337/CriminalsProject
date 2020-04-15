<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Log in</h1>
    <form action="controllers/LoginController.php" method="POST">
        <div>
            <label for="username">Votre pseudo</label>
            <input type="text" name="username" id="username" placeholder="" required autofocus>
        </div>
        <div>
            <label for="password">Votre mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Envoyer">
        <input type="reset" value="Annuler">
</body>

</html>