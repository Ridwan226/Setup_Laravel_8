<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>DQuran Admin</title>
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/morris/morris.css') }}">

    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">
        @include('layouts.admin.header')


        @include('layouts.admin.seeder')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                    @yield('content')

                    @include('layouts.admin.footer')
            </div>
        </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin/assets/js/waves.min.js') }}"></script>

    <!--Morris Chart-->
    <script src="{{ asset('admin/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/raphael/raphael.min.js') }}"></script>

    <script src="{{ asset('admin/assets/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

</body>

</html>
