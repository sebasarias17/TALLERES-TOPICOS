<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'StellarCO')</title>

    <!-- PRELOADS -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=News+Cycle:wght@400;700&family=Asap+Condensed:wght@400;700&display=swap" as="font" crossorigin="crossorigin"></link>
    <link href="https://fonts.googleapis.com/css2?family=News+Cycle:wght@400;700&family=Asap+Condensed:wght@400;700&display=swap" rel="stylesheet">


</head>
<body>
    <header class="header">
            <div class="bar">
                <a href="#" class="logo">
                    <h1 class="logo__name no-margin center-text">Stelar<span class="logo__bold">CO</span></h1>
                </a>

                <nav class="navegation">
                    <a href="{{ route('home.index') }}" class ="nav-link">Home</a>
                    <a href="{{ route('product.index') }}" class ="nav-link">Products</a>
                    <a href="{{ route('product.create') }}" class ="nav-link">Create a review</a>
                </nav>
            </div>
    </header>

    <header class = "header">
        <h2 class = " bgh2 no-margin  center-text">@yield('subtitle', 'StellarCo Store')</h2>
    </header>

    <div class="container center-text">
        @yield('content')
    </div>


    <footer class="footer center-text">
            <small>
                Copyright - StellarCo
            </small>
    </footer>



</body>
</html>