<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name') }}</title>

    <link href="{{ url('img/icon.png') }}" rel="shortcut icon" type="image/vnd.microsoft.icon">

    <!-- Styles -->
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ url('css/main/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/main/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/main/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/others/bootstrap-checkbox-radio.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/app/global.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/app/login.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    @yield('content')


    <!-- Scripts -->
    <script type="text/javascript" src="{{ url('js/main/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/main/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/others/bootstrap.validator.min.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ url('js/others/bootstrap-checkbox-radio.js') }}"></script> -->

</body>
</html>
