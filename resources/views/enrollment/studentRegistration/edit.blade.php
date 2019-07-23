<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{asset('/css/customstyle.css')}}">
    <link href="{{asset('/css/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
   
<!-- MetisMenu CSS -->
<link href="{{asset('/css/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{asset('/css/sb-admin-2.css')}}" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="{{asset('/css/morrisjs/morris.css')}}" rel="stylesheet">

<!-- Custom Fonts -->
<link href="{{asset('/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="{{asset('fonts/css/all.css')}}">
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
        <div class="panel-heading ">Student Registration</div>
        <div class="panel-body">
            <form method="POST" action="{{url('/enrollment/studentRegistration/update')}}" >
               
{{ csrf_field() }}
                <!-------- First Column------>
            <input type="hidden" name="st_id" value="{{$student->st_id}}">               
                <div class="row-1">
                <div class="column col-md-4">
                <label for="status"> Student Status</label>
                    <select class="form-control" name="status" required>
                        <option value="">N/A</option>
                        <option value="admitted" {{ ($student->status == "admitted")? "selected" : "" }}>admitted</option>
                        <option value="cancel" {{ ($student->status == "cancel")? "selected" : "" }}>cancel</option>
                        <option value="Discontinued" {{ ($student->status == "Discontinued")? "selected" : "" }}>Discontinued</option>
                        <option value="enrolled" {{ ($student->status == "enrolled")? "selected" : "" }}>enrolled</option>
                    </select>
                    <label for="Semester"> Semester</label>
                    <select class="form-control" name="semester" required>
                        @for ($i = 1; $i < 9; $i++)
                    <option value="{{$i}}" {{($student->semester == $i) ? "selected": ""}}>{{$i}}</option>
                            
                        @endfor
                   
                    </select>
                    <div class=" row col-md-7">
                <label for="shift"> Shift</label>
                    <select class="form-control" name="shift" required>
                        <option value="Morning" {{ ($student->shift == "Morning")? "selected" : "" }}>Morning</option>
                        <option value="Evening" {{ ($student->shift == "Evening")? "selected" : "" }}>Evening</option>
                        
                    </select>
                    
            </div>
            
            <div class=" row col-md-6">
                <label for="urban_rural"> Urban/Rural</label>
                    <select class="form-control" name="urban_rural">
                        <option value="Urban" {{ ($student->urban_rural == "Urban")? "selected" : "" }}>Urban</option>
                        <option value="Rural" {{ ($student->urban_rural == "Rural")? "selected" : "" }}>Rural</option>
                        
                    </select>
                    
                    
            </div>
            
            <label for="domicile"> Domicile</label>
                    <select class="form-control" name="domicile" required>
                        <option value="Punjab"  {{ ($student->domicile == "Punjab")? "selected" : "" }}>Punjab</option>
                        <option value="KPK"  {{ ($student->domicile == "KPK")? "selected" : "" }}>KPK</option>
                        <option value="Sindh"  {{ ($student->domicile == "Sindh")? "selected" : "" }}>Sindh</option>
                        <option value="Balochistan"  {{ ($student->domicile == "Balochistan")? "selected" : "" }}>Balochistan</option>
                    </select>
                    </div>


                    <div class="column col-md-4">
                    
                
                    <label for="Session">Session</label>
                    <select class="form-control" name="session" required>
                    <option value="">N/A</option>
                    @foreach($sessions as $row)
                        
                        <option value="{{$row->session}}" {{ ($student->session == $row->session)? "selected" : "" }}>{{$row->session}}</option>
                     @endforeach
                     </select>
                    <label for="degree"> Degree</label>
                     
                    <select class="form-control" name="degree" required>
                    <option value="">N/A</option>
                          @foreach($degrees as $degree)
                            <option value="{{$degree->degree}}" {{ ($student->degree == $degree->degree)? "selected" : "" }}>{{$degree->degree}}</option>
                          @endforeach
                    </select>
                    <label for="decipline"> Decipline/Subject</label>
                    <select class="form-control" name="decipline" required>
                    <option value="">N/A</option>
                          @foreach($deciplines as $decipline)
                            <option value="{{$decipline->decipline}}"{{ ($student->decipline == $decipline->decipline)? "selected" : "" }}>{{$decipline->decipline}}</option>
                          @endforeach
                    </select>
                    <label for="seat_type"> Seat Type</label>
                    <select class="form-control" name="seat_type" required>
                        <option value="Regular"  {{ ($student->seat_type == "Regular")? "selected" : "" }}>Regular</option>
                        <option value="Researved" {{ ($student->seat_type == "Researved")? "selected" : "" }}>Researved</option>
                    </select>
