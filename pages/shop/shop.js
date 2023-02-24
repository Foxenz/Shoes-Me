$(document).ready(function() {
    // Système d'affichage des articles de ma base de donnée 
    $.ajax({
        type: "post",
        url:  "../../php/getAllArticles.php",
        success: function(data){
            data = JSON.parse(data);
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
        },
        error: function(data){
            alert("Erreur");
        }
    });
});