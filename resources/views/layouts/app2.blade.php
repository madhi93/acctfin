<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sri Vigneshwara Auto Finance</title>
    <!-- plugins:css -->
     <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="{{asset('template/vendors/ti-icons/css/themify-icons.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('template/vendors/base/vendor.bundle.base.css')}}"> -->
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- <link rel="stylesheet" href="{{ asset('template/css/jquery-steps.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('sriva_theme/main.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>

<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
              
        @include('partials.ui_settings')
        @include('partials.navbar')

        <div class="app-main">
                   
            <!-- partial:partials/_sidebar.html -->
            @include('partials.sidebar')
            <!-- partial -->
            @yield('content')
            
        </div>
    </div>


<!-- <div class="container-scroller"> -->
    <!-- partial:partials/_navbar.html -->
    
    <!-- partial -->
    <!-- <div class="container-fluid page-body-wrapper"> -->
        
        <!-- main-panel ends -->
    <!-- </div> -->
    <!-- @include('partials.footer') -->
    <!-- page-body-wrapper ends -->
<!-- </div> -->
<!-- Scripts -->

<!-- plugins:js -->
<!-- <script src="{{asset('template/vendors/base/vendor.bundle.base.js')}}"></script> -->
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- <script src="{{asset('template/vendors/chart.js/Chart.min.js')}}"></script> -->
<!-- End plugin js for this page-->
<!-- inject:js -->
<!-- <script src="{{asset('template/js/off-canvas.js')}}"></script> -->
<!-- <script src="{{asset('template/js/hoverable-collapse.js')}}"></script> -->
<!-- <script src="{{asset('template/js/template.js')}}"></script> -->
<!-- <script src="{{asset('template/js/todolist.js')}}"></script> -->
<!-- endinject -->
<!-- Custom js for this page-->
<!-- <script src="{{asset('template/js/dashboard.js')}}"></script> -->
<!-- <script src="{{asset('template/js/jquery-steps.min.js')}}"></script> -->

<!-- MDBootstrap Datatables  -->
<link href="css/addons/datatables2.min.css" rel="stylesheet">
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="js/addons/datatables2.min.js"></script>
<script src="{{asset('sriva_theme/assets/scripts/main.js')}}"></script>

<script src="{{asset('template/js/custom.js')}}"></script>
<script>
    
</script>
<!-- End custom js for this page-->
</body>
</html>