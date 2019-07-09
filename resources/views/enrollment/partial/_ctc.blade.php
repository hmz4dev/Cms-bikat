<div class="row4-col3">
        <label for="">Course Type</label>
        @for ($i = 0; $i < $lent; $i++)
            
        <select name="row[{{$i}}][CourseType]" id="" class="form-control">
      <option value="">N/A</option>
      
     @foreach ($CourseGroups as $row)
     <option value="{{$row->course_type}}">{{$row->course_type}}</option>
     @endforeach
  </select>
        @endfor
     </div>



   <div class="row4-col3">
       <label for="">Course Status</label>
       @for ($i = 0; $i < $lent; $i++)
       <select name="row[{{$i}}][CourseStatus]" id="" class="form-control">
      <option value="">N/A</option>
      @foreach ($CourseGroups as $row)
      <option value="{{$row->course_status}}">{{$row->course_status}}</option>
      @endforeach
   </select>
           
       @endfor

   </div>