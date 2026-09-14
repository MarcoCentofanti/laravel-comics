<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', "resources/js/app.js"])
    <title>@yield('title')</title>
</head>
<body>
    <div class="container bg-black">
        @include('partials.header')
        @yield('jumbo')
        @yield('banner')
        <div class="d-flex row">
            @yield('content')
        </div>
        @include('partials.footer')
    </div>
    
</body>
</html>