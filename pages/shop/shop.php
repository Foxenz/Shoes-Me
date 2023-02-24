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
    <script src="./shop.js"></script>

    <!-- TITLE -->
    <title>Shop</title>
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

    <!-- Section-->
    <section class="py-5">
        <!-- Bouton de filtres -->
        <div class="row">
            <div class="col-2"></div>

            <div class="form-group col-2">
                <label for="category-filter">Catégorie</label>
                <select id="category-filter" class="form-control">
                    <option value="">Tous</option>
                    <option value="Jordan 1">Jordan 1</option>
                    <option value="Jordan 4">Jordan 4</option>
                    <option value="Dunk">Dunk</option>
                    <option value="Air Force 1 ">Air Force 1</option>
                </select>
            </div>

            <div class="form-group col-2">
                <label for="min-price-filter">Prix minimum</label>
                <input type="number" id="min-price-filter" class="form-control" value="" />
            </div>
            <div class="form-group col-2">
                <label for="max-price-filter">Prix maximum</label>
                <input type="number" id="max-price-filter" class="form-control" value="" />
            </div>

            <div class="form-group col-2">
                <label for="search-filter">Recherche</label>
                <input type="text" id="search-input" class="form-control" />
            </div>

            <div class="col-2"></div>
        </div>

        <div class="container px-4 px-lg-5 mt-5">
            <div id="articles" class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            </div>
        </div>
    </section>


    <?php require_once('../../include/footer.php') ?>
</body>

</html>