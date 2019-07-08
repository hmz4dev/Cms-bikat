<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/customstyle.css" rel="stylesheet">

    <link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet">
    
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
  h3{
      text-align:center;
      padding-right:30px;
  }

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
        <div class="panel-heading ">Student Enrollment</div>
        <div class="panel-body">
           <form method="POST" action="{{url('StudentEnrollment')}}"  class="form">
           {{csrf_field()}}
               <div class="row1">
               <div class="enrol-col1">
                   
                    <label for="">Enrolling Date</label>
                     <p><span id="datetime"></span> </p>
                 </div>
                 <div class="enrol-col1">
                     <label for="">Semester (Enrolling in)</label>
                     <select name="row[0][Enrollsemester]" id="semester" class="form-control" required>
                     @foreach ($sessions as $session)
                          <option value="{{$session->session}}">{{$session->session}}</option>
                          @endforeach
                     </select>
                 </div>
              
                 <div class="enrol-col1">
                    
                 </div>

                 <div class="enrol-col1">
                    <img src="../images/face.png" alt="" width="150px;" height:"120px;" >
                 </div>
              </div>

              <!--------------Student Selection-------->

              <div class="row2">
                  <h3>Student Selection</h3>
                  <div class="row2-enrol-col1">
                  <label for="session">Session (Student Admitted in)</label>
                  <select name="row[0][Session]" id="session" class="form-control" required>
                  <option value="noselect">N/A</option>

                @foreach ($sessions as $session)
                          <option value="{{$session->session}}">{{$session->session}}</option>
                          @endforeach
                        </select>
                 </div>        
                 <div class="row2-enrol-col1">
                  <label for="Degree">Degree</label>
                  <select name="row[0][Degree]" id="degree" class="form-control" required>
                          <option value="noselect">N/A</option>
                          @foreach($degrees as $degree)
                            <option value="{{$degree->degree}}">{{$degree->degree}}</option>
                          @endforeach
                     </select>
                 </div>

             

                   <div class="row2-enrol-col2 hidden ifhassesdegr" >
                     <label for="Student Name">Student Name</label>
                       <select name="row[0][Student_name]" id="choosestudent" class="form-control choosestudent" required>
                           
                      </select>
                   </div> 
                 <div class="row2-enrol-col2 ifstudent hidden">
                  <label for="fname">Father Name</label>
                  <input type="text" name="row[0][Father_name]" id="fathername" class="form-control" required>

                  
                  
                 </div> 
                 <div class="row2-enrol-col3 ifstudent hidden">
                  <label for="Regno">Student Reg#</label>
                  <input type="text" name="row[0][Regno]" id="regNo" class="form-control" required>

               
                 
                 </div>
                 <div class="row2-enrol-col3 ifstudent hidden">
                  <label for="Section">Section</label>
                  <input type="text" name="row[0][Section]" id="section" class="form-control">
                 </div>                
                  
              </div>

              <div class="row2">
              <div class="row2-enrol-col5">
                  <br><br><br>
                  <label for="approval">Sup. Committee Approved</label>
                  <select name="row[0][Approval]" id="" class="form-control" required>
                    <option value="">N/A</option>                  
                      <option value="No">No</option>
                      <option value="yes">yes</option>
                  </select>
                  <label for="course_work">Course Work Submitted</label>
                  <select name="row[0][Course_work]" id="" class="form-control" required>
                  <option value="">N/A</option>
                  <option value="No">No</option>
                      <option value="yes">yes</option>
                  </select>
                  <label for="synopsis">Synopsis Submitted</label>
                  <select name="row[0][Synopsis]" id="" class="form-control">
                  <option value="">N/A</option>                  
                  <option value="No">No</option>
                      <option value="yes">yes</option>
                  </select>
                  <label for="after_ceased">Enrolling After Ceased</label>
                  <select name="row[0][After_ceased]" id="" class="form-control">
                  <option value="">N/A</option>                  
                      <option value="No">No</option>
                      <option value="yes">yes</option>
                  </select>
                 </div>
                 <div class="row2-enrol-col5">
                 <br><br><br>
                   <label for="chalan">Chalan #</label>
                   <input type="text" name="row[0][Chalan_no]" class="form-control" required>
                   <label for="chalan">Chalan Amount</label>
                   <input type="text" name="row[0][Chalan_amount]" class="form-control" required>
                   <label for="Remarks">Remarks</label>
                   <textarea name="row[0][Remarks]" id="" class="form-control" rows="4"></textarea>
                 </div>
              
              </div>

              <!--------------Enrollment Status-------->

              <div class="row3">
                  <div class="row3-col1" style="padding-top:10px;">
                  <label for="">Enrollment Status</label>
                  <select name="row[0][Enroll_status]" id="" class="form-control" required>
                  <option value="">N/A</option>
                        <option value="admitted">admitted</option>
                        <option value="cancel">cancel</option>
                        <option value="Discontinued">Discontinued</option>
                        <option value="enrolled">enrolled</option>
                  </select>
                  </div>
                
                  <div class="row3-col3" style="padding-top:30px;padding-left:60px;">
                 <input type="button" id="allcourses"  value="Select All Courses" class="btn btn-primary btn-lg">
                       
                  </div>
                 
              </div>
              <div class="row4 hidden" id="allcourseshide">

              <div class="row4-col1">
                       <label for="">Course Code</label>
                       @for ($i = 0; $i < 8; $i++)
                       <input type="text" name="row[{{ $i }}][CourseCode]" class="form-control">
                           
                       @endfor
                      
                     
                       
                  </div>
                 
                  <div class="row4-col2">
                       <label for="">Course Name</label>
                       @for ($i = 0; $i < 8; $i++)
                  <select name="row[{{$i}}][Course_name]" id="coursesname{{$i}}" class="form-control" required>
                     
                               </select>
                       @endfor
               
                    </div>
                 
                 
                  <div class="row4-col3">
                       <label for="">Course Type</label>
                       @for ($i = 0; $i < 8; $i++)
                           
                       <select name="row[{{$i}}][Course_type]" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->Course_type}}">{{$row->course_type}}</option>
                    @endforeach
                 </select>
                       @endfor
                    </div>



                  <div class="row4-col3">
                      <label for="">Course Status</label>
                      @for ($i = 0; $i < 8; $i++)
                      <select name="row[{{$i}}][Course_Status]" id="" class="form-control">
                     <option value="">N/A</option>
                     @foreach ($CourseGroups as $row)
                     <option value="{{$row->Course_type}}">{{$row->course_status}}</option>
                     @endforeach
                  </select>
                          
                      @endfor
               
                  </div>

                  <div class="row4-col3">
                       <label for="">Credit Hours</label>

                       @for ($i = 0; $i < 8; $i++)
                       <select name="row[{{$i}}][Credit_hours]" id="credithours{{$i}}" class="form-control" required>
                       
               
                        </select>
                           
                       @endfor
                      
                        
                  </div>



                  <div class="row4-col4">
                       <label for="">Course Incharge</label>
                       @for ($i = 0; $i < 7; $i++)
                           
                       <select name="row[{{$i}}][Course_incharge]" id="courseincharge{{$i}}" class="form-control" required>
                       
                        </select>
                       @endfor
             </div>
                  <div class="row col-md-12">
                       <div style="padding:20px 0px 20px 40px; width:100%" class="btn ">
                        <input type="submit" value="Save" class="btn btn-primary btn-outline-primary " style="float:left; width:50%">
                        <input type="button" value="Cancel" class="btn btn-danger btn-outline-primary " style="float:left; padding-left:10px; width:50%">
                       </div>
                       
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
              $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });


    $('#session').on('change', function(){
      $('.ifhassesdegr').addClass('hidden');
      $('.ifstudent').addClass('hidden');
      $('#fathername').val('');
      $('#regNo').val('');
      $('#section').val('');
      $('#choosestudent').val('');
    var session= $(this).val();

    if ($(this).val() === "noselect") {
        
    } else {
      $('#degree').on('change', function(){
        $('.ifhassesdegr').addClass('hidden');

        var degree = $(this).val();
        
      if($('#degree').val() === "noselect"){
            $('.ifhassesdegr').addClass('hidden');
          }
          else{
            var sessionValue = $("#session").val();
                  var degreeValue = $("#degree").val();
                  
                  $.ajax({
            method:"POST",
            url:"/12589kur",
            data:{session:sessionValue, degree:degreeValue},
          
            success:function(data)
            {  
              var len = 0;
              
              if(data.students != null){
                len = data.students.length;
              }
              if(len > 0){
                var htmlstudents = '<option value="noselect">N/A</option>';
                for(var i=0; i<len; i++){
                  var name = data.students[i].name;
                        htmlstudents+='<option value="'+data.students[i].name+'">'+ data.students[i].name +'</option>';
                        $('.ifhassesdegr').removeClass('hidden');
                
              }
                }else{
                  $('.ifhassesdegr').addClass('hidden');
                }
      
          $('#choosestudent').html(htmlstudents);
          
            }
          
      })
    }

    })
    }
    })

    $('#degree').on('change', function(){
      $('.ifhassesdegr').addClass('hidden');
      $('.ifstudent').addClass('hidden');
      $('#fathername').val('');
      $('#regNo').val('');
      $('#section').val('');
      $('#choosestudent').val('');
    var degree= $(this).val();

    if ($(this).val() === "noselect") {
        
    } else {
      $('#session').on('change', function(){
        $('.ifhassesdegr').addClass('hidden');

        var session = $(this).val();
        
      if($('#session').val() === "noselect"){
            $('.ifhassesdegr').addClass('hidden');
          }
          else{
            var sessionValue = $("#session").val();
                  var degreeValue = $("#degree").val();
                  
                  $.ajax({
            method:"POST",
            url:"/12589kur",
            data:{session:sessionValue, degree:degreeValue},
          
            success:function(data)
            {  
              var len = 0;
              
              if(data.students != null){
                len = data.students.length;
              }
              if(len > 0){
                var htmlstudents = '<option value="noselect">N/A</option>';
                for(var i=0; i<len; i++){
                  var name = data.students[i].name;
                        htmlstudents+='<option value="'+data.students[i].name+'">'+ data.students[i].name +'</option>';
                        $('.ifhassesdegr').removeClass('hidden');
                }
                
              }else{
                $('.ifhassesdegr').addClass('hidden');
              }
      
          $('#choosestudent').html(htmlstudents);
          
            }
          
      })
    }

    })
    }
    })

              $('.choosestudent').on('change', function() {
                console.log(name)
                var name = $(this).val();
                if (name === "noselect") {
                  $('.ifstudent').addClass('hidden');
                
                } else {
                
                  $.ajax({
            url:"/125987dese/"+name,
            method:"GET",
            data: name,
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            success:function(data)
            {
          
            if(data.errors)
            {
            
            }
            if(data)
            {
              $('#regNo').val(data.regNo);
              $('#fathername').val(data.fatherName);
              $('#section').val(data.section);
              $('.ifstudent').removeClass('hidden');
            }
          
            }
            })
                
                }
    
    });
            
        </script>
          <script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();

