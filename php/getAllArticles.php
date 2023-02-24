<?php
session_start(); // Démarrage de la session
require_once '../php/config.php'; // On inclut la connexion à la base de données

// Récupération de la catégorie du paramètre de filtre
$category = isset($_POST['category']) ? $_POST['category'] : '';

if (!empty($category)) {
    // Récupération des articles de la catégorie sélectionnée
    $req = $bdd->prepare("SELECT * FROM articles WHERE category = '$category'");
} else {
    // Récupération de tous les articles
    $req = $bdd->prepare('SELECT * FROM articles');
}

$req->execute();
$data = $req->fetchAll();

echo json_encode($data);
die();
