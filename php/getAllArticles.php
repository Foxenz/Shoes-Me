<?php
session_start(); // Démarrage de la session
require_once '../php/config.php'; // On inclut la connexion à la base de données

// Récupération des paramètres de filtre
$category = isset($_POST['category']) ? $_POST['category'] : '';
$minPrice = isset($_POST['minPrice']) ? $_POST['minPrice'] : 0;
$maxPrice = isset($_POST['maxPrice']) ? $_POST['maxPrice'] : 999999;
$search = isset($_POST['search']) ? $_POST['search'] : '';

// Préparation de la requête SQL en fonction des paramètres de filtre
$sql = "SELECT * FROM articles WHERE price >= :minPrice AND price <= :maxPrice";
$params = array(':minPrice' => $minPrice, ':maxPrice' => $maxPrice);

if (!empty($category)) {
    $sql .= " AND category = :category";
    $params[':category'] = $category;
}

if (!empty($search)) {
    $sql .= " AND title LIKE :search";
    $params[':search'] = "%$search%";
}

$req = $bdd->prepare($sql);
$req->execute($params);
$data = $req->fetchAll();

echo json_encode($data);
die();
