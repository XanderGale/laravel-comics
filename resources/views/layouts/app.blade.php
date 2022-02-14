<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics - @yield('page_title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('addictional_css')
</head>
<body>
    
    @include('partials.header')

    @include('partials.jumbo')

    <main>
        @yield('main_content')
    </main>

    @include('partials.footer')

</body>
</html>