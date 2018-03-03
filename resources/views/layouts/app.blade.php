<html>
<head>

    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
    <link href="css/app.css" rel="stylesheet" />
    <link rel="stylesheet" media="screen and (max-width: 816px)" href="css/reponsive.css" type="text/css" />



</head>
<body>

    <header>
        @include('includes.header')
    </header>

    @include('includes.nav_bar_left')

    @yield('content')

</body>
<script type="text/javascript" src="https://connect.facebook.net/fr_FR/all.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>
@yield('scriptPage')
</html>

