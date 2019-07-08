<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
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
    .panel-heading{
        font-size:20pt;
        background-color:#005A57;
        color:white;
       text-align:center;
    }
    .panel-body{
       
        background-color:#005A57;
        color:white;
       
    }
    .modal{
        background-color:#005A57;
        color:white;        
    }
    .modal-header{
        color:#005A57; 
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
    <div class="panel panel-default  offset-4 ">
        <div class="panel-heading ">Add Teacher</div>
        <div class="panel-body" >

        <button class="btn btn-info btn-lg"  id="add" >Add Teacher</button>

      
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">...</h4>
                <div id="result"></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form col-md-12" id="form" >
                {{csrf_field()}}
        <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Full Name</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter full Name" required>
                </div>
            </div>
        </div>
     
        <div class="form-group">
            <label for="email" class="cols-sm-2 control-label"> Email</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter  Email" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="cols-sm-2 control-label">Cell No</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="cellno" id="cellno" placeholder="Enter Cell No" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="cols-sm-2 control-label">Teacher Type</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-marker fa" aria-hidden="true"></i></span>
                    <select class="form-control" name="type" id="type" required>
                        <option value="N/A">N/A</option>
                        <option value="Permanent">Permanent</option>
                        <option value="Visiting">Visiting</option>
                    
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="cols-sm-2 control-label">Department</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-building fa" aria-hidden="true"></i></span>
                    <select class="form-control" name="department" id="department" placeholder="Enter Department" required>
                        <option value="N/A">N/A</option>
                        <option value="Computer Sciences">Computer Sciences</option>
                        <option value="Management Sciences">Management Sciences</option>
                    
                    </select>
                </div>
            </div>
        </div>

        <div class="row col-md-8 ">
        <input name="hidden_id" id="hidden_id"  type="hidden" >
                       <input type="hidden" id="action" >    
          <input type="submit" value="Submit" class="btn btn-primary "  style="float:left;margin-left:100px; width:100%">
                            
                            
        </div>

        </form>
           
  </div>
</div>


        
        </div>
       <br><br><br>
            <table class="table table-bordered table-responsive-md " id="dtBasicExample" width="100%">
                <thead>
                    <tr style="background-color:#31B0D5">
                        <th>Teacher Name</th>
                        <th>Email Address</th>
                        <th>Cell No</th>
                        <th>Type </th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($instructors as $row)
                    <tr id="tr_{{$row['id']}}">
                        <td>{{$row['name']}}</td>
                        <td>{{$row['email']}}</td>
                        <td>{{$row['cellno']}}</td>
                        <td>{{$row['type']}}</td>
                        <td>{{$row['department']}}</td>
                        <td><a type="button" class="btn btn-warning" id="edit" idAtt="{{$row['id']}}"><i  class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger" id="delete" idattr="{{$row['id']}}"><i  class="fa fa-trash"></i></a></td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="align-right" style="float:right">{{$instructors->links()}}</div> 

           
   
    </div>
    
<!-- /#page-wrapper -->
 <!-- delete Modal  -->
 <div class="modal fade" id="confirmdeleteModal" tabindex="-1" role="dialog" aria-labelledby="delete"
 aria-hidden="true"> 
 
 <div class="  modal-dialog modal-frame modal-bottom modal-notify modal-success
 " role="document">
 
 
 <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
 
         <h4 class="modal-title w-100 font-weight-bold" id="deletemodeltitle"> Are you sure for delete this instructor ?  </h4>
 
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="button" id="delete_ok_action" class="btn btn-primary">Delete</button>
       </div>
     </div>
   </div>
 </div>
 </div>
 <!-- delete Modal  -->
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
             $('#add').on('click', function(){
                 event.preventDefault();
                 $('#form')[0].reset();
                 $('#form').attr("action", "{{url('enrollment/instructor')}}");
                 $('#form').removeAttr("enctype");
                 $('#hidden_id').val("");
                 $('#result').html('');



            $('#form').attr("method", "post");
            $('#action').val("Add");

            $('#myModal').modal('show');
            $('.modal-title').text('Add Teacher')
        })

        /* Edit teacher script*/
        $(document).on('click', '#edit', function(){
            $('#result').html('');
            var id = $(this).attr('idAtt');
            event.preventDefault();
            $('#form')[0].reset();
            $('#form').removeAttr("action");
            $('#form').removeAttr("method");
            $('#form').attr("enctype","multipart/form-data");

            $.ajax({
        url:"/instructorEdit/"+id,
        dataType:"json",
        success:function(html){
        $('#hidden_id').val(html.data.id);
        $('#name').val(html.data.name);
        $('#email').val(html.data.email);
        $('#cellno').val(html.data.cellno);
        selectElem('type', html.data.type);
        selectElem('department', html.data.department);
        $('#action').val("Edit");
        $('#myModal').modal('show');
        $('.modal-title').text('Edit Teacher')
        }
        })


         
        
        })
        /** update script*/
        $('#form').on('submit', function(event){
       
        if($('#action').val() == "Edit")
        {
            event.preventDefault();
        $.ajax({
        url:"{{ route('instructor.update') }}",
        method:"POST",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType:"json",
        success:function(data)
        {
        var html = '';
        if(data.errors)
        {
         html = '<div class="alert alert-danger">';
         for(var count = 0; count < data.errors.length; count++)
         {
          html += '<p>' + data.errors[count] + '</p>';
         }
         html += '</div>';
        $('#result').html(html);
        }
        if(data.success)
        {
      $('#myModal').modal('hide');
      if ($('#tr_' + data.success.id).length) {
    var newHtml = '<td>' + data.success.name +'</td>'
            + '<td>' + data.success.email + '</td>'
            + '<td>' + data.success.cellno + '</td>'
            + '<td>' + data.success.type + '</td>'
            + '<td>' + data.success.department + '</td>'
            + '<td>' + '<a type="button" class="btn btn-danger" id="edit" idAtt="'+data.success.id+'"><i  class="fa fa-edit"></i></a>'
            +'  <a href="" class="btn btn-danger" id="delete" idattr="'+data.success.id+'"><i  class="fa fa-trash"></i></a>' + '</td>';
            setTimeout(function(){
       
    $('#tr_'+ data.success.id).css("background-color", "#65F3D2");
    $('#tr_' + data.success.id).html(newHtml);

        }, 1500);
        setTimeout(function(){
            $('#tr_'+ data.success.id).css("background-color", "");
        }, 2800);
}
        }
        
        }
        });
        }
        });


        /**delete script*/
 
        $(document).on('click', '#delete', function(){
            event.preventDefault();
      $('#delete_ok_action').text('Delete');
      $('#deletemodeltitle').text("Are you sure for delete this instructor ?"); 
        id = $(this).attr('idattr');
        console.log(id)
                $('#confirmdeleteModal').modal('show');
        });
      
        $('#delete_ok_action').click(function(){
        $.ajax({
        url:"/instructor/destroy/"+id,
        beforeSend:function(){
        $('#delete_ok_action').text('Deleting...');
        },
        success:function(data)
        {
        $('#confirmdeleteModal').modal('hide');
        $('#tr_'+id).css('background-color','red');

        setTimeout(function(){
        $('#tr_'+id).remove();
        }, 1700);
      
        }
        })
        });

        function selectElem(elem, val) {
           $("#"+elem+" option[value='"+val+"']").attr("selected", "selected");
           $("#"+elem).val(val);
       
        }

        </script>
</body>

</html>
