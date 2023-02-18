<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP AND JQUERY -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- STYLE AND SCRIPT -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- TITLE -->
    <title>Connexion</title>
</head>

<body>
    <div class="login-form">
        <?php
        if (isset($_GET['login_err'])) {
            $err = htmlspecialchars($_GET['login_err']);

            switch ($err) {
                case 'password':
        ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> mot de passe incorrect
                    </div>
                <?php
                    break;

                case 'email':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> email incorrect
                    </div>
                <?php
                    break;

                case 'already':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> compte non existant
                    </div>
        <?php
                    break;
            }
        }
        ?>

        <form action="../php/login.php" method="post">
            <h2 class="text-center">Connexion</h2>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Connexion</button>
            </div>
        </form>
        <p class="text-center"><a href="./pages/register/register.php">Inscription</a></p>
    </div>
</body>

</html>