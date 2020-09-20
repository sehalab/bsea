$(document).ready(function() {
    $("#signin").click(function(e) {
        e.preventDefault();

        var nomcomplet = $("#nom").val();
        var mdp = $("#mdp").val();
        var institut = $('#institut').val();
        var login = $("#pseudo").val();
        var gender = $("#gender").val();
        var avatar = '';

        if (gender == 'F') {
            avatar = 'avatar-w.png';
        } else avatar = 'avatar-m.png';

        $.post(
            "controllers/users.php", {
                nom: nomcomplet,
                login: login,
                password: mdp,
                avatar: avatar,
                institution: institut,
                action: 'ajouter',
                genre: gender
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