<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des produits</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="fonctions.js"></script>
</head>
<body>
    <div class="container">
        <h1>Gestion des produits</h1>
        <form action="auth.php" method="post">
            <div class="form-group">
                <label for="US_login">Login</label>
                <input type="text" id="US_login" name="US_login" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="US_password">Mot de passe</label>
                <input type="password" id="US_password" name="US_password" class="form-control" value="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </div>
        </form>
    </div>
</body>
</html>