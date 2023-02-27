<?php
session_start(); // Démarrage de la session
require_once '../php/config.php'; // On inclut la connexion à la base de données

// Patch XSS
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$email = strtolower($email); // email transformé en minuscule

$check = $bdd->prepare('SELECT pseudo, email, id, password, token FROM users WHERE email = ?'); // On prépare la requête
$check->execute(array($email)); // On exécute la requête
$data = $check->fetch(); // On récupère les données de l'utilisateur
$row = $check->rowCount(); // On compte le nombre de ligne

if ($row > 0) {
    if (password_verify($password, $data['password'])) {
        $_SESSION['user'] = $data['token']; // On créer la session
        echo ("Success-" . $data["id"]); // On renvoie "Sucess" pour dire que la connexion est un succès
        die();
    } else {
        echo ("Erreur-error"); // On renvoie "Erreur" pour dire que la connexion a échoué
        die();
    }
} else {
    echo ("Erreur-error"); // On renvoie "Erreur" pour dire que la connexion a échoué
    die();
}
