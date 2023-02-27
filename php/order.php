<?php
session_start(); // Démarrage de la session
require_once '../php/config.php'; // On inclut la connexion à la base de données

$cart = $_POST['cart'];
$idUser = $_POST['idUser'];

// check foreach article in cart if quantity is available
foreach ($cart as $article) {
    $id = $article['id'];
    $quantity = $article['quantity'];
    $req = $bdd->prepare("SELECT stock FROM articles WHERE id = '$id'");
    $req->execute();
    $data = $req->fetch();
    if ($data['stock'] < $quantity) {
        echo "not enough quantity";
        die();
    } else {
        // update stock
        $newStock = $data['stock'] - $quantity;
        $req = $bdd->prepare("UPDATE articles SET stock = '$newStock' WHERE id = '$id'");
        $req->execute();
    }
}

echo "success";
