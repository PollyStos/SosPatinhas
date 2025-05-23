<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Título Padrão')</title>

    <link href="{{ asset ('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset ('css/bootstrap.css') }}" rel="stylesheet">
       <link href="{{ asset ('css/fontawesome.css') }}" rel="stylesheet">

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

</head>
<body data-page="{{ $page ?? '' }}">
    @include('layouts.navigation')
    @yield('content')
    @include('layouts.footer')

    <script src="js/script.js"></script>
    
    <script src="{{ asset ('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('js/all.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>
