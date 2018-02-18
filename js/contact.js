
$(document).ready(function() {
    $('#monForm').on('submit', function(e) {
        e.preventDefault(); // J'empêche le comportement par défaut du navigateur, de soumettre le formulaire
        // Je récupère les valeurs
        var genre = $('input[name=genre]:checked', '#monForm').val();
        var nom = $('#nom').val();
        var prenom = $('#prenom').val();
        var email = $('#email').val();
        var telephone = $('#telephone').val();
        var message = $('#message').val();
        var client = $('#client').val();
        // Je vérifie pour ne pas lancer la requête HTTP en cas erreur
        if(nom === ''|| prenom==='' ||  email === ''  || telephone==='' || message==='') {
            alert('Les champs doivent êtres remplis');
        } else {
            window.location.href ="mailto:" + "site-du-hackeur@live.fr" +"?&bcc= &subject= &body="+"nom: "+
            nom+"%0D%0Aprénom: "+prenom+"%0D%0Agenre: "+ genre +"%0D%0Atéléphone: "+ telephone +"%0D%0Aemail: "+email+"%0D%0Aclient: "+client+"%0D%0Amessage: "+message;
        }
    });
});