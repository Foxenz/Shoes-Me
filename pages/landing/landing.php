<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP AND JQUERY -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- STYLE AND SCRIPT -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="./landing.css">
    <script src="../../assets/js/script.js"></script>

    <!-- TITLE -->
    <title>Landing Page</title>
</head>

<body>
    <?php
    session_start();
    require_once '../../php/config.php'; // ajout connexion bdd 
    // si la session existe pas soit si l'on est pas connecté on redirige
    if (!isset($_SESSION['user'])) {
        header('Location:../../index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM users WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();

    require_once '../../include/nav.php';
    ?>

    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-4 text-white">Shoes-Me</h1>
                    <p class="text-white my-3">
                        Nous savons que les Sneakers sont plus qu'une simple paire de chaussures,
                        c'est un style de vie, une passion, une expression de soi-même.
                    </p>
                    <a href="../shop/shop.php" class="btn btn-outline-light">Voir nos produits</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>