$(document).on('click', '#allcourses', function(){
    var semester = $("#semester").val();
    var degree = $("#degree").val();
  $.ajax({
            url:"/getcources/",
            method:"POST",
            data: {semester:semester, degree:degree},
           
            success:function(data)
            {
          
            if(data.errors)
            {
            
            }
            else(data)
            {
              var len = 0;
              
              if(data.courses != null){
                len = data.courses.length;
              }
              if(len > 0){
                var htmlcoursename = '<option value="noselect">N/A</option>';
                var htmlcourseincharge = '<option value="noselect">N/A</option>';
                var htmlcredithours = '<option value="noselect">N/A</option>';
                for(var i=0; i<len; i++){
                  var course_name = data.courses[i].course_name;
                  var course_incharge = data.courses[i].course_incharge;
                  var credit_hours = data.courses[i].credit_hours;
                        htmlcoursename+='<option value="'+course_name+'">'+course_name +'</option>';
                        htmlcourseincharge+='<option value="'+course_incharge+'">'+course_incharge +'</option>';
                        htmlcredithours+='<option value="'+credit_hours+'">'+credit_hours +'</option>';

                }
                for (let i = 0; i < 8; i++) {
                 
              $("#coursesname"+i).html(htmlcoursename);
              $("#courseincharge"+i).html(htmlcourseincharge);
              $("#credithours"+i).html(htmlcredithours);
                  
                }
 $('#allcourseshide').removeClass('hidden')
              console.log(len)
              }
            }
          
            }
            })
})
</script>
</body>

</html>
