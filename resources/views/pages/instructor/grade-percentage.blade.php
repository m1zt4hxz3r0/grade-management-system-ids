@extends('master.instructor-page-master')

@section('title')
<title>Instructor Homepage</title>
@stop

@section('css')
    
@stop

@section('content')
<div class="container-fluid" style="padding-top: 20px;">
	<div class="dropdown" style="padding-bottom: 20px;">
	  <button class="btn btn-info dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="width: 150px;">Classes
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
	    <li><a role="menuitem" tabindex="-1" href="#">ADPROG</a></li>
	    <li><a role="menuitem" tabindex="-1" href="#">COPRO</a></li>
	    <li><a role="menuitem" tabindex="-1" href="#">COMARTS</a></li>
	  </ul>
	</div>

<table class="table table-bordered">
	<thead style="text-align: center;">
		<tr>
			<th style="text-align: center;">Component</th>
			<th style="text-align: center;">Equivalent</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Quiz</td>
			<td>40%</td>
		</tr>
		<tr>
			<td>Recitation</td>
			<td>40%</td>
		</tr>
		<tr>
			<td>Attendance</td>
			<td>20%</td>
		</tr>
		<tr>
			<td>Total</td>
			<td>100%</td>
		</tr>

	</tbody>
</table>

<table class="table table-bordered">
	<thead>
		<tr>
			<th style="text-align: center;">EXAMS</th>
			<th style="text-align: center;">Percentage</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Prelims</td>
			<td>20%</td>
		</tr>
		<tr>
			<td>Midterms</td>
			<td>20%</td>
		</tr>
		<tr>
			<td>PreFinal</td>
			<td>20%</td>
		</tr>
		<tr>
			<td>Finals</td>
			<td>40%</td>
		</tr>
	</tbody>
</table>
<button class="btn btn-info" style="float: right; width: 140px; height: 50px;">SAVE</button>

</div>

@stop

@section('javascript')
    
@stop
    
