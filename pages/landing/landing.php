<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP AND JQUERY -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- STYLE AND SCRIPT -->
    <link rel="stylesheet" href="../../assets/css/style.css">

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

    <div class="container">
        <div class="col-md-12">


            <div class="text-center">
                <h1 class="p-5">Bonjour <?php echo $data['pseudo']; ?> !</h1>
            </div>
        </div>
    </div>

    <?php require_once('../../include/footer.php') ?>
</body>

</html>