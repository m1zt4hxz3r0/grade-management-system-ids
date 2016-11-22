@extends('master.registrar-page-master')

@section('title')
<title>Registrar Homepage</title>
@stop

@section('css')
    
@stop

@section('content')
	<div class="container-fluid" ng-controller="registerController">
	<div class="row">
		<div class="col-md-6">
			<form role="form">
				<div class="form-group">
					<label>Class Code:</label>
					<input type="text" class="form-control" ng-model="data.classcode">
				</div>
				<div class="form-group">
					<label>Section:</label>
					<input type="text" class="form-control" ng-model="data.section">
				</div>
				<div class="form-group">
					<label>Room No.:</label>
					<input type="text" class="form-control" ng-model="data.roomnumber">
				</div>
				<div class="form-group">
					<label>Subject:</label>
					<input type="text" class="form-control" ng-model="data.subject">
				</div>
				<div class="form-group">
					<label>Instructor Code:</label>
					<input type="text" class="form-control" ng-model="data.instructor">
				</div>
			</form>
		</div>
		<div class="col-md-6">
			<form role="form">
				<div class="form-group">
					<label>AY:</label>
					<input type="text" class="form-control" ng-model="data.ay">
				</div>
				<div class="form-group">
					<label>Semester</label>
					<input type="text" class="form-control" ng-model="data.semester">
				</div>
				<div class="form-group">
					<label>Day:</label>
					<input type="text" class="form-control" ng-model="data.day">
				</div>
				<div class="form-group">
				<label>Time:</label>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
					     <label><br></label>
							<input type="time" class="form-control" name="time" min="9:00" max="17:00" step="900" ng-model="data.timefrm">
						</div>
					</div>
					<div class="col-md-2">
					     <label><br><br><br></label>
					<label>to</label>
					</div>
					<div class="col-md-4">
						<div class="form-group">
					     <label><br></label>
							<input type="time" class="form-control" name="time" min="9:00" max="17:00" step="900" ng-model="data.timeto">
						</div>
					 </div>
				</div>
				</div>
			</form>
		</div>
	</div>
		<button type="button" class="btn btn-info btn-block" ng-click="addClass(data)">ADD</button>
		</div>
@stop

@section('javascript')
    
@stop
    
