$(document).ready(function() {
    
    // On appel une fois la fonction pour tous afficher 
    showArticles();

    // Événement lorsqu'un des filtres est modifié
    $("#category-filter, #min-price-filter, #max-price-filter").on("change", function(event) {
        showArticles();
    });

    // Événement lorsqu'on fait une recherche
    $("#search-input").on("input", function(event) {
        showArticles();
    });

    // Fonction pour afficher les articles en fonction des paramètres de filtre sélectionnés
    function showArticles() {
        var category = $("#category-filter").val();
        var minPrice = $("#min-price-filter").val();
        var maxPrice = $("#max-price-filter").val();
        var search = $("#search-input").val();

        // Si minPrice est vide, on met la valeur minimale
        if (minPrice == "") {
            minPrice = 0;
        }

        // Si maxPrice est vide, on met la valeur maximale
        if (maxPrice == "") {
            maxPrice = 99999;
        }

        $.ajax({
            type: "post",
            url:  "../../php/getAllArticles.php",
            data: { category: category, minPrice: minPrice, maxPrice: maxPrice, search: search },
            success: function(data){
                data = JSON.parse(data);
                $("#articles").empty(); // On vide le contenu actuel de la liste d'articles

                // Si on a des articles, on les affiche
                if (data.length > 0) {
                    for (let i = 0; i < data.length; i++) {
                        $("#articles").append(
                            `
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <img class="card-img-top" src="${data[i][7]}" alt="..." />
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <h5 class="fw-bolder">${data[i][1]}</h5>
                                                ${data[i][4]} €
                                            </div>
                                        </div>
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="../article/article.php?id=${data[i][0]}">Voir plus</a></div>
                                        </div>
                                    </div>
                                </div>
                            `
                        );
                    }
                } else {
                    $("#articles").append(
                        `
                            <div class="text-center">
                                <p>Aucun article trouvé.</p>
                            </div>
                        `
                    );
                }
            },
            error: function(data){
                alert("Erreur");
            }
        });
    }
});