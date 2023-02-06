$(document).ready(function(){
    const email = $("#email");
    const password = $("#password");
    const submit = $("#submit");

    email.on("input", function(){
        submit.css("display", email.val().length > 0 && password.val().length > 0 ? "block" : "none");
    });
    password.on("input", function(){
        submit.css("display", email.val().length > 0 && password.val().length > 0 ? "block" : "none");
    });

    submit.on("click", function(event){
        event.preventDefault();

        $.getJSON("../json/users.json", function(data){
            const users = data.users;
            const user = users.find(user => user.email === email.val() && user.password === password.val());

            if (user) {
                alert("Connexion réussie");
            } else {
                alert("Adresse email ou mot de passe incorrect");
            }
        }).fail(function(){
            alert("Erreur de connexion au serveur");
        });
    });
});
