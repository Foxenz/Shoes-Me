    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <!-- Logo -->
            <a class="navbar-brand" href="../landing/landing.php">Shoes-me</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <!-- Shop -->
                    <li class="nav-item"><a class="nav-link" href="../shop/shop.php">Boutique</a></li>
                    <!-- Logout -->
                    <li class="nav-item login_nav">
                        <a class="nav-link" href="../../php/logout.php">Déconnexion</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-outline-dark" href="../cart/cart.php">Panier
                        <i class="bi-cart-fill me-1"></i>
                        <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                    </a>
                </form>
            </div>
        </div>
    </nav>

    <script>
        // Sélectionnez votre icône de menu et votre élément de navigation
        const menuIcon = document.querySelector('.navbar-toggler');
        const menuNav = document.querySelector('#navbarSupportedContent');

        // Ajoutez un écouteur d'événements de clic à votre icône de menu
        menuIcon.addEventListener('click', function() {
            // Ajoutez ou supprimez la classe "show" pour votre élément de navigation
            menuNav.classList.toggle('show');
        });
    </script>