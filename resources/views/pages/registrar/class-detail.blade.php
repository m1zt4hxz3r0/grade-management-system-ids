@extends('master.registrar-page-master')

@section('title')
<title>Registrar Class Detail</title>
@stop

@section('css')
    
@stop

@section('content')
	
	<div class="container-fluid">
	<i class="glyphicon glyphicon-pencil pull-right"></i>
		<div class="padding">
		<div class="row">
			<div class="col-md-2">
				<label>Course Code</label>
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-2">
				<label> Course Name</label>
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <input type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Instuructor</label>
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-2">
				<label>Room</label>
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <input type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Section</label>
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-2">
				<label>Time</label>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<input type="time" class="form-control" name="time" min="9:00" max="17:00" step="900" id="lenght">
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">   
					<input type="time" class="form-control" name="time" min="9:00" max="17:00" step="900" id="lenght">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Day</label>
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-2">
				<label>Semester</label>
			</div>
			<div class="col-md-4">
				<div class="form-group">
				  <input type="text" class="form-control">
				</div>
			</div>
		</div>	
	</div>
</div>
	<div class="padding">
	    <table class="table">
          <tr>
            <td>1 Suzy Bae</td>
            <td>059-2013-0143</td>
            <td>BSCS</td>
            <td>
              <a href="registrar-student-detail" class="btn btn-info btn-sm">Details</a>
          	</td>
          </tr>
          <tr>
            <td>2 Lee Min Hoo</td>
            <td>059-2013-0143</td>
            <td>BSCS</td>
            <td>
              <a href="registrar-student-detail" class="btn btn-info btn-sm">Details</a>
          	</td>
          </tr>
          <tr>
            <td>3 Park Boo Gum</td>
            <td>059-2013-0143</td>
            <td>BSCS</td>
            <td>
              <a href="registrar-student-detail" class="btn btn-info btn-sm">Details</a>
          	</td>
          </tr>
          <tr>
            <td>4 Lisa Manoban</td>
            <td>059-2013-0143</td>
            <td>BSCS</td>
            <td>
              <a href="registrar-student-detail" class="btn btn-info btn-sm">Details</a>
          	</td>
          </tr>
          <tr>
            <td>5 Lee Jung Suk</td>
            <td>059-2013-0143</td>
            <td>BSCS</td>
            <td>
              <a href="registrar-student-detail" class="btn btn-info btn-sm">Details</a>
          	</td>
          </tr>
          <tr>
            <td>4 Kim Woo Bin</td>
            <td>059-2013-0143</td>
            <td>BSCS</td>
            <td>
              <a href="registrar-student-detail" class="btn btn-info btn-sm">Details</a>
          	</td>
          </tr>
          <tr>
            <td>5 Suzy BaeSong Joong Ki</td>
            <td>059-2013-0143</td>
            <td>BSCS</td>
            <td>
              <a href="registrar-student-detail" class="btn btn-info btn-sm">Details</a>
          	</td>
          </tr>
      </table>
</div>
	</div>


@stop

@section('javascript')
    
@stop
    
