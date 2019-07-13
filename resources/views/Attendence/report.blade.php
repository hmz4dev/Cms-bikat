<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../css/customstyle.css" rel="stylesheet">

    <script src="../css/jquery/jquery.min.js"></script>

<!-- MetisMenu CSS -->
<link href="../css/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../css/sb-admin-2.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="../css/morrisjs/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fonts/css/all.css">
<![endif]-->
    <title>CMS-BIKAT | Report</title>
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
        <div class="panel-heading "><i class="fa fa-calendar-check fa-fw"></i>Attendence Report</div>
        <div class="panel-body">
                 <form class="form" id="form" enctype ="multipart/form-data">
                 @csrf
                   <div class="att-row-1">
                      <h3>Select Criteria</h3>
                      
                      <div class="att-col">
                      <label for="">Semester</label>
                        <select name="semester" id="semester" class="form-control" >
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
                      <select name="degree" id="degree" class="form-control">
                       @foreach($degrees as $degree)
                        <option value="{{$degree->degree}}">{{$degree->degree}}</option>
                        @endforeach
                      </select>                     
                       </div>
                      {{-- <div class="att-col">
                      <label for="">Session</label>
                      <select name="session" id="session" class="form-control">
                      <option value="">N/A</option>
                      @foreach($sessions as $session)
                        <option value="{{$session->session}}">{{$session->session}}</option>
                        @endforeach
                      </select>
                   
                      </div> --}}
                      {{-- <div class="att-col">
                       

                          <label for="">Section</label>
                          <select name="section" id="section" class="form-control">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>

                          </select>
                          
                            
                        
                      </div> --}}
                      <div class="att-col">
                      <label for="">Subject</label>
                      <select name="subject" id="subject" class="form-control">
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
                            
                            
                            
                            
                            
                            
                            <br>
                          </div>
                          <input type="submit" value="Submit" class="btn btn-primary "  style="margin:20px; width:20%">
                 </form>   
                 <div class="att-row-2">
                   <div id="showwResult ">
                   
                        <br />
  
        <div id="reporttable"></div>
    {{-- <table class="table table-bordered " id="attendance_table">
           <thead>
            <tr>
              
               
                <th width="35%">Name</th>
                <th width="10%">attendence</th>
               
            </tr>
           </thead>
       </table> --}}
   <br />
                   </div>
                 </div>
             
        </div>
    </div>
    
<!-- /#page-wrapper -->

</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
 
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
$.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
$('#form').on('submit', function(event){
  event.preventDefault();
       $.ajax({
       url:"{{ route('report.select') }}",
       method:"POST",
       dataType: "json",
       data:{
  semester: $("#semester").val(),
  degree: $("#degree").val(),
  session: $("#session").val(),
  section: $("#section").val(),
  subject: $("#subject").val()
},
       success:function(data)
       {
      if (data.error) {
        $('.tableadd').addClass('hidden')
        $('#reporttable').html('<h5> There is no attendance with these criteria there !</h5>')
      } else {
        
        $('#reporttable').html(data.view)
                  $('.tableadd').removeClass('hidden')
      
      }
      }
    });
   
});



// $(document).ready(function(){

// function loaddata(){  $('#attendance_table').DataTable({
//  processing: true,
//  serverSide: true,
//  searching: false, paging: false, info: false,
//  rowGroup: {
//         dataSrc: 'name'
//     },
//  ajax:{
//   url: "{{ route('report.select') }}",
//   type:"POST",
//   headers: {
// 'X-CSRF-TOKEN': '{{ csrf_token() }}'
// },
// data : {
//   semester: $("#semester").val(),
//   degree: $("#degree").val(),
//   session: $("#session").val(),
//   section: $("#section").val(),
//   subject: $("#subject").val()
// },
  
//  },
//  columns:[
  
 

//   {
//    data: 'name',
//    name: 'name'
//   },
  
//   {
//    data: 'attendences',
//    name: 'attendences',
//   }
//  ]
// });
// }
 
// $('#form').on('submit', function(event){
//     event.preventDefault();
//     var data = new FormData(this);
//     $('#attendance_table').DataTable().destroy();
//     loaddata()
//     $(".tableadd").removeClass('hidden');
// });
// })


</script>
</body>

</html>
