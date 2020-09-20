$(document).ready(function() {
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#target').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image").change(function() {
        readURL(this);
        $("#exampleModalCenter").modal('show');
        $("#savechanges").click(function(e) {
            e.preventDefault();
            $("#save").click();
        });
    });
    $("#form").submit(function(event) {
        event.preventDefault();
        if ($("#image").val()) {

            $("#loader-icon").show();
            $("#target-layer").hide();

            $(this).ajaxSubmit({
                target: '#target-layer',
                beforeSubmit: function() {
                    $(".progress-bar").width("0%");
                },
                uploadProgress: function(event, position, total, percentageComplete) {
                    $('.progress-bar').animate({
                        width: percentageComplete + '%'
                    }, {
                        duration: 1000
                    });
                },
                success: function() {
                    $("#loader-icon").hide();
                    $("#target-layer").show();
                    location.reload(true);
                },
                resetForm: true
            });
        } else toastr.warning('Veuillez charger une image');
        return false;
    });
});