<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">{{ $title  or 'Dashboard'}}</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li class="@if(URL::current() == URL::to('home')) active @endif"><a href="{{ action('DashboardController@index') }}"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                        </li>
                        <li class="parent @if(URL::current() == url('profile/*')) open @endif"><a href="#"><i class="icon mdi mdi-account-o"></i> <span> My Profile</span></a>
                            <ul class="sub-menu">
                                <li class="@if(URL::current() == action('ProfileController@index')) active @endif"><a href="{{ action('ProfileController@index') }}">Edit Profile</a>
                                </li>
                                <li class="@if(URL::current() == action('ProfileController@changePass')) active @endif"><a href="{{ action('ProfileController@changePass') }}">Change Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent "><a href="#"><i class="icon mdi mdi-check-all"></i><span>Investment</span></a>
                            <ul class="sub-menu">
                                <li class=""><a href="{{ action('ProfileController@index') }}">Join share</a>
                                </li>
                                <li class=""><a href="{{ action('ProfileController@changePass') }}">Withdrawal</a>
                                </li>
                            </ul>
                        </li>
                        <li class="@if(URL::current() == url('history')) active @endif"><a href="#"><i class="icon mdi mdi-book"></i><span>History</span></a></li>
                        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#md-footer-primary"><span class="icon mdi mdi-power"></span> Logout</a></li>
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
