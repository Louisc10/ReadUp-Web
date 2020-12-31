<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title') - ReadUp</title>
</head>
<body>
    <div id="header">
        @include('component.navbar')
    </div>
    <div id="content">
        @yield('content')
    </div>
    <div id="footer">
        @include('component.footer')
    </div>
</body>
</html>