<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/morrisjs/morris.css')}}" rel="stylesheet">
    
    <link href="{{asset('css/customstyle.css')}}" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/css/all.css')}}" rel="stylesheet" >
    @yield('styles')
</head>
<body>
@yield('content')
<script src="{{URL::to('js/jquery/jquery-3.4.1.min.js')}}"></script>
<script src="{{URL::to('js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::to('js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('js/admin.js')}}"></script>
<script src="{{URL::to('js/script.js')}}"></script>
<script src="{{URL::to('js/raphael.min.js')}}"></script>
<script src="{{URL::to('js/metisManu.js')}}"></script>
<script src="{{URL::to('js/morris.min.js')}}"></script>
<script src="{{URL::to('js/morris-data.js')}}"></script>
<script src="{{URL::to('js/admin.js')}}"></script>


@yield('scripts')
</body>
</html>