$(document).ready(function() {
    $("#update").click(function(e) {
        e.preventDefault();

        var nomcomplet = $("#nom").val();
        var mdp = $("#mdp").val();
        var institut = $('#institut').val();
        var login = $("#pseudo").val();

        $.post(
            "controllers/users.php", {
                nom: nomcomplet,
                login: login,
                password: mdp,
                institution: institut,
                action: 'modifier'
            },
            function(data) {
                var reponse = JSON.parse(data);
                console.log(reponse);
                if (reponse.message == "empty") {
                    toastr.warning('Completer tous les champs');
                } else {
                    location.reload(true);
                }
            },
            "dataType"
        );
        return false;
    });
});