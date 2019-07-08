

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet">
    
<!-- MetisMenu CSS -->
<link href="../css/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../css/sb-admin-2.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="../css/morrisjs/morris.css" rel="stylesheet">



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

<body >

<div id="soft-all-wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('admin.inc.header')
            @include('admin.inc.sidebar')
            
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
                
                    
                            <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="text-center">Add Courses <span ></span></h4>
                                        </div>
                                        <div class="panel-body">
                                        <button class="btn btn-info btn-lg"  id="add" >Add Course</button>

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
                                                        <label for="email" class="cols-sm-2 control-label"> Course Code</label>
                                                        <div class="cols-sm-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"></span>
                                                                <input type="text" name="Course_code" id="coursecode" class="form-control col-md-1" required>                </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="cols-sm-2 control-label">Course Name</label>
                                                        <div class="cols-sm-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"></span>
                                                                <input type="text" name="Course_name" id="coursename" class="form-control col-md-4" required>                </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="cols-sm-2 control-label">Pre Requisit</label>
                                                        <div class="cols-sm-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"></span>
                                                                <input type="text" name="Pre_req" id="prereq" class="form-control col-md-1" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="cols-sm-2 control-label">Credit Hourse</label>
                                                        <div class="cols-sm-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"></span>
                                                                <input type="text" name="Credit_hours" id="credithours" class="form-control col-md-1" required>
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
                    <br><br>
                    <table class="table table-bordered table-responsive-md table-responsive " id="dtBasicExample" width="100%">
                                                <thead >
                                                <tr style="background-color:#31B0D5">
                                                <th class="col-md-1">Course Code</th>
                                                <th class="col-md-4">Course Name</th>
                                                <th class="col-md-1">Pre-Req</th>
                                                <th class="col-md-1">Credit Hours</th>
                                                <th class="col-md-1">Action</th>
                                                </tr>
                                                </thead>
                                                    <tbody>
                                            
                                                        @foreach($courses as $row)
                                                        <tr id="tr_{{$row['id']}}">
                                                            <td>{{$row['course_code']}}</td>
                                                            <td>{{$row['course_name']}}</td>
                                                            <td>{{$row['pre_req']}}</td>
                                                            <td>{{$row['credit_hours']}}</td>
                                                            <td><a type="button" class="btn btn-warning" id="edit" idAtt="{{$row['id']}}"><i  class="fa fa-edit"></i></a>
                                                            <a href="" class="btn btn-danger" id="delete" idattr="{{$row['id']}}"><i  class="fa fa-trash"></i></a></td>
                                                        </tr>
                                                        @endforeach
                                                        
                                                        
                                                    </tbody>
                                                                        
                                                </table>
                                    
                                    <div class="align-right" style="float:right">{{$courses->links()}}</div>
                                
                                
                                
                                </div>
                        

                    </div>
                    <!-- /#page-wrapper -->
                        <!-- delete Modal  -->
                        <div class="modal fade" id="confirmdeleteModal" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true"> 
                                
                            <div class="modal-dialog modal-frame modal-bottom modal-notify modal-success" role="document">
                            
                            
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
        </div>
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
                 $('#form').attr("action", "{{url('/enrollment/course')}}");
                 $('#form').removeAttr("enctype");
                 $('#hidden_id').val("");
                 $('#result').html('');



            $('#form').attr("method", "post");
            $('#action').val("Add");

            $('#myModal').modal('show');
            $('.modal-title').text('Add Course')
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
        url:"/courseEdit/"+id,
        dataType:"json",
        success:function(html){
        $('#hidden_id').val(html.data.id);
        $('#coursecode').val(html.data.course_code);
        $('#coursename').val(html.data.course_name);
        $('#credithours').val(html.data.credit_hours);
        $('#prereq').val(html.data.pre_req);
        $('#action').val("Edit");
        $('#myModal').modal('show');
        $('.modal-title').text('Edit Course')
        }
        })


         
        
        })
        /** update script*/
        $('#form').on('submit', function(event){
       
        if($('#action').val() == "Edit")
        {
            event.preventDefault();
        $.ajax({
        url:"{{ route('course.update') }}",
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
    var newHtml = '<td>' + data.success.course_code +'</td>'
            + '<td>' + data.success.course_name + '</td>'
            + '<td>' + data.success.pre_req + '</td>'
            + '<td>' + data.success.credit_hours + '</td>'
            + '<td>' + '<a type="button" class="btn btn-danger" id="edit" idAtt="'+data.success.id+'"><i  class="fa fa-edit"></i></a>'
            +'  <a href="" class="btn btn-danger" id="delete" idattr="'+data.success.id+'"><i  class="fa fa-trash"></i></a>' + '</td>';
            setTimeout(function(){
       
    $('#tr_'+ data.success.id).css("background-color", "#65F3D2");
    $('#tr_' + data.success.id).html(newHtml);

        }, 1500);
        setTimeout(function(){
            $('#tr_'+ data.success.id).css("background-color", "");
        }, 2000);
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
      $('#deletemodeltitle').text("Are you sure for delete this course?"); 
        id = $(this).attr('idattr');
        console.log(id)
                $('#confirmdeleteModal').modal('show');
        });
      
        $('#delete_ok_action').click(function(){
        $.ajax({
        url:"//course/destroy/"+id,
        beforeSend:function(){
        $('#delete_ok_action').text('Deleting...');
        },
        success:function(data)
        {
        $('#confirmdeleteModal').modal('hide');
        $('#tr_'+id).css('background-color','red');

        setTimeout(function(){
        $('#tr_'+id).remove();
        }, 1300);
      
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