</div>

                    <div class="column1" >
                           <img src="{{asset('/images/face.png')}}" alt="" width="190px;" >
                          
                           <input type="file" name="image" >
                      </div>    


                </div>
                <div class="row-1">
                <h3>Student Detail</h3>
                <div class="column1">
                       <label for="status"> Gender</label>
                    <select class="form-control" name="gender" required >
                        <option value="Male" {{($student->gender == "Male") ? "selected": ""}}>Male</option>
                        <option value="Female" {{($student->gender == "Female") ? "selected": ""}}>Female</option>
                        <option value="other"{{ ($student->gender == "other") ? "selected": ""}}>other</option>
                    </select>
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{$student->name}}" id="alpha" class="form-control" required>
                    
                    <label for="name">CNIC</label>
                    <input type="text" name="st_cnic" value="{{$student->st_cnic}}" class="form-control" id="cnic" maxlength="15" required>
                    <label for="name">Cell No</label>
                        <input type="integer" name="cellno" value="{{$student->cellno}}" id="cellnophp" maxlength="12" class="form-control" required>
                        
                </div>
                <div class="column1">
                <label for="registration#">Registration No</label>
                    <input type="text" name="reg_no" value="{{$student->reg_no}}" id="regno" maxlength="13" class="form-control" required>
                    <label for="predegree">Previous Degree</label>
                    <select name="previous_degree" id="degree" class="form-control" required>
                          <option value="noselect">N/A</option>
                          @foreach($degrees as $degree)
                            <option value="{{$degree->degree}}" {{($student->degree == $degree->degree) ? "selected": ""}}>{{$degree->degree}}</option>
                          @endforeach
                     </select>
                    </select>
                    <label for="name">Date of Birth</label>
                    <input type="date" name="dob" value="{{$student->dob}}" class="form-control" required>
                    <label for="name">Telephone</label>
                        <input type="integer" name="telephone" value="{{$student->telephone}}" id="telephone" maxlength="11" class="form-control"> 
                   
                </div>
                <div class="column1"> 
                <label for="status"> Section</label>
                    <input type="text" name="section" value="{{$student->section}}" class="form-control">
                    <label for="nationality">Nationality</label>
                    
                    <select class="form-control" name="nationality" required>
                    <option value="Pakistani" {{($student->nationality == "Pakistani") ? "selected": ""}}>Pakistani</option>
                        <option value="Abroad" {{($student->nationality == "Abroad") ? "selected": ""}}>Abroad</option>
                        </select>
                        <label for="religion">Religion</label>
                        <select class="form-control" name="religion" required>
                            <option value="Islam" {{($student->religion == "Islam") ? "selected": ""}}>Islam</option>
                            <option value="Cristian" {{($student->religion == "Cristian") ? "selected": ""}}>Cristian</option>
                            <option value="Hinduism" {{($student->religion == "Hinduism") ? "selected": ""}}>Hinduism</option>
                            <option value="Sikhism" {{($student->religion == "Sikhism") ? "selected": ""}}>Sikhism</option>
                        </select>
                        <label for="name">Email</label>
                        <input type="email" name="email" value="{{$student->email}}" class="form-control">
                       
                </div>
                </div>
                <div class="row-1">
               
                <div class="column1">
                    <h3>Father's info</h3>
                    <label for="fname">Father Name</label>
                    <input type="text" name="father_name"  value="{{$student->father_name}}" id="fname" class="form-control" required>
                    <label for="income">Father Income</label>
                    <input type="number" name="father_income"  value="{{$student->father_income}}"  class="form-control">
                </div>
                <div class="column1">
                <h3>   &nbsp;&nbsp;&nbsp;</h3>
                    <label for="fcnic">Father CNIC</label>
                    <input type="text" name="father_cnic" value="{{$student->father_cnic}}" id="father_cnic" maxlength="15" class="form-control" required>
                    <label for="occupation">Father Occupation</label>
                <input type="text" name="father_occupation" value="{{$student->father_occupation}}" class="form-control">
                   
                    
                </div>
                <div class="column1">
                <h3>  Test Detail</h3>
                    
                <label for="test">Test</label>
                        <select class="form-control " name="test">
                            <option value="N/A">N/A</option>
                            <option value="NAT">NAT</option>
                            <option value="GAT">GAT</option>
                            <option value="GRE">GRE</option>
                        </select>
                        <label for="dot">Date of Test</label>
                        <input type="date" name="dot" value="{{$student->dot}}"  class="form-control">
                        <label for="marks">Makrs</label>
                        <input type="text" name="marks"  value="{{$student->marks}}" class="form-control">
                    
                </div>


            </div>
            <div class="row-2">
            <h3>Address Detail</h3>
            <div class="column2">
                        
                        <label for="city">City</label>
                        <select class="form-control " name="city" required>
                            <option value="Rawalpindi">Rawalpindi</option></option>
                            <option value="Islamabad">Islamabad</option>
                            <option value="Lahore">Lahore</option>
                            <option value="Multan">Multan</option>
                            <option value="Karachi">Karachi</option>
                            <option value="Faisalabad">Faisalabad</option>
                        </select>
                        <label for="address1">Address Temporary </label>
                    <textarea name="temporary_address" class="form-control" value="{{$student->temporary_address}}" id="usr" required></textarea>
                        
                    </div>
                    <div class="column2">
                    
                        <label for="permanent_address">Address Permanent</label>
                        <textarea name="permanent_address" class="form-control" id="usr" required>{{$student->permanent_address}}</textarea>

                                
                    </div>
                
                   
            </div>
            <div class="row-1">

            <h3>Guardian Detail</h3>
                    <div class="column2">
                                           
                    <label for="">Guardian Name</label>
                    <input type="text" name="guardian" id="gname" value="{{$student->guardian}}" class="form-control" required>
                                <label for="">Relation</label>
                                <select name="relation" id="" class="form-control" required>
                                        <option value="N/A">N/A</option>
                                        <option value="Self">Self</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Uncle">Uncle</option>
                                        <option value="Son">Son</option>
                                        <option value="Dughter">Dughter</option>
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Wife">Wife</option>
                                        <option value="Aunt">Aunt</option>
                                        <option value="Sister">Sister</option>
                                </select> 
                                <label for="">Guardian Cell</label>
                            <input type="text" name="guardian_phone" id="guardian_phone" value="{{$student->guardian_phone}}"  maxlength="12" class="form-control" required>
                                
                    </div>
                    <div class="column2">
                    <label for="">Emergency Person</label>
                                <input type="text" name="emergency_person" id="ename" class="form-control" required value="{{$student->emergency_tel}}">
                                <label for="">Emergency Tel#</label>
                                <input type="integer" name="emergency_tel" id="emergency_tel" maxlength="11" class="form-control" value="{{$student->emergency_tel}}">
                                <label for="">Emergency Cell</label>
                                <input type="integer" name="emergency_cell" id="emergency_cell" maxlength="12" class="form-control" value="{{$student->emergency_cell}}" required>
                    </div>
                    
                    <div class="row col-md-12">
                       <div style="padding:20px 0px 20px 40px; width:100%" class="btn ">
                       <input type="submit" value="Submit" class="btn btn-primary btn-outline-primary " style="float:left; width:50%">
                        <a href="{{url('enrollment')}}" class="btn btn-danger btn-outline-primary " style="float:left; padding:10px; width:50%">Cancel</a>
                       </div>
                       
                   </div>
                    </div>
              
             </div>    
            
            </form>
    </div>    
        
                        
                    

        <!-- /#page-wrapper -->

</div>
    <!-- /#wrapper -->
 
    <!-- jQuery -->
    <script src="../js/jquery/jquery.min.js"></script>
    <script src="js/script.js"></script>

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
  
        </script>
</body>

</html>
