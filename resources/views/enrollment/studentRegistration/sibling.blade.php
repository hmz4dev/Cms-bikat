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
        <div class="panel-heading ">Sibling Detail</div>
        <div class="panel-body">
           <form method="POST" action="{{url('siblings')}}" >
           {{csrf_field()}}
               <div class="row-4">
               <label for="">Student Name</label>
               
                <select name="row[0][St_id]" id="" class="form-control" required>
                @foreach ($students as $student)
                          <option value="{{$student->st_id}}">{{$student->name}}</option>
                          @endforeach
                        </select>
               <div class="step4-column">
                    <label for="siblings">Sibling Name</label>
                    <input type="text" name="row[0][Name]" class="form-control"><br>
                    <input type="text" name="row[1][Name]" class="form-control"><br>
                    <input type="text" name="row[2][Name]" class="form-control"><br>
                    <input type="text" name="row[3][Name]" class="form-control"><br>
                    <input type="text" name="row[4][Name]" class="form-control"><br>
               </div>
               <div class="step4-column">
                     <label for="">Relation</label>
                                <select name="row[0][Relation]" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                </select><br>
                                <select name="row[1][Relation]" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                </select><br>
                                <select name="row[2][Relation]" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                </select><br>
                                <select name="row[3][Relation]" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                </select><br>
                                <select name="row[4][Relation]" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                </select><br>
                                 
               </div>
               <div class="step4-column2">
                    <label for="Age">Age</label>
                    <input type="integer" name="row[0][Age]" class="form-control"><br>
                    <input type="integer" name="row[1][Age]" class="form-control"><br>
                    <input type="integer" name="row[2][Age]" class="form-control"><br>
                    <input type="integer" name="row[3][Age]" class="form-control"><br>
                    <input type="integer" name="row[4][Age]" class="form-control"><br>
                  
               </div>
               <div class="step4-column3 ">
                    <label for="Institute">Education Department</label>
                    <input type="text" name="row[0][Edudept]" class="form-control"><br>
                    <input type="text" name="row[1][[Edudept]" class="form-control"><br>
                    <input type="text" name="row[2][[Edudept]" class="form-control"><br>
                    <input type="text" name="row[3][[Edudept]" class="form-control"><br>
                    <input type="text" name="row[4][[Edudept]" class="form-control"><br>
                  
               </div>
               <div class="step4-column3 ">
                    <label for="Institute">Examination Department</label>
                    <input type="text" name="row[0][Examdept]" class="form-control"><br>
                    <input type="text" name="row[1][Examdept]" class="form-control"><br>
                    <input type="text" name="row[2][Examdept]" class="form-control"><br>
                    <input type="text" name="row[3][Examdept]" class="form-control"><br>
                    <input type="text" name="row[4][Examdept]" class="form-control"><br>
                  
               </div>
               <div class="step4-column ">
               <label for="step2">Degree</label>
                        <select name="row[0][Degree]" id="" class="form-control">
                            <option value="">N/A</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Diploma">Diploma</option>
                            <option value="O-Levels">O-Levels</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Masters">Masters</option>                            
                            <option value="Ph.D">Ph.D</option>
                        </select><br>
                        <select name="row[1][Degree]" id="" class="form-control">
                            <option value="">N/A</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Diploma">Diploma</option>
                            <option value="O-Levels">O-Levels</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Masters">Masters</option>                            
                            <option value="Ph.D">Ph.D</option>
                        </select><br>
                        <select name="row[2][Degree]" id="" class="form-control">
                            <option value="">N/A</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Diploma">Diploma</option>
                            <option value="O-Levels">O-Levels</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Masters">Masters</option>                            
                            <option value="Ph.D">Ph.D</option>
                        </select><br>
                        <select name="row[3][Degree]" id="" class="form-control">
                            <option value="">N/A</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Diploma">Diploma</option>
                            <option value="O-Levels">O-Levels</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Masters">Masters</option>                            
                            <option value="Ph.D">Ph.D</option>
                        </select><br>
                        <select name="row[4][Degree]" id="" class="form-control">
                            <option value="">N/A</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Diploma">Diploma</option>
                            <option value="O-Levels">O-Levels</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Masters">Masters</option>                            
                            <option value="Ph.D">Ph.D</option>
                        </select><br>
                       
               </div>
               <div class="step4-column">
                    <label for="Remarks">Remarks</label>
                    <input type="text" name="row[0][Remarks]" class="form-control"><br>
                    <input type="text" name="row[1][Remarks]" class="form-control"><br>
                    <input type="text" name="row[2][Remarks]" class="form-control"><br>
                    <input type="text" name="row[3][Remarks]" class="form-control"><br>
                    <input type="text" name="row[4][Remarks]" class="form-control"><br>
                 
               </div>
               <div class="row col-md-12">
                       <div style="padding:50px 0px 0px 40px; width:100%" class="btn ">
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
    <main class="py-4">
            @yield('content')
        </main>
</body>

</html>
