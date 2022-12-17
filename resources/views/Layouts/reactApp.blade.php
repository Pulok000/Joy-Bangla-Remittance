<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

        @if (Session::has('user'))

        @include('Layouts.User.dashboardHeader')
        @yield('content')
        @include('Layouts.User.footer')

        @else

        @include('Layouts.User.siteHeader')
        @yield('content')
        @include('Layouts.User.footer')
                
        @endif

        @viteReactRefresh
        @vite(['resources/js/app.js', 'resources/css/app.css'])
        
</body>

</html>



