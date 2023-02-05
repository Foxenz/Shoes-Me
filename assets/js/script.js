document.addEventListener("DOMContentLoaded", function() {
    // Récupère les éléments du formulaire
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const submit = document.getElementById("submit");

    // Ajout d'un gestionnaire d'événement pour mettre à jour l'affichage du bouton de connexion en fonction de la saisie de l'utilisateur
    email.addEventListener("input", () => {
        submit.style.display = email.value.length > 0 && password.value.length > 0 ? "block" : "none";
    });
    password.addEventListener("input", () => {
        submit.style.display = email.value.length > 0 && password.value.length > 0 ? "block" : "none";
    });

    // Ajout d'un gestionnaire d'événement pour traiter la demande de connexion lorsque le bouton est cliqué
    submit.addEventListener("click", (event) => {
        event.preventDefault();
    
        const request = new XMLHttpRequest();
        request.open("GET", "../json/users.json", true);
    
        request.onload = () => {
            if (request.status === 200) {
                const users = JSON.parse(request.responseText).users;
                const user = users.find(user => user.email === email.value && user.password === password.value);
                
                if (user) {
                    // Rediriger l'utilisateur vers la page d'accueil
                    alert("Connexion réussie");
                } else {
                    // Afficher un message d'erreur
                    alert("Adresse email ou mot de passe incorrect");
                }
            } else {
                // Afficher un message d'erreur
                alert("Erreur de connexion au serveur");
            }
        };
    
        request.send();
    });
});
