<!DOCTYPE html>
<html>
<head>
<title>{{$title}} - semester{{$semester}} - degree{{$degree}} - subject {{$subject}}</title>

	<style>
	.tableadd table{
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #000;
}
.g-container:after {
	content: "";
  display: table;
  clear: both;
  margin-bottom: 10px;
}
.g-item {
    float: left;
  width: 33.33%;
  padding: 10px;
  margin-bottom: 10px;
  color: #ff0000;
  font-family: "Times New Roman", Times, serif;
  font-size: 14px;
}
.center {
	text-align: center;
  border: 3px solid green;
  padding: 2px;
}

th{

  min-width: 50px;


}

th{

  padding: 8px;


}

.tableadd table th, .tableadd table td {
    border: 1px solid #000;
}
	</style>
</head>
<body>

	<h3 class="center"> Report of attendance </h3>
	<div class="g-container">
		<div class="g-item">Semester: {{$semester}}</div>
		<div class="g-item">Degree: {{$degree}}</div>
		<div class="g-item">Subject: {{$subject}}</div>
	</div>
		<div class="table-responsive tableadd hidden">
				
		<table class="table table-bordered " id="attendance_table">
				<thead>
				 <tr>
					
					 <th width="25%">Name</th>
					 <th colspan="{{$count}}">Attendances</th>
				   
				 </tr>
				 @foreach ($enrollments as $item => $val )
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
</body>
</html>