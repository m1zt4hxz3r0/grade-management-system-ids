@extends('master.registrar-page-master')

@section('title')
<title>Student Detail</title>
@stop

@section('css')
    
@stop

@section('content')
	
<div class="mycon">
	<div class="padding">
		<table class="table table-bordered">
			<tr>
				<td><strong>Name</td>
				<td>Jennie Kim</td>
				<td><strong>Year</td>
				<td>3</td>
			</tr>
			<tr>
				<td><strong>Section</td>
				<td>BSCS401A</td>
				<td><strong>Semester</td>
				<td>3</td>
			</tr>
			<tr>
				<td><strong>Student No.</td>
				<td colspan="3">059-2013-0143</td>
			</tr>
			</table>
	</div>
</div>

		<div class="padding">
		<div class="row">
		<div class="col-md-3">
		<a href="#/registrar/addCourses" class="btn btn-info btn-lg"><i class="glyphicon glyphicon-plus"></i>ADD COURSES</a>
		</div>
		<div class="col-md-3">
			<a href="#/registrar/removeCourses" class="btn btn-danger btn-lg"><i class="glyphicon glyphicon-plus"></i>REMOVE COURSES</a>
		</div>
		</div>
		</div>
			<div class="padding">
		<table class="table" id="t01">
		        <thead>
		          <tr>
		            <th>Course Code</th>
		            <th>Course Name</th>
		            <th>Instructor</th>
		            <th>Time</th>
		            <th>Day</th>
		            <th>Room</th>
		          </tr>
		          </thead>
		          <tr>
		            <td>FLPN1</td>
		            <td>Filipino 1</td>
		            <td>Daryll Masunaga</td>
		            <td>2:30-4:00</td>
		            <td>MW</td>
		            <td>101</td>
		          </tr>
		          <tr>
		            <td>COMPFUND</td>
		            <td>Computer Fundamentals</td>
		            <td>Joey Salceda</td>
		            <td>7:30-9:00</td>
		            <td>TH-F</td>
		            <td>105</td>
		          </tr>
		          <tr>
		            <td>WEBPROG</td>
		            <td>Web Programming</td>
		            <td>Harly Napay</td>
		            <td>9:00-10:30</td>
		            <td>S</td>
		            <td>107</td>
		          </tr>
		          <tr>
		            <td>WEBPROG</td>
		            <td>Web Programming</td>
		            <td>Harly Napay</td>
		            <td>1:00-3:00</td>
		            <td>S</td>
		            <td>104</td>
		          </tr>
		          <tr>
		            <td>ADPROG</td>
		            <td>Advance Programming</td>
		            <td>Harly Napay</td>
		            <td>9:00-10:30</td>
		            <td>TH-F</td>
		            <td>101</td>
		          </tr>
		          <tr>
		            <td>DATASRUCT</td>
		            <td>Data Structure</td>
		            <td>Emil Bes</td>
		            <td>600:7:30</td>
		            <td>T-TH</td>
		            <td>103</td>
		          </tr>
		          <tr>
		            <td>OPERSYS</td>
		            <td>Operating System</td>
		            <td>Daryll Masunaga</td>
		            <td>9:00-12:00</td>
		            <td>W</td>
		            <td>107</td>
		          </tr>
		        </table>
</div>



@stop

@section('javascript')
    
@stop
    
