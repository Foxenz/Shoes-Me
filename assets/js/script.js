$(document).ready(function() {
    // Cache le bouton de connexion et d'inscription au chargement de la page et le réaffiche si les champs sont remplis
    $('button[type="submit"]').hide();
    $('form input').on('keyup', function() {
        var email = $('input[name="email"]').val();
        var password = $('input[name="password"]').val();
        
        if (email != '' && password != '') {
            $('button[type="submit"]').show();
        } else {
            $('button[type="submit"]').hide();
        }
    });
});
