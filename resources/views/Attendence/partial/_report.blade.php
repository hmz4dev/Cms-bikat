{{-- {{dd($attendancesgroup)}} --}}
<div class="table-responsive tableadd hidden">
        <div id="exportbutton"><a type="button" href="/attendence/exportPdf" name="export" id="" class="export btn btn-danger btn-sm"><i class="fa fa-file-pdf-o"></i>
          Export in PDF</a></div>
<table class="table table-bordered text-center" id="attendance_table">
        <thead>
         <tr style="background-color:#004783">
            
             <th width="25%">Name</th>
             <th colspan="{{$count}}">Attendance</th>
           
         </tr>
         @foreach ($attendancesgroup as $item => $val )
         <tr>
             <th>{{$item}}</th>
         @foreach ($val as $a)
         <th>{{$a->attendance}}</th>
         @if ($loop->last &&$val->count() < $count)
         @for ($i = 0; $i < $count-$val->count(); $i++)
             <th></th>
         @endfor     
         @endif
             
         @endforeach
        </tr>
         @endforeach
        </thead>
    </table>
</div>