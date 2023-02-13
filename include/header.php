<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $title == "Accueil" ? "./assets/css/style.css" : "../../assets/css/style.css" ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= $title == "Accueil" ? "./assets/js/script.js" : "../../assets/js/script.js" ?>"></script>
    <title><?= $title ?></title>
    <!-- LINK CSS AND SCRIPT FOR MVC -->
    <link rel="stylesheet" href="<?= $mvc ?>_style.css">
    <script src="<?= $mvc ?>_script.css"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= $title == "Accueil" ? "./index.php" : "../../index.php" ?>">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $title == "Accueil" ? "./pages/auth/auth.php" : "../auth/auth.php" ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $title == "Accueil" ? "./pages/cart/cart.php" : "../cart/cart.php" ?>">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>