
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{asset('css/customstyle.css')}}" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/css/all.css')}}" rel="stylesheet" >
    <title>CMS-BIKAT</title>
<style>
    #page-wrapper{
        margin-left:0px;
    }

</style>
</head>

<body>
<div id="soft-all-wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    @include('admin.inc.header')
   
    
    <!-- /.navbar-static-side -->
</nav>

    <div id="page-wrapper" >
    
    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-center">Student Report <span ></span></h4>
                    </div>
                    <div class="panel-body">
                    <div class="col-md-2">
                    <a href="{{url('enrollment')}}" class="btn btn-primary form-control">HOME</a>                

                    </div>
                    <div class="col-md-4 " style="float:left">
                            <input type="search" name="search" id="search" class="form-control">
                    </div>
    <div class="row3  ">
        <div>
                  <label for="degree">Degree</label>
                       <select name="row[0][degree]" id="" class="form-control col-md-6">
                       <option value="">N/A</option>
                        @foreach($Degrees as $degree)
                        <option value="{{$degree->degree}}">{{$degree->degree}}</option>
                        @endforeach
                                </select> 
                  </div> 
                <div>
                <label for="Semester">Semester</label>
                <select name="row[0][Semester]" id="" class="form-control">
                       <option value="">N/A</option>
                        @foreach($sessions as $session)
                        <option value="{{$session->session}}">{{$session->session}}</option>
                        @endforeach
                     </select>
                </div>
                            
                       <br>   <br>
                
                  
                </div> 
                    <table class="table table-striped w-auto ">
                    <thead>
                        <tr >
                            <th class="col-1">#</th>
                            <th  class="col-1">Reg#</th>
                            <th  class="col-2">Student Name</th>
                            <th  class="col-2">Student CNIC</th>
                            <th  class="col-2">Father Name</th>
                            <th  class="col-2">DoB</th>
                            <th  class="col-2">Gender</th>
                            <th  class="col-2">Status</th>
                         
                            <th  class="co-2">Seat Type</th>
                            <th  class="col-2">Guardian</th>
                           
                            <th  class="col-2">Temp. Address</th>
                            <th  class="col-2">Perm. Address</th>
                            <th  class="col-2">Student phone</th>
                           
                          
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $row)
                        <tr >
                            <td>{{$row->st_id}}</td>
                            <td>{{$row->reg_no}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->st_cnic}}</td>
                            <td>{{$row->father_name}}</td>
                            <td>{{$row->dob}}</td>
                            <td>{{$row->gender}}</td>
                            <td>{{$row->status}}</td>
                       
                            <td>{{$row->seat_type}}</td>
                            <td>{{$row->guardian}}</td>
                            <td>{{$row->temporary_address}}</td>
                            <td>{{$row->permanent_address}}</td>
                            <td>{{$row->cellno}}</td>
                          
                         
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            
            
                    
            </div>
        </div>            
                
        
<!-- /#page-wrapper -->

</div>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/metisMenu.min.js')}}"></script>
    <script src="{{asset('js/raphael.min.js')}}"></script>
    <script src="{{asset('js/morris.min.js')}}"></script>
    <script src="{{asset('js/sb-admin-2.js')}}"></script>
    <main class="py-4">
            @yield('content')
        </main>
</body>

</html>








