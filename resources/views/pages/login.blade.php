<!DOCTYPE html>
<html lang="en">
<head>
	
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to IDS College</title>
        
        <!-- CSS -->
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}">
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
       
  
        <!-- Javascript -->
        <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script> 
          
</head>
<body>
	  <div class="full">
        <div class="top-content">
            <div class="inner-bg">
                <div class="container-wrapper">
                     <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Welcome to Our Online Grading System</h1>
                            <div class="description">
                              <h5>
                                IDC COLLEGES <strong>"ids"</strong> A Building With Four Walls And Tomorrow Inside. A community of lifelong learners, responsible global citizens, and champions of our own success.Committed to educating and nurturing all students so they may grow towards responsible global citizenship.
                              </h5>
                            </div>
                        </div>
                    </div>
                    
<div class="row">
<div class="col-md-8">
                           
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 30px; margin-left: 20px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/sti1.jpg" alt="STI Announcements" width="460" height="345">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="img/sti.jpg" alt="STI Announcements" width="460" height="345">
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <img src="img/sti2.jpg" alt="STI Announcements" width="460" height="345">
        <div class="carousel-caption">
          
        </div>
      </div>
      </div>
  
    </div>
</div>      
            <div class="col-md-4">
            
            <div class="form-box">
                            <div class="form-top">
                              <div class="form-top-left">
                                <h3>Login to our site</h3>
                                  <p>Enter username and password to log on:</p>
                              </div>
                              <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                              </div>
                              </div>
                              <div class="form-bottom">

                              <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                  <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="text" >
                                </div>
                                <div class="form-group">
                                  <label class="sr-only" for="form-password">Password</label>
                                  <input type="password" name="form-password" placeholder="Password..." class="form-password form-control text" id="text" >
                                </div>
                               <button class="btn btn-primary btn-block" id="btnLogin">Log In</button>
                   
                          </div>
                        </div>
            </div>
                    </div>                  
                </div>
            </div>       
        </div>
</div>
<div class="modal fade" id="myModal">
<div class="modal-dialog">
              <div class="modal-content">

                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 class="modal-title">Register</h3>
                  </div>

                  <div class="modal-body">
                      <p>Error Credentials!!</p>
                      </div>
                  <div class="modal-footer">
                      <p id="passError" style="color:red;visibility:hidden;">Password Doesn't Match!</p>
                      <button class="btn btn-primary btn block">Ok</button>
                  </div>
              </div>
</div>
 </div>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }

  </style>

	
</body>
</html>