@extends('master.registrar-page-master')

@section('title')
<title>Search Instructor 	</title>
@stop

@section('css')
    
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<input type="text" class="form-control">
			</div>
			<div class="col-md-4">
				<button type="button" class="btn btn-default btn-info btn-sm">
	            <span class="glyphicon glyphicon-search"></span> Search
	          </button>
			</div>
		</div>
<div class="row">
  <div class="col-md-3">
    <div class="form-group">
      <label>Instructor Code:</label>
      <input type="text" class="form-control">
    </div>
  </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>First Name:</label>
          <input type="text" class="form-control">
        </div>

      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>MiddleName:</label>
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Last Name:</label>
          <input type="text" class="form-control">
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
              <a href="#/registrar/studentDetails" class="btn btn-info btn-sm">Details</a>
          	</td>
          </tr>
          <tr>
            <td>2 Lee Min Hoo</td>
            <td>059-2013-0143</td>
            <td>BSCS</td>
            <td>
              <a href="#/registrar/studentDetails" class="btn btn-info btn-sm">Details</a>
          	</td>
          </tr>
          <tr>
            <td>3 Park Boo Gum</td>
            <td>059-2013-0143</td>
            <td>BSCS</td>
            <td>
              <a href="#/registrar/studentDetails" class="btn btn-info btn-sm">Details</a>
          	</td>
          </tr>
          <tr>
            <td>4 Lisa Manoban</td>
            <td>059-2013-0143</td>
            <td>BSCS</td>
            <td>
              <a href="#/registrar/studentDetails" class="btn btn-info btn-sm">Details</a>
          	</td>
          </tr>
          <tr>
            <td>5 Lee Jung Suk</td>
            <td>059-2013-0143</td>
            <td>BSCS</td>
            <td>
              <a href="#/registrar/studentDetails" class="btn btn-info btn-sm">Details</a>
          	</td>
          </tr>
          <tr>
            <td>4 Kim Woo Bin</td>
            <td>059-2013-0143</td>
            <td>BSCS</td>
            <td>
              <a href="#/registrar/studentDetails" class="btn btn-info btn-sm">Details</a>
          	</td>
          </tr>
          <tr>
            <td>5 Suzy BaeSong Joong Ki</td>
            <td>059-2013-0143</td>
            <td>BSCS</td>
            <td>
              <a href="#/registrar/studentDetails" class="btn btn-info btn-sm">Details</a>
          	</td>
          </tr>
      </table>
</div>
	</div>

@stop

@section('javascript')
    
@stop
    
