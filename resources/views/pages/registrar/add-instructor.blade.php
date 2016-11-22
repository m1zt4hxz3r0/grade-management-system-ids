@extends('master.registrar-page-master')

@section('title')
<title>Add Instructor</title>
@stop

@section('css')
    
@stop

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<form role="form">
				<div class="form-group">
					<label>Instructor Code:</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>First Name:</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>Middle Name:</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>Last Name:</label>
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
    
