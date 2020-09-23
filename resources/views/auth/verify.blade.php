<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
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
<body>
    <main class="mt-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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

</body>
</html>
