<h3><i class="fa fa-group fa-fw"> </i>  Student List</h3>
<div class="table-responsive">
  <table class="table table-bordered table-responsive-md   text-center" id="example" width="100%">
      <thead style="background-color:#004783">
          <tr>
              <td width="10%" style=" border-spacing: 0px;"></td>
              <th width="45%">Name</th>
              <td width="40%">Attendence</td>
              
          </tr>
      </thead>
      <tbody>
          @if ($attendances)
          @foreach ($attendances as $key=>$attendance)
              
          <tr>
           <td class="att-md-1 id_att[{{$attendance->id}}] hidden" id="{{ $attendance->id}}">{{ $attendance->id}}</td>
             <td >{{$key+1}}</td>
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