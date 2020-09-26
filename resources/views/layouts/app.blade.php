<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link href="/css/fontawesome-all.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- Fonts -->
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/css/addons-pro/stepper.css" rel="stylesheet">
    <!-- Stepper CSS - minified-->
    <link href="/css/addons-pro/stepper.min.css" rel="stylesheet">
    <link href="/css/style.min.css" rel="stylesheet">
    <link href="/css/styleplk.css" rel="stylesheet">
</head>
<body class="fixed-sn light-blue-skin">
    <div id="app">
        <div class="loading-wrapper">
            <div class="loading">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
          <!-- Navbar -->
        <header>
            <!-- Sidebar navigation -->
            <div id="slide-out" class="side-nav sn-bg-4 fixed">
                <ul class="custom-scrollbar">
                    <!-- Logo -->
                    <li>
                        <div class="logo-wrapper waves-light">
                            <a href="#"><img src="/img/mdb-transparent.png" class="img-fluid flex-center" alt="tester"></a>
                        </div>
                    </li>
                    <!--/. Logo -->
                    <!-- Side navigation links -->
                    <li>
                        <ul class="collapsible collapsible-accordion">
                            <li>
                                <a class="collapsible-header waves-effect" href="index.php">
                                    <i class="fas fa-home"></i> Dashboard
                                </a>
                            </li>

                            <li>
                                <a class="collapsible-header waves-effect" href="{{ route('foyer.index') }}">
                                    <i class="fas fa-database"></i> datas
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--/. Side navigation links -->
                </ul>
                <div class="light-blue-skin mask-strong"></div>
            </div>
            <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav light-blue-skin">
                <!-- SideNav slide-out button -->
                <div class="float-left">
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
                </div>
                <!-- Breadcrumb-->
                <div class="breadcrumb-dn mr-auto">
                    <p>tester</p>
                </div>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </nav>
            <!-- /.Navbar -->
        </header>

        <main class="mt-5 pt-5">
            <div class="container">
                    @yield('content')
            </div>
        </main>
    </div>
    <script type="text/javascript" src="/js/jquery-3.4.0.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/js/mdb.min.js"></script>
    <script type="text/javascript" src="/js/jquery.blockUI.js"></script>
    <!-- Initializations -->
    <script type="text/javascript" src="/js/addons-pro/stepper.js"></script>
    <!-- Stepper JavaScript - minified -->
    <script type="text/javascript" src="/js/addons-pro/stepper.min.js"></script>
    <script type="text/javascript" src="/js/addons/datatables.min.js"></script>
    <script type="text/javascript" src="/js/addons/datatables-select.js"></script>
    <script src="/js/datable.js" type="text/javascript"></script>
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
    <script>
        // Data Picker Initialization
        $('.datepicker').pickadate();
    </script>
    <script>
        // Material Select Initialization
        $(document).ready(function() {
        $('.mdb-select').materialSelect();
        });

        $("#dt-more-columns").mdbEditor();
        $(".dataTables_length").addClass("bs-select");

    </script>
    <script>
        function someFunction() {
            setTimeout(function ()
            {
                $('#feedback-step').nextStep();
            }, 2000);
        }

        $(document).ready(function ()
        {
            $('.stepper').mdbStepper();
        })
    </script>
    <script>
        $(document).ready(function(){
            $('.select').change(function(e){
                if($(this).val() === "proprio"){
                    $('.form-control').each(function(index, element){
                        if(typeof $(this).attr('required') == 'undefined'){
                            $(this).attr('disabled', 'disabled');
                        }
                    });
                }
            })
        });
        $(".loading-wrapper").hide();

        $(document).ready(function() {
            $(".loading-wrapper").hide();
            $("form").submit(function(e) {
                e.preventDefault();
                $('.champ + label +div').text('');
                $('.champ').removeClass('is-invalid');
                var next = $("#next").attr('next');
                var fd = new FormData();
                console.log(fd);
                $.ajax({
                    type: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function(){
                        $('div.carde').block({ message: $('.loading-wrapper') });
                    },
                    success: function(response) {
                        toastr.success(response.success);
                        var foyer = response.foyer;
                        location.href="../"+next+"/"+foyer;
                    },
                    error: function(data) {
                        $.each(data.responseJSON.errors, function(key, value) {
                            var input = 'form .champ[name=' + key + ']';
                            $(input).addClass('is-invalid');
                            $(input + " + label + div").html(value[0]);
                            $('div.carde').unblock();
                        });
                    }
                });
            });
        });
    </script>
    <script>
        new WOW().init();
        // SideNav Button Initialization
        $(".button-collapse").sideNav();
            // SideNav Scrollbar Initialization
        var sideNavScrollbar = document.querySelector(".custom-scrollbar");
        Ps.initialize(sideNavScrollbar);

        $('#dtBasicExample-1').mdbEditor({
            rowEditor: true
        });

        $('.dataTables_length').addClass('bs-select');
    </script>
    <script>
        $("#dt-less-columns").mdbEditor();
        $(".dataTables_length").addClass("bs-select");
    </script>
    <script>
        $(document).ready(function () {
            $(".edit").click(function (e) {
                e.preventDefault();
                console.log($(this).parent().parent().siblings());
                $(this).parent().parent().attr('id', 'actions');
                $(this).parent().parent().siblings().addClass('editable');

                var id = $(this).attr("val");
                var link = $(this).attr("href");
                var token = $(this).attr('token');
                var method = $(this).attr('method');

                 $(".editable").each(function(index, element) {
                    if ($(this).hasClass("selectable")) {
                        var selection = $("#selection").html();
                        $(this).html(selection);
                    } else if ($(this).hasClass("state")) {
                        var states = "<select class='form-control fillable'><option value='1'>Deplacable</option><option value='0'>Statique</option></select>";
                        $(this).html(states);
                    } else {
                        var val = $.trim($(this).text());
                        $(this).html("<input type='text' class='form-control fillable' value='" + val + "' id='field" + index + "'>");
                    }

                });

                $(this).hide();
                $("#delete").hide();
                $('#actions').html('<a id="save"></a>');
                $("#save").addClass('btn btn-outline-info btn-sm m-0 waves-effect');
                $("#save").html('<i class="fa fa-check" aria-hidden="true"></i>');

                $('#save').click(function (e) {
                    e.preventDefault();
                    var fields = [];
                    var reponse = {};

                    $(".form-control").each(function (index, element) {
                        fields.push($(this).val());
                    });

                    var errors = 0;
                    $(".fillable").each(function(index, element) {
                        if ($(this).val() == "") {
                            $(this).addClass("is-invalid");
                            errors++;
                        } else fields.push($(this).val());
                    });

                    if (errors > 0) {
                        toastr.warning("Veuillez completer tous les champs", 'Erreur', { "progressBar": true });
                        fields = [];
                    } else {
                        $.post(link, {
                                id: id,
                                _token: token,
                                _method: method,
                                champs: fields
                            },
                            function(data, textStatus, jqXHR) {
                                if (jqXHR.done()) {
                                    if (data === "ok") {
                                        toastr.success('Element modifié avec succè!', 'Succès', { "progressBar": true });
                                        setTimeout(() => {
                                            location.reload(true);
                                        }, 1500);
                                    } else toastr.warning('Echec veuillez réesayer', 'Succès', { "progressBar": true });
                                    console.log(data)
                                } else toastr.warning(textStatus, 'Erreur', { "progressBar": true });

                            }
                        );
                    }
                    console.info(fields);
                });

            });
        });
    </script>
</body>
</html>
