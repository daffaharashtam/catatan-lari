<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>


    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('images/favicon.png') }} rel="shortcut icon" type="image/png">
    <link href="{{ asset('images/apple-touch-icon.png') }} rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-72x72.png') }} rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('images/apple-touch-icon-114x114.png') }} rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('images/apple-touch-icon-144x144.png') }} rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <!-- Stylesheet -->
    <link href="{{ asset('templates/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('templates/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('templates/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('templates/css/css-plugin-collections.css') }}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{ asset('templates/css/menuzord-skins/menuzord-boxed.css') }}"
        rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{ asset('templates/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Theme Color -->
    <link href="{{ asset('templates/css/colors/theme-skin-orange.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('templates/css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('templates/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('templates/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="{{ asset('templates/css/style.css') }}" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> --}}



    <!-- External JavaScripts -->
    <script src="{{ asset('templates/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('templates/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('templates/js/bootstrap.min.js') }}"></script>
    <!-- JS | jQuery Plugin Collection for this theme -->
    <script src="{{ asset('templates/js/jquery-plugin-collection.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}


    @vite(['resources/css/app.css', 'resources/js/app.js'])


    @stack('styles')
</head>

<body>
    <div id="wrapper">
        <header>
            <!-- Navbar or header content -->
            @include('partials.navbar')
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <!-- Footer content -->
            @include('partials.footer')
        </footer>
    </div>
    <!-- Scripts -->
    @stack('scripts')

</body>

</html>
