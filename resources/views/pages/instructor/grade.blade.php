@extends('master.instructor-page-master')

@section('title')
<title>Instructor Homepage</title>
@stop

@section('css')
    
@stop

@section('content')
	<div class="container-fluid">
	<div class="dropdown" style="padding-bottom: 10px;">
	  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sections
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
	    <li><a href="#">ADPROG</a></li>
	    <li><a href="#">WEBPROG</a></li>
	    <li><a href="#">ADBASE</a></li>
	    <li><a href="#">COPRO3</a></li>

	  </ul>
	</div>

<div class="table-responsive">
  <table class="table table-bordered">
  	<thead>
        <tr>
            <th><center>Name</center></th>
            <th><center>Prelims</center></th>
            <th><center>Midterms</center></th>
            <th><center>Prefinals</center></th>
            <th><center>Finals</center></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Lisa Manoban</td>
            <td>1.2</td>
            <td>1.1</td>
            <td>2.3</td>
            <td>2.3</td>
        </tr>
        <tr>
            <td>Kim Jisso</td>
            <td>1.2</td>
            <td>1.1</td>
            <td>2.3</td>
            <td>2.3</td>
        </tr>
        <tr>
            <td>Jennie Kim</td>
            <td>1.2</td>
            <td>1.1</td>
            <td>2.3</td>
            <td>2.3</td>
        </tr>
        <tr>
            <td>Rosee Kim</td>
            <td>1.2</td>
            <td>1.1</td>
            <td>2.3</td>
            <td>2.3</td>
        </tr>
        <tr>
            <td>Rosee Kim</td>
            <td>1.2</td>
            <td>1.1</td>
            <td>2.3</td>
            <td>2.3</td>
        </tr>
        <tr>
            <td>Rosee Kim</td>
            <td>1.2</td>
            <td>1.1</td>
            <td>2.3</td>
            <td>2.3</td>
        </tr>
        <tr>
            <td>Rosee Kim</td>
            <td>1.2</td>
            <td>1.1</td>
            <td>2.3</td>
            <td>2.3</td>
        </tr>
        <tr>
            <td>Rosee Kim</td>
            <td>1.2</td>
            <td>1.1</td>
            <td>2.3</td>
            <td>2.3</td>
        </tr>
        <tr>
            <td>Rosee Kim</td>
            <td>1.2</td>
            <td>1.1</td>
            <td>2.3</td>
            <td>2.3</td>
        </tr>
    </tbody>


  </table>
</div>
	
</div>

@stop

@section('javascript')
    
@stop
    
