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

    <!-- TITLE -->
    <title>Inscription</title>
</head>

<body>
    <section class="vh-100" style="background-color: #292E2F;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="../../assets/images/login/login.jpeg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form action="../../php/register.php" method="post">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="h1 fw-bold mb-0">Shoes-Me</span>
                                        </div>

                                        <!-- <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Créer un nouveau compte</h5> -->

                                        <div class="row">
                                            <div class="form-outline mb-4 col-6">
                                                <input type="text" name="pseudo" class="form-control form-control-lg" required="required" />
                                                <label class="form-label" for="pseudo">Pseudo</label>
                                            </div>

                                            <div class="form-outline mb-4 col-6">
                                                <input type="email" name="email" class="form-control form-control-lg" required="required" />
                                                <label class="form-label" for="email">Adresse mail</label>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-outline mb-4 col-6">
                                                <input type="password" name="password" class="form-control form-control-lg" required="required" />
                                                <label class="form-label" for="password">Mot de passe</label>
                                            </div>

                                            <div class="form-outline mb-4 col-6">
                                                <input type="password" name="password_retype" class="form-control form-control-lg" required="required">
                                                <label class="form-label" for="password">Re-tapez votre mot de passe</label>
                                            </div>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button id="connectButton" type="submit" class="btn btn-dark btn-lg btn-block ">Inscription</button>
                                        </div>

                                        <p class="mb-5 pb-lg-2">Déja un compte ? <a style="text-decoration: none;" href="../../index.php">Connectez-vous ici</a></p>

                                        <?php
                                        if (isset($_GET['reg_err'])) {
                                            $err = htmlspecialchars($_GET['reg_err']);

                                            switch ($err) {
                                                case 'success':
                                        ?>
                                                    <div class="alert alert-success">
                                                        <strong>Succès</strong> inscription réussie !
                                                    </div>
                                                <?php
                                                    break;

                                                case 'password':
                                                ?>
                                                    <div class="alert alert-danger">
                                                        <strong>Erreur</strong> mot de passe différent
                                                    </div>
                                                <?php
                                                    break;

                                                case 'email':
                                                ?>
                                                    <div class="alert alert-danger">
                                                        <strong>Erreur</strong> email non valide
                                                    </div>
                                                <?php
                                                    break;

                                                case 'email_length':
                                                ?>
                                                    <div class="alert alert-danger">
                                                        <strong>Erreur</strong> email trop long
                                                    </div>
                                                <?php
                                                    break;

                                                case 'pseudo_length':
                                                ?>
                                                    <div class="alert alert-danger">
                                                        <strong>Erreur</strong> pseudo trop long
                                                    </div>
                                                <?php
                                                case 'already':
                                                ?>
                                                    <div class="alert alert-danger">
                                                        <strong>Erreur</strong> compte deja existant
                                                    </div>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>