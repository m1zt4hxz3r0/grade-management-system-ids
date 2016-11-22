@extends('master.registrar-page-master')

@section('title')
<title>Add Student</title>
@stop

@section('css')
    
@stop

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<form role="form">
				<div class="form-group">
					<label>Student No:</label>
					<input type="text" class="form-control">
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>First Name:</label>
							<input type="text" class="form-control">
						</div>

					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>MiddleName:</label>
							<input type="text" class="form-control">
						</div>

					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Last Name:</label>
							<input type="text" class="form-control">
						</div>

					</div>
				</div>
				<div class="form-group">
					<label>Section:</label>
					<input type="text" class="form-control">
				</div>
				
				<div class="form-group">
					<label>Course:</label>
					<input type="text" class="form-control">
				</div>
			</form>
		</div>
		<div class="col-md-6">
			<form role="form">
				<div class="form-group">
					<label>Year:</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>Semester</label>
					<input type="text" class="form-control">
				</div>
			</form>
		</div>
	</div>
		<button type="button" class="btn btn-info btn-block">ADD</button>
		</div>

@stop

@section('javascript')
    
@stop
    
