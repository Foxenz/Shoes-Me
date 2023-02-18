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
            <hr />
            <a href="../../php/logout.php" class="btn btn-danger btn-lg">Déconnexion</a>
        </div>
    </div>
</div>

<?php require_once('../../include/footer.php') ?>