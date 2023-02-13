$(document).ready(function(){
    // Récupération des éléments
    const email = $("#email");
    const password = $("#password");
    const submit = $("#submit");

    // Affichage du bouton de connexion si les champs sont remplis
    email.on("input", function(){
        submit.css("display", email.val().length > 0 && password.val().length > 0 ? "block" : "none");
    });
    password.on("input", function(){
        submit.css("display", email.val().length > 0 && password.val().length > 0 ? "block" : "none");
    });

    // Si on clique sur le popup d'erreur, on le cache
    $("#error").click(function(){
        $(this).css("display", "none");
    });

    // Connexion
    $("#formLogin").submit(function(e){
        e.preventDefault();
        $.ajax({
            url: "../../assets/json/users.json",
            type: "GET",
            dataType: "json",
            success: function(data){
                // Vérification des identifiants
                $.each(data.users, function(i, user){
                    if(user.email == email.val() && user.password == password.val()){
                        // Connexion réussie
                        document.cookie = "userID=" + user.id + "; path=/";
                        document.cookie = "userEmail=" + user.email + "; path=/";
                        document.cookie = "userFirstName=" + user.firstName + "; path=/";
                        document.cookie = "userLastName=" + user.lastName + "; path=/";

                        // Redirection vers la page d'accueil
                        window.location.href = "../../index.php";
                        return false;
                    }else{
                        // Connexion échouée
                        $("#error").css("display", "block");
                        return false;
                    }
                });
            },
            error: function(err){
                alert("Erreur lors de la connexion")
            }
        });
    });
});
