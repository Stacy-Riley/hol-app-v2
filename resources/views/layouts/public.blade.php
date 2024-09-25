<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="House Of Light offers educational and corporate services to help visually impaired individuals and companies that serve visually impaired people.">
    <title>House Of Light</title>
    <!-- Load the stylesheet that will reference the LCP image. -->
    <link rel="stylesheet" href="{{env('APP_URL')}}/assets/guest_css/bootstrap.min.css">

    <!-- Preload the LCP image with a high fetchpriority so it starts loading with the stylesheet. -->
    <link rel="preload" as="image" href="{{env('APP_URL')}}/assets/images/home/House-of-Light-logo-no-bg.png" type="image/webp">
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
        <!-- MailerLite Universal -->
        <script>
            (function(w,d,e,u,f,l,n){w[f]=w[f]||function(){(w[f].q=w[f].q||[])
                .push(arguments);},l=d.createElement(e),l.async=1,l.src=u,
                n=d.getElementsByTagName(e)[0],n.parentNode.insertBefore(l,n);})
            (window,document,'script','https://assets.mailerlite.com/js/universal.js','ml');
            ml('account', '1057743');
        </script>
        <!-- End MailerLite Universal -->
</body>
</html>
