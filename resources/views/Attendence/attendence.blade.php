<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../css/customstyle.css" rel="stylesheet">
    
<!-- MetisMenu CSS -->
<link href="../css/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../css/sb-admin-2.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="../css/morrisjs/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="fonts/css/all.css">
    <title>CMS-BIKAT</title>
<style>

</style>
</head>

<body>

<div id="soft-all-wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    @include('admin.inc.header')
    @include('admin.inc.attsidebar')
    
    <!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading "><i class="fa fa-calendar-check fa-fw"></i>Attendence</div>
        <div class="panel-body">
                 <form class="form" action="">
                 
                   <div class="att-row-1">
                      <h3>Select Criteria</h3>
                      
                      <div class="att-col">
                      <label for="">Semester</label>
                        <select name="Semester" id="Semester" class="form-control" >
                        <option value="">N/A</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        </select>
                      </div>
                      <div class="att-col">
                      <label for="">Degree</label>
                      <select name="Degree" id="degree" class="form-control">
                       @foreach($degrees as $degree)
                        <option value="{{$degree->degree}}">{{$degree->degree}}</option>
                        @endforeach
                      </select>                     
                       </div>
                      <div class="att-col">
                      <label for="">Session</label>
                      <select name="session" id="session" class="form-control">
                      <option value="">N/A</option>
                      @foreach($sessions as $session)
                        <option value="{{$session->session}}">{{$session->session}}</option>
                        @endforeach
                      </select>
                   
                      </div>
                      <div class="att-col">
                          <label for="">Section</label>
                          <select name="shift" id="shift" class="form-control">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          </select>
                          
                            
                        
                      </div>
                      <div class="att-col">
                      <label for="">Subject</label>
                      <select name="Subject" id="Subject" class="form-control">
                          <option value="">N/A</option>
                         @foreach($OfferedCourses as $OfferedCourse)
                                <option value="{{$OfferedCourse->course_name}}">{{$OfferedCourse->course_name}}</option>

                         @endforeach
                          </select>
                      </div>
                      <div style="padding-top:25px;"class="att-col">
                            <label for="">Attendence Date</label>
                              <p><span id="datetime"></span> </p>
                          
                            </div>
                   </div>
                 <div class="att-row-2">
                    <h3><i class="fa fa-group fa-fw"> </i>  Student List</h3>
                    <div class="table-responsive">
                      <table class="table table-bordered table-responsive-md table-striped  text-center" id="example" width="100%">
                          <thead>
                              <tr>
                                  <th class="att-md-1">#</th>
                                  <th class="att-md-2">Reg.No</th>
                                  <th class="att-md-4">Name</th>
                                  <th class="att-md-4">Attendence</th>
                                  
                              </tr>
                          </thead>
                          <tbody>
                               <tr>
                                 <td class="att-md-1">1</td>
                                 <td class="att-md-2">15-arid-1234434325</td>
                                 <td class="att-md-4">Naseeb ul Hassan </td>
                                 <td class="att-md-4"> 
                                 <input type="radio" name="attendence" value="P"> Present
                                 <input type="radio" name="attendence" value="A">  Absent
                                

                                 </td>
                               </tr>
                              
                          </tbody>
                      </table>
                      </div>
                 </div>

                 </form>                
        </div>
    </div>
    
<!-- /#page-wrapper -->

</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../css/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../css/raphael/raphael.min.js"></script>
    <script src="../css/morrisjs/morris.min.js"></script>
    <script src="../css/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../css/sb-admin-2.js"></script>
    <main class="py-4">
            @yield('content')
        </main>
        <script>
        var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script>
</body>

</html>
