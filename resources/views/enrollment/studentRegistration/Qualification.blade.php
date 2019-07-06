<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../css/customstyle.css">
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
        <div class="panel-heading ">Qualification Info</div>
        <div class="panel-body">
            <form method="POST" action="{{url('Qualification')}}"  class="form">
            {{csrf_field()}}
                <div class="row-3 padding"  >
                <label for="">Student Name</label>
               
                <select name="row[0][St_id]" id="" class="form-control" required>
                @foreach ($students as $student)
                          <option value="{{$student->st_id}}">{{$student->name}}</option>
                          @endforeach
                        </select>
                        
                    <!-------- First Column------>
                    <div class="step2-column">
                    
                        <label for="step2">Degree</label>
                        <select name="row[0][Degree]" id="" class="form-control" required>
                        <option value="">N/A</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Diploma">Diploma</option>
                            <option value="O-Levels">O-Levels</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Masters">Masters</option>                            
                            <option value="Ph.D">Ph.D</option>
                        </select>
                        <select name="row[1][Degree]" id="" class="form-control" required>
                        <option value="">N/A</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Diploma">Diploma</option>
                            <option value="O-Levels">O-Levels</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Masters">Masters</option>                            
                            <option value="Ph.D">Ph.D</option>
                        </select>
                        <select name="row[2][Degree]" id="" class="form-control">
                        <option value="">N/A</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Diploma">Diploma</option>
                            <option value="O-Levels">O-Levels</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Masters">Masters</option>                            
                            <option value="Ph.D">Ph.D</option>
                        </select>
                        <select name="row[3][Degree]" id="" class="form-control" >
                        <option value="">N/A</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Diploma">Diploma</option>
                            <option value="O-Levels">O-Levels</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Masters">Masters</option>                            
                            <option value="Ph.D">Ph.D</option>
                        </select>
                        <select name="row[4][Degree]" id="" class="form-control">
                             <option value="">N/A</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Diploma">Diploma</option>
                            <option value="O-Levels">O-Levels</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Masters">Masters</option>                            
                            <option value="Ph.D">Ph.D</option>
                        </select>
                        <select name="row[5][Degree]" id="" class="form-control" >
                        <option value="">N/A</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Diploma">Diploma</option>
                            <option value="O-Levels">O-Levels</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Masters">Masters</option>                            
                            <option value="Ph.D">Ph.D</option>
                        </select>
                        
                    </div>
                     <!-------- Second Column------>

                    <div class="step2-column ">
                        <label for="">From Date</label>
                        <input type="date" name="row[0][From_date]" class="form-control" required>
                        <input type="date" name="row[1][From_date]" class="form-control" required>
                        <input type="date" name="row[2][From_date]" class="form-control" >
                        <input type="date" name="row[3][From_date]" class="form-control" >
                        <input type="date" name="row[4][From_date]" class="form-control" >
                        <input type="date" name="row[5][From_date]" class="form-control" >
                     
                            
                    </div>

                    <!-------- third Column------>
                    <div class="step2-column " >
                    <label for="">To Date</label>
                        <input type="date" name="row[0][To_date]" class="form-control" required>
                        <input type="date" name="row[1][To_date]" class="form-control" required>
                        <input type="date" name="row[2][To_date]" class="form-control">
                        <input type="date" name="row[3][To_date]" class="form-control">
                        <input type="date" name="row[4][To_date]" class="form-control">
                        <input type="date" name="row[5][To_date]" class="form-control">
                   
                    
                    </div>
                    <!-------- 4th Column------>
                    <div class="step2-board " >
                    <label for="">Institute Attended</label>
                        <input type="text" name="row[0][Institute_attended]" class="form-control" required>
                        <input type="text" name="row[1][Institute_attended]" class="form-control" required>
                        <input type="text" name="row[2][Institute_attended]" class="form-control">
                        <input type="text" name="row[3][Institute_attended]" class="form-control">
                        <input type="text" name="row[4][Institute_attended]" class="form-control">
                        <input type="text" name="row[5][Institute_attended]" class="form-control">
                     
                    </div>
                    <div class="step2-board " >
                    <label for="">Board/University</label>
                        <input type="text" name="row[0][Uni_board]" class="form-control" required>
                        <input type="text" name="row[1][Uni_board]" class="form-control" required>
                        <input type="text" name="row[2][Uni_board]" class="form-control" >
                        <input type="text" name="row[3][Uni_board]" class="form-control" >
                        <input type="text" name="row[4][Uni_board]" class="form-control" >
                        <input type="text" name="row[5][Uni_board]" class="form-control" >
                        
                    </div>
                   
             </div> 
             <br>
             <div class="row-3">
                    <!-------- 4th Column------>
                    <div class="step2-column2" >
                    <label for="">Obtain Marks</label>
                        <input type="text" name="row[0][Obtain]" class="form-control" required>
                        <input type="text" name="row[1][Obtain]" class="form-control" required>
                        <input type="text" name="row[2][Obtain]" class="form-control" >
                        <input type="text" name="row[3][Obtain]" class="form-control" >
                        <input type="text" name="row[4][Obtain]" class="form-control" >
                        <input type="text" name="row[5][Obtain]" class="form-control" >
                                
                    </div>
                    <div class="step2-column2" >
                    <label for="">Total Marks</label>
                        <input type="text" name="row[0][Total_marks]" class="form-control" required>
                        <input type="text" name="row[1][Total_marks]" class="form-control" required>
                        <input type="text" name="row[2][Total_marks]" class="form-control">
                        <input type="text" name="row[3][Total_marks]" class="form-control">
                        <input type="text" name="row[4][Total_marks]" class="form-control">
                        <input type="text" name="row[5][Total_marks]" class="form-control">
                         
                    </div>
                    <div class="step2-column2" >
                    <label for="">%age</label>
                        <input type="text" name="row[0][Percentage]" class="form-control" required>
                        <input type="text" name="row[1][Percentage]" class="form-control" required>
                        <input type="text" name="row[2][Percentage]" class="form-control" >
                        <input type="text" name="row[3][Percentage]" class="form-control" >
                        <input type="text" name="row[4][Percentage]" class="form-control" >
                        <input type="text" name="row[5][Percentage]" class="form-control" >
                      
                    </div>
                    <div class="step2-column2 col-md" >
                    <label for="">Grade</label>
                        <input type="text" name="row[0][Grade]" class="form-control" required>
                        <input type="text" name="row[1][Grade]" class="form-control" required>
                        <input type="text" name="row[2][Grade]" class="form-control">
                        <input type="text" name="row[3][Grade]" class="form-control">
                        <input type="text" name="row[4][Grade]" class="form-control">
                        <input type="text" name="row[5][Grade]" class="form-control">
                        
                    </div>
                    <div class="step2-column2 col-md" >
                    <label for="">CGPA</label>
                        <input type="text" name="row[0][Cgpa]" class="form-control">
                        <input type="text" name="row[1][Cgpa]" class="form-control">
                        <input type="text" name="row[2][Cgpa]" class="form-control">
                        <input type="text" name="row[3][Cgpa]" class="form-control">
                        <input type="text" name="row[4][Cgpa]" class="form-control">
                        <input type="text" name="row[5][Cgpa]" class="form-control">
                        
                    </div>
                    <div class="step2-insti" >
                    <label for="">Degree for Marit</label>
                    <select name="row[0][Marit]" id="" class="form-control">
                    <option value="">N/A</option>
                            <option value="Ph.D">Ph.D</option>
                            <option value="Masters">Masters</option>
                            <option value="Bachelors">Bachelors</option>
                            <option value="OLevels">OLevels</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Matric">Matric</option>
                        </select>
                        <select name="row[1][Marit]" id="" class="form-control">
                    <option value="">N/A</option>
                            <option value="Ph.D">Ph.D</option>
                            <option value="Masters">Masters</option>
                            <option value="Bachelors">Bachelors</option>
                            <option value="OLevels">OLevels</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Matric">Matric</option>
                        </select>
                        <select name="row[2][Marit]" id="" class="form-control">
                    <option value="">N/A</option>
                            <option value="Ph.D">Ph.D</option>
                            <option value="Masters">Masters</option>
                            <option value="Bachelors">Bachelors</option>
                            <option value="OLevels">OLevels</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Matric">Matric</option>
                        </select>
                        <select name="row[3][Marit]" id="" class="form-control">
                    <option value="">N/A</option>
                            <option value="Ph.D">Ph.D</option>
                            <option value="Masters">Masters</option>
                            <option value="Bachelors">Bachelors</option>
                            <option value="OLevels">OLevels</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Matric">Matric</option>
                        </select>
                        <select name="row[4][Marit]" id="" class="form-control">
                    <option value="">N/A</option>
                            <option value="Ph.D">Ph.D</option>
                            <option value="Masters">Masters</option>
                            <option value="Bachelors">Bachelors</option>
                            <option value="OLevels">OLevels</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Matric">Matric</option>
                        </select>
                        <select name="row[5][Marit]" id="" class="form-control">
                    <option value="">N/A</option>
                            <option value="Ph.D">Ph.D</option>
                            <option value="Masters">Masters</option>
                            <option value="Bachelors">Bachelors</option>
                            <option value="OLevels">OLevels</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Matric">Matric</option>
                        </select>
                           
                    </div>
                    
             </div> 
             <br><br>  
             <div class="row-4">
                        <div class="doc-check-list">
                            <div class="check-list" >
                                <label for="">Document Check Lits</label>
                                <select name="row[0][Doc_checklist]" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="Two Recent photographs (passport zise)">Two Recent photographs (passport zise)</option>
                                        <option value="Picture">Picture</option>
                                        <option value="PostDocs PhD and any other">PostDocs PhD and any other</option>
                                        <option value="CV">CV</option>
                                        <option value="NOC form employer if(applicable)">NOC form employer if(applicable)</option>
                                        <option value="Attested copy of result Card of GRE/GAT/NAT (where applicable)">Attested copy of result Card of GRE/GAT/NAT (where applicable)</option>
                                </select> 
                                <select name="row[1][Doc_checklist]" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="Two Recent photographs (passport zise)">Two Recent photographs (passport zise)</option>
                                        <option value="Picture">Picture</option>
                                        <option value="PostDocs PhD and any other">PostDocs PhD and any other</option>
                                        <option value="CV">CV</option>
                                        <option value="NOC form employer if(applicable)">NOC form employer if(applicable)</option>
                                        <option value="Attested copy of result Card of GRE/GAT/NAT (where applicable)">Attested copy of result Card of GRE/GAT/NAT (where applicable)</option>
                                </select> 
                                <select name="row[2][Doc_checklist]" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="Two Recent photographs (passport zise)">Two Recent photographs (passport zise)</option>
                                        <option value="Picture">Picture</option>
                                        <option value="PostDocs PhD and any other">PostDocs PhD and any other</option>
                                        <option value="CV">CV</option>
                                        <option value="NOC form employer if(applicable)">NOC form employer if(applicable)</option>
                                        <option value="Attested copy of result Card of GRE/GAT/NAT (where applicable)">Attested copy of result Card of GRE/GAT/NAT (where applicable)</option>
                                </select> 
                                <select name="row[3][Doc_checklist]" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="Two Recent photographs (passport zise)">Two Recent photographs (passport zise)</option>
                                        <option value="Picture">Picture</option>
                                        <option value="PostDocs PhD and any other">PostDocs PhD and any other</option>
                                        <option value="CV">CV</option>
                                        <option value="NOC form employer if(applicable)">NOC form employer if(applicable)</option>
                                        <option value="Attested copy of result Card of GRE/GAT/NAT (where applicable)">Attested copy of result Card of GRE/GAT/NAT (where applicable)</option>
                                </select> 
                                <select name="row[4][Doc_checklist]" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="Two Recent photographs (passport zise)">Two Recent photographs (passport zise)</option>
                                        <option value="Picture">Picture</option>
                                        <option value="PostDocs PhD and any other">PostDocs PhD and any other</option>
                                        <option value="CV">CV</option>
                                        <option value="NOC form employer if(applicable)">NOC form employer if(applicable)</option>
                                        <option value="Attested copy of result Card of GRE/GAT/NAT (where applicable)">Attested copy of result Card of GRE/GAT/NAT (where applicable)</option>
                                </select> 
                                <select name="row[5][Doc_checklist]" id="" class="form-control">
                                        <option value="">N/A</option>
                                        <option value="Two Recent photographs (passport zise)">Two Recent photographs (passport zise)</option>
                                        <option value="Picture">Picture</option>
                                        <option value="PostDocs PhD and any other">PostDocs PhD and any other</option>
                                        <option value="CV">CV</option>
                                        <option value="NOC form employer if(applicable)">NOC form employer if(applicable)</option>
                                        <option value="Attested copy of result Card of GRE/GAT/NAT (where applicable)">Attested copy of result Card of GRE/GAT/NAT (where applicable)</option>
                                </select> 
                                 
                            </div>
                            <div class="copies">
                                    <label for="copy">Copies</label>
                                    <input type="text" name="row[0][Copies]" class="form-control">
                                    <input type="text" name="row[1][Copies]" class="form-control">
                                    <input type="text" name="row[2][Copies]" class="form-control">
                                    <input type="text" name="row[3][Copies]" class="form-control">
                                    <input type="text" name="row[4][Copies]" class="form-control">
                                    <input type="text" name="row[5][Copies]" class="form-control">
                                    
                                  

                            </div>
                       
                        </div>
                       
                        <div class="row col-md-12">
                       <div style="padding:20px 0px 20px 40px; width:100%" class="btn ">
                        <input type="submit" value="Submit" class="btn btn-primary btn-outline-primary " style="float:left; width:50%">
                        <input type="Cancel" value="Cancel" class="btn btn-danger btn-outline-primary " style="float:left; padding-left:10px; width:50%">
                       </div>
                       
                   </div>
                        
                     </div>
<br>
             
            </form>
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

</body>

</html>
