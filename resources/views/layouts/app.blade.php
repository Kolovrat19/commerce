<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles from template -->
    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/metisMenu/dist/metisMenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/animate.css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.css') }}" />

    @stack('css')

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/pe-icon-7-stroke/css/helper.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">




</head>

    @yield('main')

<!-- Scripts -->
<!-- Vendor scripts -->
<script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('vendor/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/metisMenu/dist/metisMenu.min.js') }}"></script>
<script src="{{ asset('vendor/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('vendor/sparkline/index.js') }}"></script>



<!-- App scripts -->
<script src="{{ asset('js/homer.js') }}"></script>
<script src="{{ asset('js/charts.js') }}"></script>


@stack('script')

</body>
</html>