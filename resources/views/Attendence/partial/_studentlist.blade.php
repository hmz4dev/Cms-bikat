<h3><i class="fa fa-group fa-fw"> </i>  Student List</h3>
<div class="table-responsive">
  <table class="table table-bordered table-responsive-md   text-center" id="example" width="100%">
      <thead style="background-color:#004783">
          <tr>
              <th width="20%">Reg.No</th>
              <th width="40%">Name</th>
              <th width="40%">Attendence</th>
              
          </tr>
      </thead>
      <tbody>
          @if ($attendances)
              
          @foreach ($attendances as $attendance)
              
          <tr>
           <td class="att-md-1 id_att[{{$attendance->id}}] hidden" id="{{ $attendance->id}}">{{ $attendance->id}}</td>
             <td >{{$attendance->Regno}}</td>
             <td >{{ $attendance->student_name}} </td>
             <td class="attendaceradion" > 
                 <input type="radio" name="attendence[{{$attendance->id}}]" atid="{{ $attendance->id}}" id="attendencep" value="P"> Present
                 <input type="radio" name="attendence[{{$attendance->id}}]" atid="{{ $attendance->id}}" id="attendencea" value="A">  Absent
                 
                 
                </td>
            </tr>
            @endforeach
           @endif
      </tbody>
  </table>
  <button type="button"  class="btn btn-primary " id="saveattendance"  style="margin:20px; width:20%" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order">save</button>
  </div>