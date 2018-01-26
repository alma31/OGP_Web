<html>
<head>

    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link rel="stylesheet" media="screen and (max-width: 744px)" href="{{asset('css/reponsive.css')}}" type="text/css" />



</head>
<body>

    <header>
        @include('includes.header')
    </header>

    @yield('content')

</body>

<script src="{{ mix('js/app.js') }}"></script>
@yield('scriptPage')
</html>

