<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP & JQUERY -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- STYLE & SCRIPT-->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>

    <!-- TITLE -->
    <title>Connexion</title>
</head>

<body>
    <div class="login-form">
        <form id="loginForm">
            <h2 class="text-center">Connexion</h2>
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <button id="connectButton" type="submit" class="btn btn-primary btn-block">Connexion</button>
            </div>
        </form>
        <div class="alert alert-danger" id="error"></div>
        <p class="text-center"><a href="./pages/register/register.php">Inscription</a></p>
    </div>
</body>

</html>