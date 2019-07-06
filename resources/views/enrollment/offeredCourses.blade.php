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
           <form action="" method="post" class="form">
          
    
    <div class="row3 ">
                   
                       <label for="degree">Degree</label>
                       <select name="degree-level" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="">Ph.D</option>
                                        <option value="">Masters</option>
                                        <option value="">Bachelor's</option>
                                        <option value="">O'Levels</option>
                                        <option value="">Diploma</option>
                                        <option value="">Intermediate</option>
                                        <option value="">Matric</option>
                                </select> 
                       <br>   <br>
                
                  
                </div> 
                <div class="row-2">
                <div class="stenroll">
            
            <label for="coursecode">Course Code</label>
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
    
            <label for="coursetitle">Course Title</label>
            <input type="text" name="coursetitle" class="form-control">
            <input type="text" name="coursetitle" class="form-control">
            <input type="text" name="coursetitle" class="form-control">
            <input type="text" name="coursetitle" class="form-control">
            <input type="text" name="coursetitle" class="form-control">
            <input type="text" name="coursetitle" class="form-control">
            <input type="text" name="coursetitle" class="form-control">
            <input type="text" name="coursetitle" class="form-control">
        
            
       </div>
       <div class="stenroll3">
    
            <label for="Semester">Semester</label>
            <input type="text" name="Semester" class="form-control">  
            <input type="text" name="Semester" class="form-control">  
            <input type="text" name="Semester" class="form-control">  
            <input type="text" name="Semester" class="form-control">  
            <input type="text" name="Semester" class="form-control">  
            <input type="text" name="Semester" class="form-control">  
            <input type="text" name="Semester" class="form-control">  
            <input type="text" name="Semester" class="form-control">  
       </div>
       <div class="stenroll">
    <label for="credithours">Credit Hours</label>
    <input type="text" name="credithours" class="form-control">  
    <input type="text" name="credithours" class="form-control">  
    <input type="text" name="credithours" class="form-control">  
    <input type="text" name="credithours" class="form-control">  
    <input type="text" name="credithours" class="form-control">  
    <input type="text" name="credithours" class="form-control">  
    <input type="text" name="credithours" class="form-control">  
    <input type="text" name="credithours" class="form-control">  
