<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('title')
        
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">      
        <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
        @yield('css')

    </head>

    <body>
        
 <nav class="navbar navbar-default no-margin">
                                    <form class="pull-right" style="padding-top: 20px;padding-right:20px;"><label>Your log on as:</label><label>Kim, Jennie</label></form>

    <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header fixed-brand"><center><strong><h3>Menu</h3></strong></center>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
                      <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                    </button>
                </div><!-- navbar-header-->
 
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
                            </ul>
                </div>

    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
               <li>
                    <a href="instructor-classes"><span class="fa-stack fa-lg pull-left"><i class="fa fa-graduation-cap fa-stack-1x "></i></span> Classes</a>
                </li>
                <li>
                    <a href="instructor-class-standing"><span class="fa-stack fa-lg pull-left"><i class="fa fa-child fa-stack-1x "></i></span> Class Standing</a>
                </li>
                <li>
                    <a href="instructor-grade-percentage"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cog fa-stack-1x "></i></span> Change Grade Percentage</a>
                </li>  
                <li>
                   <a><span class="fa-stack fa-lg pull-left"><i class="fa fa-paper-plane fa-stack-1x "></i></span>Grades</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="instructor-grade">Submit Grades</a></li>
                    </ul>
                </li> 
                <li>
                    <a><span class="fa-stack fa-lg pull-left"><i class="fa fa-print fa-stack-1x "></i></span>Reports</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="#/instructor/submitgrades">Print Reports</a></li>
                    </ul>
                </li>
                <li>
                    <a><span class="fa-stack fa-lg pull-left"><i class="fa fa-cog fa-stack-1x "></i></span>Account Settings</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="instructor-change-password">Change Password</a></li>
                        <li><a href="instructor-change-pin">Change Pin</a></li>
                        <li><a href="/">Log out</a></li>                
                    </ul>
                </li>             
            </ul>
        </div><!-- /#sidebar-wrapper -->
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                <div class="row">
                    <div class="col-lg-12">
                    @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
     

        
        <!-- Javascript -->
        <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
        <script src="{{ asset('js/sidebar_menu.js') }}"></script>
        @yield('javascript')
    </body>

</html>