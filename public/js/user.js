$(document).ready(function() {
    $("#login").click(function(e) {
        e.preventDefault();

        var login = $("#form3").val();
        var mdp = $("#form2").val();
        var action = "login";
        if (login && mdp) {
            $.post(
                "controllers/users.php", {
                    login: login,
                    psw: mdp,
                    action: action
                },
                function(data) {
                    var response = JSON.parse(data);
                    if (response.message != "ok") {
                        toastr.info(response.message);
                    } else {
                        toastr.success("Vous etes connecté");
                        location.reload(true);
                    }
                }
            );
        } else {
            toastr.warning('Compléter tous les champs');
        }
        return false;
    });

});