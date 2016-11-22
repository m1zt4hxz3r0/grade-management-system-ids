@extends('master.student-page-master')

@section('title')
<title>Student Grade View</title>
@stop

@section('css')

@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#sem1" role="tab" data-toggle="tab" >1st Semester</a></li>
                    <li role="presentation"><a href="#sem2" role="tab" data-toggle="tab" >2nd Semester</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="sem1">
                      <div class="padding">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Subject Title</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>Prelims</p>
                                            <p>Midterm</p>
                                            <p>Pre-finals</p>
                                            <p>Finals</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>1</p>
                                            <p>2</p>
                                            <p>5</p>
                                            <p>5</p>
                                        </div>
                                        <div class="col-md-4">
                                        <br><br><button class="btn btn-info"><a href="/student/grade-view/detail" >DETAILS</a></button>
                                        </div>
                                    </div>
                                </div>
                                  </div>
                      </div>
                    </div>
                     <div role="tabpanel" class="tab-pane" id="sem2">
                      <div class="padding">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Subject Title</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>Prelims</p>
                                            <p>Midterm</p>
                                            <p>Pre-finals</p>
                                            <p>Finals</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>1</p>
                                            <p>1</p>
                                            <p>1</p>
                                            <p>1</p>
                                        </div>
                                        <div class="col-md-4">
                                        <br><br><a href="student-grade-view-detail" ><button class="btn btn-info">DETAILS</button></a>
                                        </div>
                                    </div>
                                </div>
                                  </div>
                      </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<style>
.nav-tabs { border-bottom: 2px solid #DDD; }
.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
.nav-tabs > li > a { border: none; color: #666; }
.nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
.nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
.nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 15px 0; }
.tab-content{padding:20px}


</style>
@stop

@section('javascript')
      
@stop
    