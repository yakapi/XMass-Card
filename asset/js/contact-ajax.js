$(function () {

    // Ajout d'événement lors de l'envoi du formulaire
    $('#card-form').submit(function (e) {

        // Enlever le comportement par défaut lors de l'envoi
        e.preventDefault();

        // Mettre à zéro les messages d'erreur
        $('.error').empty();

        // Récupérer le contenu du formulaire dans une variable
        let postdata = $('#card-form').serialize();

        // AJAX
        $.ajax({
            // type de requête (get ou post)
            type: 'POST',
            // url vers lequel on envoie les données : fichier ciblé
            url: 'contact-ajax.php',
            // type de données à recevoir
            data: postdata,
            dataType: 'json',
            // si succès -> fonction à exécuter
            success: function(result) {
                // Si nous n'avons pas de messages d'erreur
                if (result.isSuccess) {
                    $("#choose-card").append("<div class='txt-pc txt-c'>Message sent successfully!</p>");

                    // Remettre les valeurs à zéro
                    $("#card-form")[0].reset();
                }
                else {
                    // Afficher les messages d'erreur
                    $("#f-name-error").html(result.from_name_error);
                    $("#f-mail-error").html(result.from_mail_error);
                    $("#t-name-error").html(result.to_name_error);
                    $("#t-mail-error").html(result.to_mail_error);
                }

            }

        });


    });


})
