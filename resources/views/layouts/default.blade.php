<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/app.css">

    <title>Document</title>
</head>
<body>
<div class="body-wrapper">
    <header class="main-header" id="active-header">
        <div class="header-wrapper">
            @include('layouts.partials.topnavbar')
            @if(Auth::check())
                @include('layouts.partials.sidenavbar')
            @endif
        </div>
        <div class="overlay-shadow"></div>
    </header>

    <main class="main-content">
        <div class="main-wrapper">
            @yield('content')
        </div>
    </main>
    <footer class="main-footer">

    </footer>
</div>
<script type="text/javascript" src="public/fonts/feather/feather.min.js"></script>
<script type="text/javascript" src="public/js/app.js"></script>
<script>
    feather.replace()
</script>
</body>
</html>