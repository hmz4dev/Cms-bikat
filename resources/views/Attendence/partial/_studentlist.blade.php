<h3><i class="fa fa-group fa-fw"> </i>  Student List</h3>
<div class="table-responsive">
  <table class="table table-bordered table-responsive-md table-striped  text-center" id="example" width="100%">
      <thead>
          <tr>
              <th class="att-md-1">#</th>
              <th class="att-md-2">Reg.No</th>
              <th class="att-md-4">Name</th>
              <th class="att-md-4">Attendence</th>
              
          </tr>
      </thead>
      <tbody>
          @if ($attendances)
              
          
           <tr>
           <td class="att-md-1 id_att" id="{{ $attendances->id}}">1</td>
             <td class="att-md-2">{{$attendances->Regno}}</td>
             <td class="att-md-4">{{ $attendances->student_name}} </td>
             <td class="att-md-4"> 
             <input type="radio" name="attendence" id="attendencep" value="P"> Present
             <input type="radio" name="attendence" id="attendencea" value="A">  Absent
            

             </td>
           </tr>
           @endif
      </tbody>
  </table>
  <input type="button" value="save" class="btn btn-primary " id="saveattendance"  style="margin:20px; width:20%">
  </div>