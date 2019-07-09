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
          @foreach ($students as $student)
              
          @endforeach
           <tr>
           <td class="att-md-1">{{ $student->id}}</td>
             <td class="att-md-2">{{$student->Regno}}</td>
             <td class="att-md-4">{{ $student->student_name}} </td>
             <td class="att-md-4"> 
             <input type="radio" name="attendence" value="P"> Present
             <input type="radio" name="attendence" value="A">  Absent
            

             </td>
           </tr>
          
      </tbody>
  </table>
  </div>