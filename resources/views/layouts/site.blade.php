<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('modern/css/vendors.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('modern/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern/css/core/colors/palette-gradient.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern/vendors/css/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern/css/plugins/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('modern/css/core/colors/palette-callout.css') }}">
    <style>

        .header-navbar .navbar-header .navbar-brand {
            padding: 12px 37px;
            margin-right: 0;
        }

        .card.crypto-card-3 .card-body:before {
            font: normal normal normal 16px/1 LineAwesome;
            font-size: 10rem;
            color: rgba(255, 255, 255, 0.15);
            position: absolute;
            bottom: -32px;
            right: 0px;
        }
        .fa.XRP::before {
            content: "\f12d";
        }
        .fa::before {
            font: normal normal normal 16px/1 LineAwesome;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            text-decoration: none;
            text-transform: none;
        }

        html body .content .content-wrapper {
            padding: 1rem 2.2rem;
        }
    </style>
</head>

<body class="vertical-layout vertical-menu-modern 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    @include('site.nav.nav')
    <div class="app-content content">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('modern/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('modern/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('modern/js/core/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('modern/js/scripts/customizer.js') }}" type="text/javascript"></script>

    <script src="{{ asset('modern/js/scripts/animation/animation.js') }}" type="text/javascript"></script>

</body>
</html>
