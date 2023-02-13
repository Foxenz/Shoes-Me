<?php
$title = "Login";
$mvc = "auth";
require_once('../../include/header.php')
?>

<div class="container">
    <form id="formLogin">
        <input type="email" placeholder="Email" id="email">
        <input type="password" placeholder="Mot de passe" id="password">
        <input type="submit" id="submit" value="Me connecter" />
    </form>

    <div id="error" class="alert alert-danger" role="alert">
        <p id="errorText">Mail ou mot de passe incorrect</p>
    </div>
</div>

<?php require_once('../../include/footer.php') ?>