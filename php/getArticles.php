<?php
session_start(); // Démarrage de la session
require_once '../php/config.php'; // On inclut la connexion à la base de données

// Récupération des données d'article
$req = $bdd->prepare('SELECT * FROM articles');
$req->execute();
$data = $req->fetchAll();

echo json_encode($data);
die();
