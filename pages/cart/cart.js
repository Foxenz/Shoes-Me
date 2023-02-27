$(document).ready(function(){
    // Récupération du panier depuis la session
    var idUser = sessionStorage.getItem('user');
    var cart = JSON.parse(sessionStorage.getItem('cart_'+idUser));

    // Si le panier est vide on affiche un message
    if (!cart) {
        $("#cart-items").append(
            `                                                                                           
            <div class="text-center">
                <h3>Votre panier est vide</h3>
                <a href="../shop/shop.php" class="btn btn-outline-dark">Retour à la page produits</a>
            </div>
            `
        );
    // Sinon on affiche les articles
    } else {
        // Parcours du panier
        for (var key in cart) {
            // Vérification que la propriété appartient bien à l'objet
            if (cart.hasOwnProperty(key)) {
                // Récupération de l'article correspondant à l'id
                $.ajax({
                    type: "post",
                    url:  "../../php/getArticle.php",
                    data: {
                        id : key
                    },
                    success: function(data){
                        data = JSON.parse(data);
                        // Prix total par article
                        var totalPrice = data[0][4] * cart[data[0][0]];
                        // Création de l'élément HTML pour l'article
                        var item = `
                        <div class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3">
                                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                    <img class="img-fluid w-100" src="${data[0][6]}" alt="Sample">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5>${data[0][1]}</h5>
                                            <p class="mb-3 text-muted text-uppercase small">${data[0][2]}</p>
                                            <p class="mb-2 text-muted text-uppercase small">${data[0][4]} €</p>
                                        </div>
                                        <div>
                                            <div class="def-number-input number-input safari_only mb-0 w-100">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus">-</button>
                                                <input class="quantity" min="0" name="quantity" value="${cart[data[0][0]]}" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">+</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div id="trash">
                                            <a type="button" class="card-link-secondary small text-uppercase mr-3"><i class="fas fa-trash-alt mr-1"></i> Remove item </a>
                                        </div>
                                        <p class="mb-0"><span><strong>${totalPrice} €</strong></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        `;
                        // Ajout de l'élément HTML dans la vue
                        $("#cart-items").append(item);
                    },
                    error: function(data){
                        alert("Erreur");
                    }
                });
            }
        }
    }
    

    // Suppression du panier
    $("#clear-cart").click(function(){
        sessionStorage.removeItem('cart_'+idUser);
        window.location.href = "../cart/cart.php";
    });
    

    // Prix total
    var total = 0;
    for (var key in cart) {
        if (cart.hasOwnProperty(key)) {
            $.ajax({
                type: "post",
                url:  "../../php/getArticle.php",
                data: {
                    id : key
                },
                success: function(data){
                    data = JSON.parse(data);
                    total += data[0][4] * cart[key];
                    $("#total-price").html("Total : " + total + "€");
                },
                error: function(data){
                    alert("Erreur");
                }
            });
        }
    }
});