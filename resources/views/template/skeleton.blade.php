<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- END of Bootstrap CDN -->

    <!-- FontAwesome CDN -->
    <script src="https://kit.fontawesome.com/9ef1e16e2c.js"></script>
    <!-- END of FontAwesome CDN -->

    <!-- Local CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/base.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <!-- END of Local CSS -->

    <!-- Metas -->
    <link rel="icon" type="image/png" sizes="192x171" href="{{URL::asset('assets/cusLogo.png')}}">
    <meta name="theme-color" content="#120817">
    <meta name="msapplication-navbutton-color" content="#120817">
    <meta name="apple-mobile-web-app-status-bar-style" content="#120817">
    <!-- END of Metas -->

</head>
<body>
@yield('content')
</body>

<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
</html>