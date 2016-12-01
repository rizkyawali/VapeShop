<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Panel</title>

        {{--CSS--}}
        @yield('styles')
        <link rel="stylesheet" href="/css/material/materialize.css">
        <link rel="stylesheet" href="/css/material/navadmin.css">
        <link rel="stylesheet" href="/css/material/fonts.css">
        {{--End CSS--}}
    </head>

    <body>

        @include('layout.backhead')

        <div class="container">
            <div class="section">
                @yield('content')
            </div>
        </div>

        {{--Javascript--}}
        <script src="/js/javascript2.1.js"></script>
        <script src="/js/material/materialize.js"></script>
        <script src="/js/custom.js"></script>
        @yield('scripts')
        {{--End Javascript--}}
    </body>

</html>