<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Of Light Admin Page</title>
</head>
<body>

@include('partials.assets.styles')

<div class="container-fluid main-wrapper">
    <section id="" class="">
        <div class="row">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <input type="submit" value="logout">
            </form>
        </div>
                @include('partials.admin.sidebar')
        <div class="row">
            <div class="col-md-10 offset-md-2">
                <h1 class="text-center ml-4">Welcome to the Admin Homepage</h1>
                @yield('content')
            </div>
        </div>
    </section>
</div>

@include('partials.assets.scripts')
@yield('custom_scripts')
@yield('scripts')
</body>
</html>
