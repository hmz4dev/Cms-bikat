<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
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
           <form action="{{url('OfferedCourses')}}" method="post" class="form">
           {{csrf_field()}}
    
    <div class="row3 ">
                  <div>
                  <label for="degree">Degree</label>
                       <select name="degree-level" id="" class="form-control col-md-6">
                       <option value="">N/A</option>
                        @foreach($Degrees as $degree)
                        <option value="{{$degree->degree}}">{{$degree->degree}}</option>
                        @endforeach
                                </select> 
                  </div> 
                <div>
                <label for="Semester">Semester</label>
                <select name="rows[0][degree]" id="" class="form-control">
                       <option value="">N/A</option>
                        @foreach($sessions as $session)
                        <option value="{{$session->session}}">{{$session->session}}</option>
                        @endforeach
                     </select>
                </div>
                            
                       <br>   <br>
                
                  
                </div> 
                <div class="row-2">
                <div class="stenroll">
            
                <label for="">Course Code</label>
                <select name="row[0][course_code]" id="" class="form-control" required>
                       <option value="">N/A</option>
                       
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[1][course_code]" id="" class="form-control" required>
                          <option value="">N/A</option>
                                      
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[2][course_code]" id="" class="form-control" required>
                           <option value="">N/A</option>
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[3][course_code]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[4][course_code]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[5][course_code]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[6][course_code]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[7][course_code]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
       </div>
       <div class="stenroll2">
    
       <label for="coursetitle">Course Title</label>
                    <select name="row[0][Course_name]" id="" class="form-control" required>
                       <option value="">N/A</option>
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[1][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[2][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[3][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[4][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[5][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[6][Course_name]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[7][Course_name]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
         
            
       </div>
    
       <div class="stenroll">
       <label for="credithours">Credit Hours</label>
                    <select name="row[0][Credit_hours]" id="" class="form-control" required>
                       <option value="">N/A</option>
                       
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        <select name="row[1][Credit_hours]" id="" class="form-control" required>
                          <option value="">N/A</option>
                                      
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        <select name="row[2][Credit_hours]" id="" class="form-control" required>
                           <option value="">N/A</option>
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        <select name="row[3][Credit_hours]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        <select name="row[4][Credit_hours]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        <select name="row[5][Credit_hours]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        <select name="row[6][Credit_hours]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                        <select name="row[7][Credit_hours]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->credit_hours}}">{{$course->credit_hours}}</option>
                          @endforeach
                        </select>
                 
<br>
    </div>
                </div>
               <div class="row-4">
                     
               <!!-------------------marks --------->

               <h3>Marks Distribution  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
            <select name="row[0][mid]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->mid}}">{{$mark->mid}}</option>
                @endforeach
            </select>
            <select name="row[0][mid]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->mid}}">{{$mark->mid}}</option>
                @endforeach
            </select>
            <select name="row[0][mid]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->mid}}">{{$mark->mid}}</option>
                @endforeach
            </select>
            <select name="row[0][mid]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->mid}}">{{$mark->mid}}</option>
                @endforeach
            </select>
            <select name="row[0][mid]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->mid}}">{{$mark->mid}}</option>
                @endforeach
            </select>
            <select name="row[0][mid]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->mid}}">{{$mark->mid}}</option>
                @endforeach
            </select>
            <select name="row[0][mid]" class="form-control">
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
            <select name="row[0][internal]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->internal}}">{{$mark->internal}}</option>
                @endforeach
            </select>
            <select name="row[0][internal]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->internal}}">{{$mark->internal}}</option>
                @endforeach
            </select>
            <select name="row[0][internal]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->internal}}">{{$mark->internal}}</option>
                @endforeach
            </select>
            <select name="row[0][internal]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->internal}}">{{$mark->internal}}</option>
                @endforeach
            </select>
            <select name="row[0][internal]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->internal}}">{{$mark->internal}}</option>
                @endforeach
            </select>
            <select name="row[0][internal]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->internal}}">{{$mark->internal}}</option>
                @endforeach
            </select>
            <select name="row[0][internal]" class="form-control">
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
            <select name="row[0][final]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->final}}">{{$mark->final}}</option>
                @endforeach
            </select>
            <select name="row[0][final]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->final}}">{{$mark->final}}</option>
                @endforeach
            </select>
            <select name="row[0][final]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->final}}">{{$mark->final}}</option>
                @endforeach
            </select>
            <select name="row[0][final]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->final}}">{{$mark->final}}</option>
                @endforeach
            </select>
            <select name="row[0][final]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->final}}">{{$mark->final}}</option>
                @endforeach
            </select>
            <select name="row[0][final]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->final}}">{{$mark->final}}</option>
                @endforeach
            </select>
            <select name="row[0][final]" class="form-control">
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
            <select name="row[0][practical]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->practical}}">{{$mark->practical}}</option>
                @endforeach
            </select>
            <select name="row[0][practical]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->practical}}">{{$mark->practical}}</option>
                @endforeach
            </select>
            <select name="row[0][practical]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->practical}}">{{$mark->practical}}</option>
                @endforeach
            </select>
            <select name="row[0][practical]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->practical}}">{{$mark->practical}}</option>
                @endforeach
            </select>
            <select name="row[0][practical]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->practical}}">{{$mark->practical}}</option>
                @endforeach
            </select>
            <select name="row[0][practical]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->practical}}">{{$mark->practical}}</option>
                @endforeach
            </select>
            <select name="row[0][practical]" class="form-control">
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
            <select name="row[0][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>
            <select name="row[0][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>
            <select name="row[0][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>
            <select name="row[0][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>
            <select name="row[0][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>
            <select name="row[0][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>
            <select name="row[0][total]" class="form-control">
                <option value="">N/A</option>   
                @foreach ($marks as $mark)
                     <option value="{{$mark->total}}">{{$mark->total}}</option>
                @endforeach
            </select>  
         
            </div> 
            <div class="stenroll5">
                <label for="">Course Offer Group</label>
                 <select name="CourseGroups" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                 <select name="CourseGroups" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                 <select name="CourseGroups" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                 <select name="CourseGroups" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                 <select name="CourseGroups" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                 <select name="CourseGroups" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                 <select name="CourseGroups" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                 <select name="CourseGroups" id="" class="form-control">
                     <option value="">N/A</option>
                     
                    @foreach ($CourseGroups as $row)
                    <option value="{{$row->course_group}}">{{$row->course_group}}</option>
                    @endforeach
                 </select>
                  

            </div>

            <div class="stenroll4">
            
            <label for="Mid">Code</label>
            <select name="row[0][course_code]" id="" class="form-control" required>
                       <option value="">N/A</option>
                       
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[1][course_code]" id="" class="form-control" required>
                          <option value="">N/A</option>
                                      
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[2][course_code]" id="" class="form-control" required>
                           <option value="">N/A</option>
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[3][course_code]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[4][course_code]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[5][course_code]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[6][course_code]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
                        <select name="row[7][course_code]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_code}}">{{$course->course_code}}</option>
                          @endforeach
                        </select>
             
            </div>
            <div class="stenroll5">
                <label for="">Course Name</label>
                <select name="row[0][Course_name]" id="" class="form-control" required>
                       <option value="">N/A</option>
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[1][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[2][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[3][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[4][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[5][Course_name]" id="" class="form-control" required>
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[6][Course_name]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
                        <select name="row[7][Course_name]" id="" class="form-control">
                        <option value="">N/A</option>
                        
                @foreach ($courses as $course)
                          <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                          @endforeach
                        </select>
         
            </div>

               </div>
     <div class="row-4">
            
         <div class="stenroll">
            <br><br>
                    <label for="coursecode">Section</label>
                    <input type="text" name="coursecode" class="form-control">
                    <input type="text" name="coursecode" class="form-control">
                    <input type="text" name="coursecode" class="form-control">
                    <input type="text" name="coursecode" class="form-control">
                    <input type="text" name="coursecode" class="form-control">
                    <input type="text" name="coursecode" class="form-control">
                    <input type="text" name="coursecode" class="form-control">
                    <input type="text" name="coursecode" class="form-control">
                    
               </div>
               <div class="stenroll2">
               <br><br>
                    <label for="coursetitle">Course Incharge</label>
              <select name="Incharge" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                    <select name="Incharge" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                    <select name="Incharge" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                    <select name="Incharge" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                    <select name="Incharge" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                    <select name="Incharge" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                    <select name="Incharge" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                    <select name="Incharge" id="" class="form-control">
                  <option value="">N/A</option>
                    @foreach($instructors as $instructor)
                    <option value="{{$instructor->name}}">{{$instructor->name}}</option>

                    @endforeach
                
                    </select> 
                       
               </div>
               
                    <div class="row col-md-12">
                       <div style="padding:20px 0px 20px 40px; width:100%" class="btn ">
                        <input type="button" value="Submit" class="btn btn-primary btn-outline-primary " style="float:left; width:50%">
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
</body>

</html>
