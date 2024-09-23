<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Of Light</title>
    </head>
<!-- MailerLite Universal -->
<script>
    (function(w,d,e,u,f,l,n){w[f]=w[f]||function(){(w[f].q=w[f].q||[])
        .push(arguments);},l=d.createElement(e),l.async=1,l.src=u,
        n=d.getElementsByTagName(e)[0],n.parentNode.insertBefore(l,n);})
    (window,document,'script','https://assets.mailerlite.com/js/universal.js','ml');
    ml('account', '1057743');
</script>
<!-- End MailerLite Universal -->
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
