<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Admin Dashboard</title>
    <meta name="description" content="Only access by admin." />
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
        <a href="{{ url('/admin') }}"><img class="brand-img pull-left" src="{{ asset('/assets/img/logo.png') }}" alt="brand"/></a>
    </nav>
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
    <div class="fixed-sidebar-left">
        <ul class="nav navbar-nav side-nav nicescroll-bar">
            <li>
                <a href="{{ action('AdminController@index') }}"><i class="ti-clipboard mr-10"></i>Dashboard</a>
            </li>
            <li>
                <a href="documentation.html"><i class="icon-doc mr-10"></i>documentation</a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv1"><i class="icon-arrow-down-circle mr-10"></i>Dropdown leavel 1<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
                <ul id="dropdown_dr_lv1" class="collapse collapse-level-1">
                    <li>
                        <a href="#">Dropdown Item</a>
                    </li>
                    <li>
                        <a href="#">Dropdown Item</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv2">Dropdown leavel 2<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
                        <ul id="dropdown_dr_lv2" class="collapse collapse-level-2">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /Left Sidebar Menu -->

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg  bg-blue">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-light">Dashboard</h5>
                </div>
            </div>
            <!-- /Title -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <div class="panel panel-default card-view pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pa-0">
                                <div class="sm-data-box bg-red">
                                    <div class="row ma-0">
                                        <div class="col-xs-5 text-center pa-0 icon-wrap-left">
                                            <i class="icon-people txt-light"></i>
                                        </div>
                                        <div class="col-xs-7 text-center data-wrap-right">
                                            <h6 class="txt-light">Total User</h6>
                                            <span class="txt-light counter counter-anim">{{ $totaluser }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default card-view pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pa-0">
                                <div class="sm-data-box bg-yellow">
                                    <div class="row ma-0">
                                        <div class="col-xs-5 text-center pa-0 icon-wrap-left">
                                            <i class="icon-pie-chart txt-light"></i>
                                        </div>
                                        <div class="col-xs-7 text-center data-wrap-right">
                                            <h6 class="txt-light">Total Share</h6>
                                            <span class="txt-light counter">$4m</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="sm-progress-box">
                                    <i class="icon-emotsmile mb-15 block"></i>
                                    <span class="font-12 head-font txt-dark">Success rate<span class="pull-right">90%<span class="pl-5"><i class="fa fa-arrow-up txt-success font-12"></i></span></span></span>
                                    <div class="progress mt-10">
                                        <div class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 90%" role="progressbar"> <span class="sr-only">90% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bordered Table -->
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">project status</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Task</th>
                                                <th>Progress</th>
                                                <th>Deadline</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>CMVM Digitisation of paper records</td>
                                                <td><div class="progress progress-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-danger" style="width: 35%"></div>
                                                    </div></td>
                                                <td>Jan 18, 2017</td>

                                            </tr>
                                            <tr>
                                                <td>Data management plans</td>
                                                <td><div class="progress progress-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                                    </div></td>
                                                <td>Dec 1, 2016</td>

                                            </tr>
                                            <tr>
                                                <td>REF readiness</td>
                                                <td><div class="progress progress-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                                                    </div></td>
                                                <td>Nov 12, 2016</td>

                                            </tr>
                                            <tr>
                                                <td>Storage Strategy</td>
                                                <td><div class="progress progress-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-primary" style="width: 70%"></div>
                                                    </div></td>
                                                <td>Oct 9, 2016</td>

                                            </tr>
                                            <tr>
                                                <td>Network Infrastructure strategy</td>
                                                <td><div class="progress progress-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-primary" style="width: 85%"></div>
                                                    </div></td>
                                                <td>Sept 2, 2016</td>

                                            </tr>
                                            <tr>
                                                <td>Flexible Server hosting</td>
                                                <td><div class="progress progress-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                                    </div></td>
                                                <td>August 11, 2015</td>

                                            </tr>
                                            <tr>
                                                <td>Virtual Desktop software access</td>
                                                <td><div class="progress progress-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                                    </div></td>
                                                <td>June 11, 2016</td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Bordered Table -->
            </div>
            <!-- Row -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="panel panel-success card-view">
                        <div class="panel-heading mb-20">
                            <div class="pull-left">
                                <h6 class="panel-title txt-light pull-left">Latest users</h6>
                            </div>
                            <div class="pull-right">
                                <a class="txt-light" href="javascript:void(0);"><i class="ti-plus"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <ul class="chat-list-wrap">
                                    <li class="chat-list">
                                        <div class="chat-body">
                                            @foreach($latestUser as $latest )
                                            <a class="" href="#">
                                                <div class="chat-data">
                                                    <img class="user-img img-circle"
                                                         @if(Gravatar::exists($latest->email)) src="{{ Gravatar::get($latest->email) }}"
                                                        @else src="{{ asset('assets/img/avatar-main.jpg') }}"
                                                        @endif
                                                        alt="user"/>

                                                    <div class="user-data">
                                                        <span class="name block capitalize-font">{{ $latest->name }}</span>
                                                        <span class="time block txt-grey">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($latest->created_at))->diffForHumans() }}</span>
                                                    </div>
                                                    <div class="status online"></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                                @endforeach
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark"><i class="icon-support mr-10"></i>Project Risks</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <canvas id="chart_7" height="447"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">todo</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">

                                <!-- Todo-List -->
                                <ul class="todo-list">
                                    <li class="todo-item">
                                        <div class="checkbox checkbox-default">
                                            <input type="checkbox" id="checkbox0_1"/>
                                            <label for="checkbox0_1">Record The First Episode Of HTML Tutorial</label>
                                        </div>
                                    </li>

                                    <li class="todo-item">
                                        <div class="checkbox checkbox-pink">
                                            <input type="checkbox" id="checkbox0_2"/>
                                            <label for="checkbox0_2">Prepare The Conference Schedule</label>
                                        </div>
                                    </li>

                                    <li class="todo-item">
                                        <div class="checkbox checkbox-warning">
                                            <input type="checkbox" id="checkbox0_3" checked/>
                                            <label for="checkbox0_3">Decide The Live Discussion Time</label>
                                        </div>
                                    </li>

                                    <li class="todo-item">
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" id="checkbox0_4" checked/>
                                            <label for="checkbox0_4">Prepare For The Next Project</label>
                                        </div>
                                    </li>

                                    <li class="todo-item">
                                        <div class="checkbox checkbox-danger">
                                            <input type="checkbox" id="checkbox0_5" checked/>
                                            <label for="checkbox0_5">Finish Up AngularJs Tutorial</label>
                                        </div>
                                    </li>

                                    <li class="todo-item">
                                        <div class="checkbox checkbox-purple">
                                            <input type="checkbox" id="checkbox0_6" checked/>
                                            <label for="checkbox0_6">Finish Infinity Project</label>
                                        </div>
                                    </li>

                                    <li class="todo-item">
                                        <div class="checkbox checkbox-purple">
                                            <input type="checkbox" id="checkbox0_7" checked/>
                                            <label for="checkbox0_7">Finish Infinity Project</label>
                                        </div>
                                    </li>
                                </ul>
                                <!-- /Todo-List -->

                                <!-- New Todo -->
                                <div class="row mt-15 mb-15">
                                    <div class="col-sm-12 new-todo">
                                        <div class="input-group">
                                            <input type="email" id="example-input2-group2" name="example-input2-group2" class="form-control" placeholder="Add new task">
                                            <span class="input-group-btn">
												<button type="button" id="add_todo"  class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">add</span></button>
												</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /New Todo -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">customer support</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table display product-overview mb-30" id="support_table">
                                            <thead>
                                            <tr>
                                                <th>ticket ID</th>
                                                <th>Customer</th>
                                                <th>issue</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>#85457898</td>
                                                <td>Jens Brincker</td>
                                                <td>Kenny chart</td>
                                                <td>Oct 27</td>
                                                <td>
                                                    <span class="label label-success">done</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>#85457897</td>
                                                <td>Mark Hay</td>
                                                <td>PSD resolution</td>
                                                <td>Oct 26</td>
                                                <td>
                                                    <span class="label label-warning ">Pending</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>#85457896</td>
                                                <td>Anthony Davie</td>
                                                <td>Cinnabar</td>
                                                <td>Oct 25</td>
                                                <td>
                                                    <span class="label label-success ">done</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>#85457895</td>
                                                <td>David Perry</td>
                                                <td>Felix PSD</td>
                                                <td>Oct 25</td>
                                                <td>
                                                    <span class="label label-danger">pending</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>#85457894</td>
                                                <td>Anthony Davie</td>
                                                <td>Beryl iphone</td>
                                                <td>Oct 25</td>
                                                <td>
                                                    <span class="label label-success ">done</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>#85457893</td>
                                                <td>Alan Gilchrist</td>
                                                <td>Pogody button</td>
                                                <td>Oct 22</td>
                                                <td>
                                                    <span class="label label-warning ">Pending</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>#85457892</td>
                                                <td>Mark Hay</td>
                                                <td>Beavis sidebar</td>
                                                <td>Oct 18</td>
                                                <td>
                                                    <span class="label label-success ">done</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>#85457891</td>
                                                <td>Sue Woodger</td>
                                                <td>Pogody header</td>
                                                <td>Oct 17</td>
                                                <td>
                                                    <span class="label label-danger">pending</span>
                                                </td>
                                                <td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

    </div>
    <!-- /Main Content -->

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
