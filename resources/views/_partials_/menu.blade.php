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
                                <li class="@if(URL::current() == action('BankController@index')) active @endif"><a href="{{ action('BankController@index') }}">Bank Detail</a>
                                </li>
                                <li class="@if(URL::current() == action('ProfileController@changePass')) active @endif"><a href="{{ action('ProfileController@changePass') }}">Change Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent "><a href="javascript:void(0)"><i class="icon mdi mdi-check-all"></i><span>Investment</span></a>
                            <ul class="sub-menu">
                                <li class=""><a href="{{ action('ProfileController@index') }}">Join share</a>
                                </li>
                                <li class=""><a href="{{ action('ProfileController@changePass') }}">Withdrawal</a>
                                </li>
                            </ul>
                        </li>
                        <li class="@if(URL::current() == url('history')) active @endif"><a href="javascript:void(0)"><i class="icon mdi mdi-book"></i><span>History</span></a></li>
                        <li class=""><a href="javascript:void(0)"><i class="icon mdi mdi-accounts-add"></i><span>Referral</span></a>
                        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#md-footer-primary"><span class="icon mdi mdi-power"></span> Logout</a></li>
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
