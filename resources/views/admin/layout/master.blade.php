<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">


<!-- Mirrored from mannatthemes.com/approx/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2024 23:10:28 GMT -->

<head>


    <meta charset="utf-8" />
    <title>Charity website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/libs/uppy/uppy.min.css" rel="stylesheet" type="text/css" />


    <title>@yield('title')</title>
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- header -->
    @include('admin.layout.header')
    <!-- header End -->
    @include('admin.layout.aside')

    <!-- aside -->

    <div class="startbar-overlay d-print-none"></div>
    <!-- end leftbar-tab-menu-->

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">
            @yield('content')
            <!--Start Footer-->

            @include('admin.layout.footer')

            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <!-- vendor js -->

    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>

    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="../../../apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="assets/js/pages/index.init.js"></script>
    <script src="assets/js/DynamicSelect.js"></script>
    <script src="assets/js/app.js"></script>

    @yield('js')
    
</body>
<!--end body-->


<!-- Mirrored from mannatthemes.com/approx/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2024 23:10:58 GMT -->

</html>