<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">{{ $title  or 'Dashboard'}}</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li class="@if(URL::current() == URL::to('home')) active @endif"><a href="{{ action('DashboardController@index') }}"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                        </li>
                        <li class="parent @if(URL::current() == url('profile/*')) open @endif"><a href="#"><i class="icon mdi mdi-face"></i><span>My Profile</span></a>
                            <ul class="sub-menu">
                                <li class="@if(URL::current() == action('ProfileController@index')) active @endif"><a href="{{ action('ProfileController@index') }}">Edit Profile</a>
                                </li>
                                <li class="@if(URL::current() == action('ProfileController@changePass')) active @endif"><a href="{{ action('ProfileController@changePass') }}">Change Password</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#md-footer-primary"><span class="icon mdi mdi-power"></span> Logout</a></li>
                        <li class="parent"><a href="charts.html"><i class="icon mdi mdi-chart-donut"></i><span>Charts</span></a>
                            <ul class="sub-menu">
                                <li><a href="charts-flot.html">Flot</a>
                                </li>
                                <li><a href="charts-sparkline.html">Sparklines</a>
                                </li>
                                <li><a href="charts-chartjs.html">Chart.js</a>
                                </li>
                                <li><a href="charts-morris.html">Morris.js</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Forms</span></a>
                            <ul class="sub-menu">
                                <li><a href="form-elements.html">Elements</a>
                                </li>
                                <li><a href="form-validation.html">Validation</a>
                                </li>
                                <li><a href="form-wizard.html">Wizard</a>
                                </li>
                                <li><a href="form-masks.html">Input Masks</a>
                                </li>
                                <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                                </li>
                                <li><a href="form-upload.html">Multi Upload</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-border-all"></i><span>Tables</span></a>
                            <ul class="sub-menu">
                                <li><a href="tables-general.html">General</a>
                                </li>
                                <li><a href="tables-datatables.html">Data Tables</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="pages-blank.html">Blank Page</a>
                                </li>
                                <li><a href="pages-blank-header.html">Blank Page Header</a>
                                </li>
                                <li><a href="pages-login.html">Login</a>
                                </li>
                                <li><a href="pages-login2.html">Login v2</a>
                                </li>
                                <li><a href="pages-404.html">404 Page</a>
                                </li>
                                <li><a href="pages-sign-up.html">Sign Up</a>
                                </li>
                                <li><a href="pages-forgot-password.html">Forgot Password</a>
                                </li>
                                <li><a href="pages-profile.html">Profile</a>
                                </li>
                                <li><a href="pages-pricing-tables.html">Pricing Tables</a>
                                </li>
                                <li><a href="pages-pricing-tables2.html">Pricing Tables v2</a>
                                </li>
                                <li><a href="pages-timeline.html"><span class="label label-primary pull-right">New</span>Timeline</a>
                                </li>
                                <li><a href="pages-timeline2.html"><span class="label label-primary pull-right">New</span>Timeline v2</a>
                                </li>
                                <li><a href="pages-invoice.html"><span class="label label-primary pull-right">New</span>Invoice</a>
                                </li>
                                <li><a href="pages-calendar.html">Calendar</a>
                                </li>
                                <li><a href="pages-gallery.html">Gallery</a>
                                </li>
                            </ul>
                        </li>
                        <li class="divider">Features</li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>Email</span></a>
                            <ul class="sub-menu">
                                <li><a href="email-inbox.html">Inbox</a>
                                </li>
                                <li><a href="email-read.html">Email Detail</a>
                                </li>
                                <li><a href="email-compose.html">Email Compose</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Layouts</span></a>
                            <ul class="sub-menu">
                                <li><a href="layouts-primary-header.html">Primary Header</a>
                                </li>
                                <li><a href="layouts-success-header.html">Success Header</a>
                                </li>
                                <li><a href="layouts-warning-header.html">Warning Header</a>
                                </li>
                                <li><a href="layouts-danger-header.html">Danger Header</a>
                                </li>
                                <li><a href="layouts-nosidebar-left.html">Without Left Sidebar</a>
                                </li>
                                <li><a href="layouts-nosidebar-right.html">Without Right Sidebar</a>
                                </li>
                                <li><a href="layouts-nosidebars.html">Without Both Sidebars</a>
                                </li>
                                <li><a href="layouts-fixed-sidebar.html">Fixed Left Sidebar</a>
                                </li>
                                <li><a href="pages-blank-aside.html">Page Aside</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-pin"></i><span>Maps</span></a>
                            <ul class="sub-menu">
                                <li><a href="maps-google.html">Google Maps</a>
                                </li>
                                <li><a href="maps-vector.html">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="md-footer-primary" tabindex="-1" role="dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <div class="text-warning"><span class="modal-main-icon mdi mdi-power"></span></div>

                    <h4>Are you sure want to log out from dashboard?</h4>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
                <a class="btn btn-primary"" href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                     Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</div>
