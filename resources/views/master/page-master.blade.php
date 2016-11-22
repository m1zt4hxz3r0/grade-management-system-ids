<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('title')
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/simple-sidebar.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">      
        @yield('header')

    </head>

    <body>

        @yield('content')
        
        <!-- Javascript -->
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        @yield('footer')
    </body>

</html>