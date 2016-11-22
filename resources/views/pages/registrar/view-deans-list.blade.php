@extends('master.registrar-page-master')

@section('title')
<title>Deans' Lister</title>
@stop

@section('css')
    
@stop

@section('content')
	<div class="container-fluid">
<div style="padding-bottom:30px;">
  <div class="row">
    <div class="col-md-3">
      <h3>Sort by:</h3>
    </div>
    <div class="col-md-4">
      <button class="btn btn-info" style="width: 200px;height: 40px;">Course</button>
    </div>
    <div class="col-md-4">
      <button class="btn btn-info" style="width: 200px; height: 40px;">Section </button>
    </div>
  </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading">
    <div class="row">
      <div class="col-md-4">
        <label>Rank</label>
      </div>
      <div class="col-md-4">
        <label>Course</label>
      </div>
      <div class="col-md-4">
        <label>GWA</label>
      </div>
      
    </div>
  </div>
  <div class="panel-body">
    <ul class="list-group">
     <li class="list-group-item list-group-item-danger">
        <div class="row">
          <div class="col-md-4">
            <p>1</p>
          </div>
          <div class="col-md-4">
            <p>Lisa Manoban</p>
          </div>
          <div class="col-md-4">
            <p>BSCS</p>
          </div>
        </div>
      </li>
       <li class="list-group-item list-group-item-warning">
        <div class="row">
          <div class="col-md-4">
            <p>1</p>
          </div>
          <div class="col-md-4">
            <p>Lisa Manoban</p>
          </div>
          <div class="col-md-4">
            <p>BSCS</p>
          </div>
        </div>
      </li>
      <li class="list-group-item list-group-item-info">
        <div class="row">
          <div class="col-md-4">
            <p>1</p>
          </div>
          <div class="col-md-4">
            <p>Lisa Manoban</p>
          </div>
          <div class="col-md-4">
            <p>BSCS</p>
          </div>
        </div>
      </li>
      <li class="list-group-item list-group-item-primary">
        <div class="row">
          <div class="col-md-4">
            <p>1</p>
          </div>
          <div class="col-md-4">
            <p>Lisa Manoban</p>
          </div>
          <div class="col-md-4">
            <p>BSCS</p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>

</div>
</div>

@stop

@section('javascript')
    
@stop
    
