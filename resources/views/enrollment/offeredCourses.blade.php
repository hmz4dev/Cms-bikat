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
      text-align:right;
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
        <div class="panel-heading ">All Courses Offered</div>
        <div class="panel-body">
           <form action="{{url('offeredCourses')}}" method="POST" class="form">
           {{csrf_field()}}
    
    <div class="row3 ">
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
                            
                       <br>   <br>
                
                  
                </div> 
                <div class="row-2">
                <div class="stenroll ifstudent hidden">
            
                <label for="">Course Code</label>
               @for ($i = 0; $i < 8; $i++)
               <input type="text" name="row[{{$i}}][Course_code]" id="Coursecode{{$i}}" class="form-control hidden"  >
                   
               @endfor
                 
                               
       </div>
       <div class="stenroll2">
    
       <label for="coursetitle">Course Title</label>

       @for ($i = 0; $i < 8; $i++)
       <select name="row[{{$i}}][Course_name]" id="choosestudent{{$i}}" class="form-control choosestudent{{$i}}" required>
          <option value="noneselected">Choose Course</option>
   @foreach ($courses as $course)
             <option value="{{$course->course_name}}">{{$course->course_name}}</option>
             @endforeach
           </select>
           
       @endfor
      
        </div>
    
       <div class="stenroll ifstudent hidden">
                <label for="credithours">Credit Hours</label>
                   @for ($i = 0; $i < 8; $i++)
                   <input type="text" name="row[{{$i}}][Credit_hours]"  id="Credithours{{$i}}" class="form-control hidden">
                       
                   @endfor
                  
                 
                       
<br>
    </div>
                </div>
               <div class="row-4">
                     
               <!!-------------------marks --------->

               <h3>Marks Distribution &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     Pre-Requisite Course</h3>

       
         <div class="stenroll4">
            
            <label for="Mid">Mid Term</label>
            <select name="row[0][mid]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->mid}}">{{$mark->mid}}</option>
                @endforeach
            </select>
            <select name="row[1][mid]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->mid}}">{{$mark->mid}}</option>
                @endforeach
            </select>
            <select name="row[2][mid]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->mid}}">{{$mark->mid}}</option>
                @endforeach
            </select>
            <select name="row[3][mid]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->mid}}">{{$mark->mid}}</option>
                @endforeach
            </select>
            <select name="row[4][mid]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->mid}}">{{$mark->mid}}</option>
                @endforeach
            </select>
            <select name="row[5][mid]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->mid}}">{{$mark->mid}}</option>
                @endforeach
            </select>
            <select name="row[6][mid]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->mid}}">{{$mark->mid}}</option>
                @endforeach
            </select>
            <select name="row[7][mid]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->mid}}">{{$mark->mid}}</option>
                @endforeach
            </select>
           
            </div> 
         <div class="stenroll4">
            
            <label for="Internal">Internal</label>
            <select name="row[0][internal]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->internal}}">{{$mark->internal}}</option>
                @endforeach
            </select>
            <select name="row[1][internal]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->internal}}">{{$mark->internal}}</option>
                @endforeach
            </select>
            <select name="row[2][internal]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->internal}}">{{$mark->internal}}</option>
                @endforeach
            </select>
            <select name="row[3][internal]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->internal}}">{{$mark->internal}}</option>
                @endforeach
            </select>
            <select name="row[4][internal]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->internal}}">{{$mark->internal}}</option>
                @endforeach
            </select>
            <select name="row[5][internal]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->internal}}">{{$mark->internal}}</option>
                @endforeach
            </select>
            <select name="row[6][internal]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->internal}}">{{$mark->internal}}</option>
                @endforeach
            </select>
            <select name="row[7][internal]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->internal}}">{{$mark->internal}}</option>
                @endforeach
            </select>
             
            </div> 
         <div class="stenroll4">
            
            <label for="Final">Final</label>
            <select name="row[0][final]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->final}}">{{$mark->final}}</option>
                @endforeach
            </select>
            <select name="row[1][final]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->final}}">{{$mark->final}}</option>
                @endforeach
            </select>
            <select name="row[2][final]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->final}}">{{$mark->final}}</option>
                @endforeach
            </select>
            <select name="row[3][final]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->final}}">{{$mark->final}}</option>
                @endforeach
            </select>
            <select name="row[4][final]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->final}}">{{$mark->final}}</option>
                @endforeach
            </select>
            <select name="row[5][final]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->final}}">{{$mark->final}}</option>
                @endforeach
            </select>
            <select name="row[6][final]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->final}}">{{$mark->final}}</option>
                @endforeach
            </select>
            <select name="row[7][final]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->final}}">{{$mark->final}}</option>
                @endforeach
            </select>
