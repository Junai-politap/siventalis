<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="icon" href="{{url('public/web')}}/assets/images/ti.png" type="image/x-icon">
    <link rel="stylesheet" href="{{url('public/admin')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{url('public/admin')}}/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public/admin')}}/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

    <link rel="stylesheet" type="text/css" href="{{url('public/admin')}}/assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/admin')}}/assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/admin')}}/assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/admin')}}/assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <title>Si Ventalis | POLITAP</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('layout.admin.header')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('layout.admin.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->


        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">


                @include('admin.utils.notif')
                @yield('content')
            </div>
            @include('layout.admin.footer')
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{url('public/admin')}}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="{{url('public/admin')}}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="{{url('public/admin')}}/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="{{url('public/admin')}}/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="{{url('public/admin')}}/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="{{url('public/admin')}}/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="{{url('public/admin')}}/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="{{url('public/admin')}}/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="{{url('public/admin')}}/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="{{url('public/admin')}}/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="{{url('public/admin')}}/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/js/dashboard-ecommerce.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{url('public/admin')}}/assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{url('public/admin')}}/assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="{{url('public/admin')}}/assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>


</body>

</html>