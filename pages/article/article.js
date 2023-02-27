$(document).ready(function() {
    // Récupération de l'id de l'article
    var id = window.location.search.split("=")[1];

    // Récupération de l'utilisateur connecté
    var idUser = sessionStorage.getItem('user');

    // Récupération de l'article via son id
    $.ajax({
        type: "post",
        url:  "../../php/getArticle.php",
        data: {
            id : id
        },
        success: function(data){
            data = JSON.parse(data);
            // Affichage du titre de l'article
            $("#article").append(
            `
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0" src="${data[0][6]}" alt="..." />
            </div>
            
            <div class="col-md-6">
                <div class="small mb-1">${data[0][2]}</div>

                <h1 class="display-5 fw-bolder">${data[0][1]}</h1>
                
                <div class="fs-5 mb-5">
                    <span>${data[0][4]} €</span>
                </div>
                
                <p class="lead">${data[0][3]}</p>
                
                <div class="d-flex">
                    <input class="form-control me-3" id="inputQuantity" type="number" value="1" style="max-width: 6rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="button" onclick="addToCart(${id}, $('#inputQuantity').val(), ${idUser}); alert('Ajouté au panier')">
                        <i class="bi-cart-fill me-1"></i>
                        Ajouter au panier
                    </button>
                </div>
            </div>
            `
            );
        },
        error: function(data){
            alert("Erreur");
        }
    });
}); 

// Ajout d'un article au panier dans la session
function addToCart(id, quantity, idUser) {
    // On vérifie si le panier existe déjà dans la session
    if (!sessionStorage.getItem('cart_' + idUser)) {
      // Si non, on initialise le panier
      var cart = [];
    } else {
      // Si oui, on récupère le panier existant
      var cart = JSON.parse(sessionStorage.getItem('cart_' + idUser));
    }
    
    alreadyInCart = false;
    // each item in cart in jquery
    $.each(cart, function(index, value) {
        // if item already in cart, update quantity
        if (value.id == id) {
            value.quantity = parseInt(value.quantity) + parseInt(quantity);
            alreadyInCart = true;
        }
    });

    // if item not in cart, add it
    if (!alreadyInCart) {
        cart.push({
            id: id,
            quantity: quantity
        });
    }
    
    sessionStorage.setItem('cart_' + idUser, JSON.stringify(cart));
  }

