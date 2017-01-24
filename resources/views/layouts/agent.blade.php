<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Agent Dashboard</title>
    <meta name="description" content="Only access by agent." />
    <meta name="author" content="paihz"/>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- vector map CSS -->
    <link href="{{ asset('super/vendors/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Data table CSS -->
    <link href="{{ asset('super/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }} " rel="stylesheet" type="text/css"/>
    <link href="{{ asset('super/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }} " rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="{{ asset('super/dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

<div class="wrapper">
    <!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block mr-20 pull-left" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
        <a href="{{ url('/agent') }}"><img class="brand-img pull-left" src="{{ asset('/assets/img/logo.png') }}" alt="brand"/></a>
    </nav>
    <!-- /Top Menu Items -->

    @include('_partials_.adminSidebar')

    @yield('content')

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="{{ asset('super/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('super/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Counter Animation JavaScript -->
<script src="{{ asset('super/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('super/vendors/bower_components/Counter-Up/jquery.counterup.min.js') }}"></script>

<!-- Data table JavaScript -->
<script src="{{ asset('super/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('super/dist/js/productorders-data.js') }}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{ asset('super/dist/js/jquery.slimscroll.js') }}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{ asset('super/dist/js/dropdown-bootstrap-extended.js') }}"></script>

<script src="{{ asset('super/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('super/dist/js/skills-counter-data.js') }}"></script>

<!-- ChartJS JavaScript -->
<script src="{{ asset('super/vendors/chart.js/Chart.min.js') }}"></script>

<script src="{{ asset('super/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

<!-- Init JavaScript -->
<script src="{{ asset('super/dist/js/init.js') }}"></script>
<script src="{{ asset('super/dist/js/dashboard3-data.js') }}"></script>
</body>
</html>
