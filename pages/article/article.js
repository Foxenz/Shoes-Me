$(document).ready(function() {
    // Récupération de l'id de l'article
    var id = window.location.search.split("=")[1];

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
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="button" onclick="addToCart(${id}, $('#inputQuantity').val()); alert('Item added to cart')">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
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

function addToCart(id, quantity) {
    // On vérifie si le panier existe déjà dans la session
    var cart = sessionStorage.getItem('cart') ? JSON.parse(sessionStorage.getItem('cart')) : [];

    // On cherche si l'article est déjà présent dans le panier
    var itemIndex = cart.findIndex(function(item) {
        return item.id === id;
    });

    // Si l'article est déjà présent, on met à jour sa quantité
    if (itemIndex !== -1) {
        cart[itemIndex].quantity += quantity;
    } else {
        // Sinon, on ajoute l'article au panier
        cart.push({
            id: id,
            quantity: quantity
        });
    }

    // On sauvegarde le panier dans la session
    sessionStorage.setItem('cart', JSON.stringify(cart));
}