<br>
    </div>
                </div>
               <div class="row-4">
                     
               <!-------------------marks --------->

               <h3>Marks Distribution  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     Pre-Requisite Course</h3>

       
            <div class="stenroll4">
            
            <label for="Mid">Mid Term</label>
            <input type="text" name="Mid" class="form-control">    
            <input type="text" name="Mid" class="form-control">    
            <input type="text" name="Mid" class="form-control">    
            <input type="text" name="Mid" class="form-control">    
            <input type="text" name="Mid" class="form-control">    
            <input type="text" name="Mid" class="form-control">    
            <input type="text" name="Mid" class="form-control">    
            <input type="text" name="Mid" class="form-control">    
            </div> 
            <div class="stenroll4">
            
            <label for="Internal">Internal</label>
            <input type="text" name="Internal" class="form-control">  
            <input type="text" name="Internal" class="form-control">  
            <input type="text" name="Internal" class="form-control">   
            <input type="text" name="Internal" class="form-control">   
            <input type="text" name="Internal" class="form-control">   
            <input type="text" name="Internal" class="form-control">   
            <input type="text" name="Internal" class="form-control">   
            <input type="text" name="Internal" class="form-control">   
            </div> 
            <div class="stenroll4">
            
            <label for="Final">Final</label>
            <input type="text" name="Final" class="form-control">   
            <input type="text" name="Final" class="form-control">   
            <input type="text" name="Final" class="form-control">   
            <input type="text" name="Final" class="form-control">   
            <input type="text" name="Final" class="form-control">   
            <input type="text" name="Final" class="form-control">   
            <input type="text" name="Final" class="form-control">   
            <input type="text" name="Final" class="form-control">   
            </div> 
            <div class="stenroll4">
            
            <label for="Practical">Practical</label>
            <input type="text" name="Practical" class="form-control">  
            <input type="text" name="Practical" class="form-control">  
            <input type="text" name="Practical" class="form-control">  
            <input type="text" name="Practical" class="form-control">  
            <input type="text" name="Practical" class="form-control">  
            <input type="text" name="Practical" class="form-control">  
            <input type="text" name="Practical" class="form-control">  
            <input type="text" name="Practical" class="form-control">  
      
            </div> 
            <div class="stenroll4">
            
            <label for="Total">Total</label>
            <input type="text" name="Total" class="form-control">  
            <input type="text" name="Total" class="form-control">  
            <input type="text" name="Total" class="form-control">  
            <input type="text" name="Total" class="form-control">  
            <input type="text" name="Total" class="form-control">  
            <input type="text" name="Total" class="form-control">  
            <input type="text" name="Total" class="form-control">  
            <input type="text" name="Total" class="form-control">  
         
            </div> 
            <div class="stenroll5">
                <label for="">Course Offer Group</label>
                 <select name="" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Artificial Intelligence</option>
                     <option value="">Comprihenssive</option>
                     <option value="">Computer Science Education</option>
                     <option value="">Computer Science Elective</option>
                     <option value="">Core Major Course</option>
                     <option value="">Database System</option>
                     <option value="">Elective Supporting Course</option>
                 </select>
                 <select name="" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Artificial Intelligence</option>
                     <option value="">Comprihenssive</option>
                     <option value="">Computer Science Education</option>
                     <option value="">Computer Science Elective</option>
                     <option value="">Core Major Course</option>
                     <option value="">Database System</option>
                     <option value="">Elective Supporting Course</option>
                 </select>
                 <select name="" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Artificial Intelligence</option>
                     <option value="">Comprihenssive</option>
                     <option value="">Computer Science Education</option>
                     <option value="">Computer Science Elective</option>
                     <option value="">Core Major Course</option>
                     <option value="">Database System</option>
                     <option value="">Elective Supporting Course</option>
                 </select>
                 <select name="" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Artificial Intelligence</option>
                     <option value="">Comprihenssive</option>
                     <option value="">Computer Science Education</option>
                     <option value="">Computer Science Elective</option>
                     <option value="">Core Major Course</option>
                     <option value="">Database System</option>
                     <option value="">Elective Supporting Course</option>
                 </select>
                 <select name="" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Artificial Intelligence</option>
                     <option value="">Comprihenssive</option>
                     <option value="">Computer Science Education</option>
                     <option value="">Computer Science Elective</option>
                     <option value="">Core Major Course</option>
                     <option value="">Database System</option>
                     <option value="">Elective Supporting Course</option>
                 </select>
                 <select name="" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Artificial Intelligence</option>
                     <option value="">Comprihenssive</option>
                     <option value="">Computer Science Education</option>
                     <option value="">Computer Science Elective</option>
                     <option value="">Core Major Course</option>
                     <option value="">Database System</option>
                     <option value="">Elective Supporting Course</option>
                 </select>
                 <select name="" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Artificial Intelligence</option>
                     <option value="">Comprihenssive</option>
                     <option value="">Computer Science Education</option>
                     <option value="">Computer Science Elective</option>
                     <option value="">Core Major Course</option>
                     <option value="">Database System</option>
                     <option value="">Elective Supporting Course</option>
                 </select>
                 <select name="" id="" class="form-control">
                     <option value="">N/A</option>
                     <option value="">Artificial Intelligence</option>
                     <option value="">Comprihenssive</option>
                     <option value="">Computer Science Education</option>
                     <option value="">Computer Science Elective</option>
                     <option value="">Core Major Course</option>
                     <option value="">Database System</option>
                     <option value="">Elective Supporting Course</option>
                 </select>
                  

            </div>

            <div class="stenroll4">
            
            <label for="Mid">Mid Term</label>
            <input type="text" name="Mid" class="form-control">    
            <input type="text" name="Mid" class="form-control">    
            <input type="text" name="Mid" class="form-control">    
            <input type="text" name="Mid" class="form-control">    
            <input type="text" name="Mid" class="form-control">    
            <input type="text" name="Mid" class="form-control">    
            <input type="text" name="Mid" class="form-control">    
            <input type="text" name="Mid" class="form-control">    
            </div>
            <div class="stenroll5">
                <label for="">Course Name</label>
            <input type="text" name="course" class="form-control">    
            <input type="text" name="course" class="form-control">    
            <input type="text" name="course" class="form-control">    
            <input type="text" name="course" class="form-control">    
            <input type="text" name="course" class="form-control">    
            <input type="text" name="course" class="form-control">    
            <input type="text" name="course" class="form-control">    
            <input type="text" name="course" class="form-control">    
                 
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
                    <input type="text" name="coursetitle" class="form-control">
                    <input type="text" name="coursetitle" class="form-control">
                    <input type="text" name="coursetitle" class="form-control">
                    <input type="text" name="coursetitle" class="form-control">
                    <input type="text" name="coursetitle" class="form-control">
                    <input type="text" name="coursetitle" class="form-control">
                    <input type="text" name="coursetitle" class="form-control">
                    <input type="text" name="coursetitle" class="form-control">
                
                    
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
