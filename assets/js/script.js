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
});