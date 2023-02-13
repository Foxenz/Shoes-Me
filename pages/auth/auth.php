<?php
$title = "Login";
$mvc = "auth";
require_once('../../include/header.php')
?>

<div class="container">
    <form>
        <input type="email" placeholder="Email" id="email">
        <input type="password" placeholder="Mot de passe" id="password">
        <input type="submit" value="Me connecter" id="submit">
    </form>
</div>

<?php require_once('../../include/footer.php') ?>