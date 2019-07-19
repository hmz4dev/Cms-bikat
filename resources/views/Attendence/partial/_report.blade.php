{{-- {{dd($attendancesgroup)}} --}}

<div class="table-responsive tableadd hidden">
        <div id="exportbutton"><a type="button" href="/attendence/exportPdf" name="export" id="" class="export btn btn-danger btn-sm"><i class="fa fa-file-pdf-o"></i>
          Export in PDF</a></div>
<table class="table table-bordered text-center" id="attendance_table">
        <thead>
         <tr>
            <th  style="
                border-top: 2px solid #005A57 !important; 
                border-left: 2px solid #005A57 !important; 
            " rowspan="2">#</th>
             <th width="35%" rowspan="2">Name</th>
             <th colspan="{{$count}}">Attendances</th>
           
         </tr>
         <tr>
           
                    @for ($i = 0; $i < $count; $i++)
                    <th>{{$i+1}}</th>
                   @endfor
            
         </tr>
     @php
       $key = 1  
     @endphp
         @foreach ($attendancesgroup as $item => $val )
         <tr>
         <th>{{$key}}</th>
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
        @php
            $key++
        @endphp
         @endforeach
        </thead>
    </table>
</div>