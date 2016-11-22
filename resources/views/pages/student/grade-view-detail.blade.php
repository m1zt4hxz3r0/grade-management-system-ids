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
      <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#prelims" role="tab" data-toggle="tab">Prelims</a></li>                                        
          <li role="presentation"><a href="#midterms" role="tab" data-toggle="tab">Midterms</a></li>                                        
          <li role="presentation"><a href="#prefinals" role="tab" data-toggle="tab">Prefinals</a></li>
          <li role="presentation"><a href="#finals" role="tab" data-toggle="tab">Finals</a></li>                                                                                
      </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="prelims">
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">ATTENDANCE (10%)</div>
                                                      <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p>19/08/2016</p>
                                                                    <p>19/08/2016</p>
                                                                    <p>19/08/2016</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>92%</p>
                                                                    <p>92%</p>
                                                                    <p>92%</p>
                                                                </div>
                                                            </div>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">PROJECTS (10%)</div>
                                                      <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p>19/08/2016</p>
                                                                    <p>19/08/2016</p>
                                                                    <p>19/08/2016</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>92%</p>
                                                                    <p>92%</p>
                                                                    <p>92%</p>
                                                                </div>
                                                            </div>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">ATTENDANCE (10%)</div>
                                                      <div class="panel-body">
                                                        <div class="row">
                                                                <div class="col-md-6">
                                                                    <p>19/08/2016</p>
                                                                    <p>19/08/2016</p>
                                                                    <p>19/08/2016</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>92%</p>
                                                                    <p>92%</p>
                                                                    <p>92%</p>
                                                                </div>
                                                            </div>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="midterms">
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">QUIZES (10%)</div>
                                                      <div class="panel-body">
                                                        <div class="row">
                                                                <div class="col-md-6">
                                                                    <p>19/08/2016</p>
                                                                    <p>19/08/2016</p>
                                                                    <p>19/08/2016</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>92%</p>
                                                                    <p>92%</p>
                                                                    <p>92%</p>
                                                                </div>
                                                            </div>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">ATTENDANCE (10%)</div>
                                                      <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p>19/08/2016</p>
                                                                    <p>19/08/2016</p>
                                                                    <p>19/08/2016</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>92%</p>
                                                                    <p>92%</p>
                                                                    <p>92%</p>
                                                                </div>
                                                            </div>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">PROJECTS (10%)</div>
                                                      <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p>19/08/2016</p>
                                                                    <p>19/08/2016</p>
                                                                    <p>19/08/2016</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>92%</p>
                                                                    <p>92%</p>
                                                                    <p>92%</p>
                                                                </div>
                                                            </div>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">ATTENDANCE (10%)</div>
                                                      <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p>19/08/2016</p>
                                                                    <p>19/08/2016</p>
                                                                    <p>19/08/2016</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>92%</p>
                                                                    <p>92%</p>
                                                                    <p>92%</p>
                                                                </div>
                                                            </div>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="prefinals">
                                                    <div class="panel panel-primary">
                                                      <div class="panel-body">
                                                       ATTENDANCE (10%)
                                                      </div>
                                                      <div class="panel-footer">Panel footer</div>
                                                    </div>


                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="messages">
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">QUIZES (10%)</div>
                                                      <div class="panel-body">
                                                        <p>...</p>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">ATTENDANCE (10%)</div>
                                                      <div class="panel-body">
                                                        <p>...</p>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">PROJECTS (10%)</div>
                                                      <div class="panel-body">
                                                        <p>...</p>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">ATTENDANCE (10%)</div>
                                                      <div class="panel-body">
                                                        <p>...</p>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="finals">
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">QUIZES (10%)</div>
                                                      <div class="panel-body">
                                                        <p>...</p>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">ATTENDANCE (10%)</div>
                                                      <div class="panel-body">
                                                        <p>...</p>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">PROJECTS (10%)</div>
                                                      <div class="panel-body">
                                                        <p>...</p>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-primary">
                                                      <div class="panel-heading">ATTENDANCE (10%)</div>
                                                      <div class="panel-body">
                                                        <p>...</p>
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
#yeartabs{
  text-align: center;
}
    </style>
@stop

@section('javascript')
      
@stop
    