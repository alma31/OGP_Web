<html>
<head>

    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
<link href="{{asset('css/app.css')}}" rel="stylesheet" />
</head>
<body>

<div class="container">
    <div id='app'></div>
    <header class="row">
        @include('includes.header')
    </header>

    @yield('content')
</div>
</body>

<script src="{{ mix('js/app.js') }}"></script>
@yield('scriptPage')
</html>

