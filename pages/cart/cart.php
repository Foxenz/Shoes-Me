<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP AND JQUERY -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- CSS AND JAVASCRIPT pour Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- STYLE AND SCRIPT -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="./cart.js"></script>

    <!-- TITLE -->
    <title>Article</title>
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
    require_once '../../include/nav.php';
    ?>

    <br />
    <h1 class="text-center">Votre Panier</h1>
    <br />
    <br />

    <!-- Product section-->
    <div id="cart-items"></div>

    <br />

    <!-- Prix total -->
    <div id="total-price" class="text-center"></div>
    <br />

    <!-- Bouton pour supprimer le panier -->
    <div class="text-center">
        <button id="clear-cart" class="btn btn-danger">Supprimer le panier</button>
    </div>
    <br />

    <?php require_once('../../include/footer.php') ?>
</body>

</html>