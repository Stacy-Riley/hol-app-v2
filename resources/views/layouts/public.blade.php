<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Of Light</title>
    </head>
<body>

    @include('partials.assets.styles')

    <div class="main-wrapper">
        @include('partials.navbars.home')
        @yield('content')
        @include('partials.footer')
    </div>

    @include('partials.assets.scripts')
    @yield('custom_scripts')
</body>
</html>
