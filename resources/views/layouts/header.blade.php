<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AnesT</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="./"><img class="logo" src="{{url('/img/logo.png')}}"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if (Route::has('login'))

                    @if (Auth::check())
                        <li><a href="{{ url('/home') }}" >Home</a></li>
                    @else
                        <li class="btn-bt"><a href="{{ url('/login') }}" class="btn btn-white">Đăng nhập</a></li>
                    @endif

                @endif
            </ul>
        </div>
    </div>
</nav>