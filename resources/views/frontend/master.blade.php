<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Nature Saver</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontEnd/')}}/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontEnd/')}}/style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="{{asset('frontEnd/')}}/img/core-img/leaf.png" alt="">
        </div>
    </div>

 @include('frontend.includes.header')



    <!-- ##### Testimonial Area End ##### -->

    <!-- ##### Product Area Start ##### -->
 @yield('mainContent')
    <!-- ##### Product Area End ##### -->


    <!-- ##### Blog Area End ##### -->



    <!-- ##### Footer Area Start ##### -->
 @include('frontend.includes.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('frontEnd/')}}/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{asset('frontEnd/')}}/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('frontEnd/')}}/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{asset('frontEnd/')}}/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="{{asset('frontEnd/')}}/js/active.js"></script>
</body>

</html>