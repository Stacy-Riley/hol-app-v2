<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Of Light</title>
    </head>
<body>

    @include('partials.assets.guest_styles')

    <div class="main-wrapper">
        @if(request()->route()->named('home'))
            @include('partials.navbars.home')
        @else
            @include('partials.navbars.site_pages')
        @endif
        @yield('content')
        @include('partials.footer')
    </div>

    @include('partials.assets.guest_scripts')
    @yield('custom_scripts')
    @yield('scripts')
</body>
</html>