</div>
        <div class="stenroll4">
            
            <label for="Practical">Practical</label>
            
            <select name="row[0][practical]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->practical}}">{{$mark->practical}}</option>
                @endforeach
            </select>
            <select name="row[1][practical]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->practical}}">{{$mark->practical}}</option>
                @endforeach
            </select>
            <select name="row[2][practical]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->practical}}">{{$mark->practical}}</option>
                @endforeach
            </select>
            <select name="row[3][practical]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->practical}}">{{$mark->practical}}</option>
                @endforeach
            </select>
            <select name="row[4][practical]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->practical}}">{{$mark->practical}}</option>
                @endforeach
            </select>
            <select name="row[5][practical]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->practical}}">{{$mark->practical}}</option>
                @endforeach
            </select>
            <select name="row[6][practical]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->practical}}">{{$mark->practical}}</option>
                @endforeach
            </select>
            <select name="row[7][practical]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->practical}}">{{$mark->practical}}</option>
                @endforeach
            </select> 
      
            </div> 
        <div class="stenroll4">
            
            <label for="Total">Total</label>
          
            <select name="row[0][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>
            <select name="row[1][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>
            <select name="row[2][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>
            <select name="row[3][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>
            <select name="row[4][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>
            <select name="row[5][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>
            <select name="row[6][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>
            <select name="row[7][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>  
         
            </div> 
            <div class="stenroll5">
                <label for="">Course Offer Group</label>


                 <select name="row[0][Course_group]" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                 <select name="row[1][Course_group]" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                 <select name="row[2][Course_group]" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                 <select name="row[3][Course_group]" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                 <select name="row[4][Course_group]" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                 <select name="row[5][Course_group]" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                 <select name="row[6][Course_group]" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                 <select name="row[7][Course_group]" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                  

            </div>

          
            <div class="stenroll5  ifstudent hidden">
                <label for="">Course Name</label>
                @for ($i = 0; $i < 8; $i++)
                    
                <input type="text" name="row[{{$i}}][Course_code]" id="Prereq{{$i}}" class="form-control"  >
                @endfor
                
                              
            </div>

               </div>
     <div class="row-4">
            
         <div class="stenroll">
            <br><br>
                    <label for="coursecode">Section</label>
                    <input type="text" name="row[0][Section]" class="form-control">
                    <input type="text" name="row[1][Section]" class="form-control">
                    <input type="text" name="row[2][Section]" class="form-control">
                    <input type="text" name="row[3][Section]" class="form-control">
                    <input type="text" name="row[4][Section]" class="form-control">
                    <input type="text" name="row[5][Section]" class="form-control">
                    <input type="text" name="row[6][Section]" class="form-control">
                    <input type="text" name="row[7][Section]" class="form-control">
                    
               </div>
          <div class="stenroll2">
               <br><br>
                    <label for="coursetitle">Course Incharge</label>
              <select name="row[0][Course_incharge]" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                    <select name="row[1][Course_incharge]" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                    <select name="row[2][Course_incharge]" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                    <select name="row[3][Course_incharge]" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                    <select name="row[4][Course_incharge]" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                    <select name="row[5][Course_incharge]" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                    <select name="row[6][Course_incharge]" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                    <select name="row[7][Course_incharge]" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                       
               </div>
               
                    <div class="row col-md-12">
                       <div style="padding:20px 0px 20px 40px; width:100%" class="btn ">
                        <input type="submit" value="Submit" class="btn btn-primary btn-outline-primary " style="float:left; width:50%">
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
        <script>
              $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  
for (let i = 0; i < 8; i++) {
    
    
    $('#choosestudent'+i).on('change', function() {
                if ($(this).val() === "noneselected") {
                  $('.ifstudent').addClass('hidden');
                 
                } else {
                  var name = $(this).val();
                  console.log(name)
                  $.ajax({
            url:"/123courses/"+name,
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
            else(data)
            {
              $('#Coursecode'+i).val(data.Coursecode);
              $('#Credithours'+i).val(data.Credithours);
              $('#Prereq'+i).val(data.Prereq);
              $('.ifstudent').removeClass('hidden');
              $('#Coursecode'+i).removeClass('hidden');
              $('#Credithours'+i).removeClass('hidden');
            }
          
            }
            })
                 
                }
     
    });                
}
        
        </script>

    <main class="py-4">
            @yield('content')
        </main>
</body>

</html>
