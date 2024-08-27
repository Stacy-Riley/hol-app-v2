<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Of Light Admin Page</title>
</head>
<body>
        @yield('custom_styles')

        @include('partials.assets.admin_styles')
        @include('partials.assets.admin_summernote')
        @include('partials.admin.sidebar')

        <div class="content">
            @yield('content')
        </div>


        @include('partials.assets.admin_scripts')
        @yield('custom_scripts')
        @yield('scripts')
</body>
</html>
