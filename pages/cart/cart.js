$(document).ready(function(){
    // Récupération du panier depuis la session
    var cart = JSON.parse(sessionStorage.getItem('cart'));

    // Parcours du panier
    for (var key in cart) {
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
                                    </div>
                                    <div>
                                        <div class="def-number-input number-input safari_only mb-0 w-100">
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus">-</button>
                                            <input class="quantity" min="0" name="quantity" value="${cart[key]}" type="number">
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div id="trash">
                                        <a type="button" class="card-link-secondary small text-uppercase mr-3"><i class="fas fa-trash-alt mr-1"></i> Remove item </a>
                                    </div>
                                    <p class="mb-0"><span><strong>${data[0][4]} €</strong></span></p>
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
    

    // Suppression du panier
    $("#clear-cart").click(function(){
        sessionStorage.removeItem('cart');
        location.reload();
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
                    $("#total-price").html("Prix total :" + total + " €");
                },
                error: function(data){
                    alert("Erreur");
                }
            });
        }
    }
});