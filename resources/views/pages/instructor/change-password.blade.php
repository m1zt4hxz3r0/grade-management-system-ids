@extends('master.instructor-page-master')

@section('title')
<title>Change password</title>
@stop

@section('css')
    
@stop

@section('content')
	
            <div class="form-box">
                            <div class="form-top">
                              <div class="form-top-left">
                                <h3>Change Password!</h3>
                                    <p>Choose a strong password! By changing your password you will be logged off of all other devices</p>
                              </div>
                              <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                              </div>
                              </div>
                              <div class="form-bottom">
                            <form role="form" action="" method="post" class="login-form">
                            <div class="form-group">
                                <label class="sr-only"></label>
                                  <input type="password" placeholder="Current Password..." class="form-control" id="text">
                                </div>
                              <div class="form-group">
                                <label class="sr-only"></label>
                                  <input type="password" placeholder="New Password..." class="form-control" id="text">
                                </div>
                                <div class="form-group">
                                  <label class="sr-only"></label>
                                  <input type="password" placeholder="Repeat Password..." class="form-control text" id="text">
                                </div>
                                <a href="#/instructor/slide"><button type="submit" class="btn btn-primary btn-block" id="btnsignin" style="margin-bottom: 15px;">Cancel!</button></a>
                                <a href="#/instructor/slide"><button type="submit" class="btn btn-primary btn-block" id="btnsignin" style="margin-bottom: 15px;">Confirm!</button></a>
                               
                            </form>
                          </div>
                        </div>
    </div>

@stop

@section('javascript')
    
@stop
    
