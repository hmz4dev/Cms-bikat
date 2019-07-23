<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{asset('/css/customstyle.css')}}">
    <link href="{{asset('/css/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
   
<!-- MetisMenu CSS -->
<link href="{{asset('/css/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{asset('/css/sb-admin-2.css')}}" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="{{asset('/css/morrisjs/morris.css')}}" rel="stylesheet">

<!-- Custom Fonts -->
<link href="{{asset('/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="{{asset('fonts/css/all.css')}}">
    <title>CMS-BIKAT</title>
<style>

</style>
</head>

<body>

<div id="soft-all-wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
@include('admin.inc.header')
@include('admin.inc.sidebar')
    <!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">

<div class="panel panel-default">
        <div class="panel-heading ">Students list</div>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        {{-- <th></th> --}}
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($registrations as $student)
    
                        <tr>
                        {{-- <td scope="row"><img src="" alt="" sizes="30px" srcset="">{{$student->image}}</td> --}}
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>
                                    <div style="">
                                            <div style="float: left;"> 
                                                
                                            <a class="btn btn-info" href="/enrollment/studentRegistration/{{$student->st_id}}/edit" role="button">Edit</a>

                                               
                                            </div>
                                            <div style="float: right;"> 
                                             
                                                    <a class="btn btn-danger" href="/enrollment/studentRegistration/{{$student->st_id}}/delete" role="button">Delete</a>

                                               
                                            </div>
                                        </div>

                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>

        </div>
</div>   
</div>
</div>
</body>
</html>