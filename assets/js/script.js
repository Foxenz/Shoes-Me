$(document).ready(function() {
    // Cache le bouton de connexion et d'inscription au chargement de la page et le réaffiche si les champs sont remplis
    $('#connectButton').hide();
    $('form input').on('keyup', function() {
        var email = $('input[name="email"]').val();
        var password = $('input[name="password"]').val();
        
        if (email != '' && password != '') {
            $('#connectButton').show();
        } else {
            $('#connectButton').hide();
        }
    });

    // Système de connexion
    $("#loginForm").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "post",
            url:  "../../php/login.php",
            data: {
                email : $("#email").val(),
                password : $("#password").val()
                }, 
            success: function(data){
                if(data == "Success"){
                    window.location.href = "../../pages/landing/landing.php";
                }else if(data == "Erreur"){
                    $("#error").css("color", "red").html("Mot de passe ou email incorrect");
                    $("#error").css("display", "block");
                }
            },
            error: function(data){
                alert("Erreur");
            }
        });
    });

    // Si on clique sur le message d'erreur, on le cache
    $("#error").click(function(){
        $("#error").css("display", "none");
    });

    // Système d'affichage des articles de ma base de donnée 
    $.ajax({
        type: "post",
        url:  "../../php/getArticles.php",
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