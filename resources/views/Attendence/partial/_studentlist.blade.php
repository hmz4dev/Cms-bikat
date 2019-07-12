<h3><i class="fa fa-group fa-fw"> </i>  Student List</h3>
<div class="table-responsive">
  <table class="table table-bordered table-responsive-md table-striped  text-center" id="example" width="100%">
      <thead>
          <tr>
              <th class="att-md-1 hidden">#</th>
              <th class="att-md-2">Reg.No</th>
              <th class="att-md-4">Name</th>
              <th class="att-md-4">Attendence</th>
              
          </tr>
      </thead>
      <tbody>
          @if ($attendances)
              
          @foreach ($attendances as $attendance)
              
          <tr>
           <td class="att-md-1 id_att[{{$attendance->id}}] " id="{{ $attendance->id}}">{{ $attendance->id}}</td>
             <td class="att-md-2">{{$attendance->Regno}}</td>
             <td class="att-md-4">{{ $attendance->student_name}} </td>
             <td class="att-md-4 attendaceradion" > 
                 <input type="radio" name="attendence[{{$attendance->id}}]" atid="{{ $attendance->id}}" id="attendencep" value="P"> Present
                 <input type="radio" name="attendence[{{$attendance->id}}]" atid="{{ $attendance->id}}" id="attendencea" value="A">  Absent
                 
                 
                </td>
            </tr>
            @endforeach
           @endif
      </tbody>
  </table>
  <input type="button" value="save" class="btn btn-primary " id="saveattendance"  style="margin:20px; width:20%">
  </div>