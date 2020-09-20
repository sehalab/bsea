$(document).ready(function() {
    $(".color1").click(function() {
        $("#colors").attr("href", "http://localhost/siteesciam/public/css/color/color1.css");
        var color = $("#colors").attr("href");
        $.post(
            "controllers/colorchanger.php", {
                color: color
            },
            function(data) {
                if (data == "ok") {
                    location.reload(true);
                    console.log(color);
                }
            },
            "dataType"
        );
        return false;
    });


    $(".color2").click(function() {
        $("#colors").attr("href", "http://localhost/siteesciam/public/css/color/color2.css");
        var color = $("#colors").attr("href");
        $.post(
            "controllers/colorchanger.php", {
                color: color
            },
            function(data) {
                if (data == "ok") {
                    location.reload(true);
                    console.log(color);
                }
            },
            "dataType"
        );
        return false;
    });

    $(".color3").click(function() {
        $("#colors").attr("href", "http://localhost/siteesciam/public/css/color/color3.css");
        var color = $("#colors").attr("href");
        $.post(
            "controllers/colorchanger.php", {
                color: color
            },
            function(data) {
                if (data == "ok") {
                    location.reload(true);
                    console.log(color);
                }
            },
            "dataType"
        );
        return false;
    });

    $(".color4").click(function() {
        $("#colors").attr("href", "http://localhost/siteesciam/public/css/color/color4.css");
        var color = $("#colors").attr("href");
        $.post(
            "controllers/colorchanger.php", {
                color: color
            },
            function(data) {
                if (data == "ok") {
                    location.reload(true);
                    console.log(color);
                }
            },
            "dataType"
        );
        return false;
    });

    $(".color5").click(function() {
        $("#colors").attr("href", "http://localhost/siteesciam/public/css/color/color5.css");
        var color = $("#colors").attr("href");
        $.post(
            "controllers/colorchanger.php", {
                color: color
            },
            function(data) {
                if (data == "ok") {
                    location.reload(true);
                    console.log(color);
                }
            },
            "dataType"
        );
        return false;
    });

    $(".color6").click(function() {
        $("#colors").attr("href", "http://localhost/siteesciam/public/css/color/color6.css");
        var color = $("#colors").attr("href");
        $.post(
            "controllers/colorchanger.php", {
                color: color
            },
            function(data) {
                if (data == "ok") {
                    location.reload(true);
                    console.log(color);
                }
            },
            "dataType"
        );
        return false;
    });

    $(".color7").click(function() {
        $("#colors").attr("href", "http://localhost/siteesciam/public/css/color/color7.css");
        var color = $("#colors").attr("href");
        $.post(
            "controllers/colorchanger.php", {
                color: color
            },
            function(data) {
                if (data == "ok") {
                    location.reload(true);
                    console.log(color);
                }
            },
            "dataType"
        );
        return false;
    });

    $(".color8").click(function() {
        $("#colors").attr("href", "http://localhost/siteesciam/public/css/color/color8.css");
        var color = $("#colors").attr("href");
        $.post(
            "controllers/colorchanger.php", {
                color: color
            },
            function(data) {
                if (data == "ok") {
                    location.reload(true);
                    console.log(color);
                }
            },
            "dataType"
        );
        return false;
    });

    $('.icon').click(function(event) {
        event.preventDefault();
        if ($(this).hasClass('inOut')) {
            $('.mp-color').stop().animate({ right: '0px' }, 500);
        } else {
            $('.mp-color').stop().animate({ right: '-200px' }, 500);
        }
        $(this).toggleClass('inOut');
        return false;

    });





});