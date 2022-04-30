<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <title>@yield('title')</title>
</head>
<body class=" bg-emerald-600">
    <div class="container shadow">
        <div class="row">
            <div class="col-sm-3">
                @include('include/sidebar')
            </div>
            <div class="col-sm-9" >
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('js/all.min.js')}}"></script>

</body>
</html>