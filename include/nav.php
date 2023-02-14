<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE AND SCRIPT -->
    <link rel="stylesheet" href="<?= $title == "Accueil" ? "./assets/css/style.css" : "../../assets/css/style.css" ?>">
    <script src="<?= $title == "Accueil" ? "./assets/js/script.js" : "../../assets/js/script.js" ?>"></script>

    <!-- BOOTSTRAP AND JQUERY -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- LINK CSS AND SCRIPT FOR MVC -->
    <link rel="stylesheet" href="<?= $mvc ?>_style.css">
    <script src="<?= $mvc ?>_script.js"></script>

    <!-- TITLE -->
    <title><?= $title ?></title>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?= $title == "Accueil" ? "./index.php" : "../../index.php" ?>">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <!-- SHOP -->
                    <li class="nav-item"><a class="nav-link" href="<?= $title == "Accueil" ? "./pages/shop/shop.php" : "../shop/shop.php" ?>">Shop</a></li>
                    <!-- BOUTON LOGIN ET LOGOUT -->
                    <?php
                    if (!isset($_COOKIE['userID'])) :
                    ?>
                        <li class="nav-item login_nav">
                            <a class="nav-link" href="<?= $title == "Accueil" ? "./pages/auth/auth.php" : "../auth/auth.php" ?>">Login</a>
                        </li>
                    <?php
                    endif;
                    if (isset($_COOKIE['userID'])) :
                    ?>
                        <a class="nav-link" href="<?= $title == "Accueil" ? "./pages/auth/logout.php" : "../auth/logout.php" ?>">Logout</a>
                    <?php
                    endif;
                    ?>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-outline-dark" href="<?= $title == "Accueil" ? "./pages/cart/cart.php" : "../cart/cart.php" ?>">Cart
                        <i class="bi-cart-fill me-1"></i>
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </a>
                </form>
            </div>
        </div>
    </nav>