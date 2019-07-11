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
        <div class="panel-heading "><i class="fa fa-calendar-check fa-fw"></i>Attendence</div>
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
                          <select name="section" id="section" class="form-control">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>

                          </select>
                          
                            
                        
                      </div>
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
   <div class="table-responsive tableadd hidden">
    <table class="table table-bordered " id="attendance_table">
           <thead>
            <tr>
                <th width="10%">#</th>
                <th width="35%">Reg.No</th>
                <th width="35%">Name</th>
                <th width="30%"></th>
            </tr>
           </thead>
       </table>
   </div>
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
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
$(document).ready(function(){

function loaddata(){  $('#attendance_table').DataTable({
 processing: true,
 serverSide: true,
 ajax:{
  url: "{{ route('report.select') }}",
  type:"POST",
  headers: {
'X-CSRF-TOKEN': '{{ csrf_token() }}'
},
data : {
  semester: $("#semester").val(),
  degree: $("#degree").val(),
  session: $("#session").val(),
  section: $("#section").val(),
  subject: $("#subject").val()
},
  
 },
 columns:[
  
  {
   data: 'id',
   name: 'id'
  },
  {
   data: 'student_name',
   name: 'name'
  },
  
  {
   data: 'Regno',
   name: 'Regno'
  },
  {
   data: 'action',
   name: 'action',
   orderable: false
  }
 ]
});
}
 /*   var formdata;
    $("form#form :input").each(function(){
  formdata = $(this); 
});
    getData(formdata);
    function getData(criatair){
       var datatable = $('#attendance_table').DataTable({
 processing: true,
 serverSide: true,
 ajax:{
  url: "{{ route('report.select') }}",
  type:"POST",
  data: criatair
 },
 columns:[
  
  {
   data: 'id',
   name: 'id'
  },
  {
   data: 'student_name',
   name: 'name'
  },
  
  {
   data: 'Regno',
   name: 'Regno'
  },
  {
   data: 'action',
   name: 'action',
   orderable: false
  }
 ]
});
    }
  
*/
$('#form').on('submit', function(event){
    event.preventDefault();
    var data = new FormData(this);
    $('#attendance_table').DataTable().destroy();
    loaddata()
    $(".tableadd").removeClass('hidden');
});
})
 /*  var $attendance_table = $('#attendance_table').DataTable({
 processing: true,
 serverSide: true,
 ajax:{
  url: "{{ route('report.select') }}",
  type: "POST",
  data:new FormData(this),
 },
 
});*/
  /*  console.log(new FormData(this))
           event.preventDefault();
       $.ajax({
       url:"{{ route('report.select') }}",
       method:"POST",
       data:new FormData(this),
       contentType: false,
       cache: false,
       processData: false,
       dataType:"json",
       success:function(data)
       {
           $("#showwResult").removeClass('hidden');
           $('#attendance_table').dataTable( {
  "ajax": {
    "url": data.data,
   
  }
} ).ajax.reload();

       }
       });
    });
*/

</script>
</body>

</html>