@extends('layouts.user', ['title' => 'User Profiles'])
@section('css')

@endsection
@section('js')

@endsection

@section('content')
    <div class="be-content">
        <div class="main-content container-fluid">
            <div class="user-profile">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                            <div id="spark1" class="chart sparkline"></div>
                            <div class="data-info">
                                <div class="desc">New Users</div>
                                <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span
                                            data-toggle="counter" data-end="113" class="number">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                            <div id="spark2" class="chart sparkline"></div>
                            <div class="data-info">
                                <div class="desc">Monthly Sales</div>
                                <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span
                                            data-toggle="counter" data-end="80" data-suffix="%" class="number">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                            <div id="spark3" class="chart sparkline"></div>
                            <div class="data-info">
                                <div class="desc">Impressions</div>
                                <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span
                                            data-toggle="counter" data-end="532" class="number">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                            <div id="spark4" class="chart sparkline"></div>
                            <div class="data-info">
                                <div class="desc">Downloads</div>
                                <div class="value"><span
                                            class="indicator indicator-negative mdi mdi-chevron-down"></span><span
                                            data-toggle="counter" data-end="113" class="number">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="user-display">
                            <div class="user-display-bg"><img src="{{ asset('assets/img/user-profile-display.png') }}"
                                                              alt="Profile Background"></div>
                            <div class="user-display-bottom">
                                <div class="user-display-avatar"><img
                                            @if(Gravatar::exists(Auth::user()->email)) src="{{ Gravatar::get(Auth::user()->email) }}"
                                            @else src="{{ asset('assets/img/avatar-main.jpg') }}"
                                            @endif alt="Avatar">
                                </div>
                                <div class="user-display-info">
                                    <div class="name"><span class="mdi mdi-account"></span> {{ Auth::user()->name }}
                                    </div>
                                    <div class="nick">{{ $age }} years old</div>
                                </div>

                            </div>
                        </div>
                        <div class="user-info-list panel panel-default">
                            <div class="panel-body">
                                <table class="no-border no-strip skills">
                                    <tbody class="no-border-x no-border-y">
                                    <tr>
                                        <td class="icon"><span class="mdi mdi-account-box-mail"></span></td>
                                        <td class="item">Email<span class="icon s7-portfolio"></span></td>
                                        <td>{{ Auth::user()->email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="icon"><span class="mdi mdi-cake"></span></td>
                                        <td class="item">Birthday<span class="icon s7-gift"></span></td>
                                        <td>{{ date_format(date_create(Auth::user()->birthday),"d M Y") }}</td>
                                    </tr>
                                    <tr>
                                        <td class="icon"><span class="mdi mdi-smartphone-android"></span></td>
                                        <td class="item">Mobile<span class="icon s7-phone"></span></td>
                                        <td>{{ $mobile or 'Not set' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="icon"><span class="mdi mdi-globe-alt"></span></td>
                                        <td class="item">Location<span class="icon s7-map-marker"></span></td>
                                        <td>{{ $location or 'Not set' }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <a href="#" class="btn btn-info">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="widget widget-fullwidth widget-small">
                            <div class="widget-chart-container">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th style="width:37%;">User</th>
                                        <th style="width:36%;">Commit</th>
                                        <th>Date</th>
                                        <th class="actions"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="user-avatar"><img src="assets/img/avatar6.png" alt="Avatar">Penelope
                                            Thornton
                                        </td>
                                        <td>Initial commit</td>
                                        <td>Aug 6, 2015</td>
                                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="user-avatar"><img src="assets/img/avatar4.png" alt="Avatar">Benji
                                            Harper
                                        </td>
                                        <td>Main structure markup</td>
                                        <td>Jul 28, 2015</td>
                                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="user-avatar"><img src="assets/img/avatar5.png" alt="Avatar">Justine
                                            Myranda
                                        </td>
                                        <td>Left sidebar adjusments</td>
                                        <td>Jul 15, 2015</td>
                                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="user-avatar"><img src="assets/img/avatar3.png" alt="Avatar">Sherwood
                                            Clifford
                                        </td>
                                        <td>Topbar dropdown style</td>
                                        <td>Jun 30, 2015</td>
                                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="user-avatar"><img src="assets/img/avatar.png" alt="Avatar">Kristopher
                                            Donny
                                        </td>
                                        <td>Left sidebar adjusments</td>
                                        <td>Jul 15, 2015</td>
                                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="user-avatar"><img src="assets/img/avatar2.png" alt="Avatar">Adeline
                                            Shepherd
                                        </td>
                                        <td>Topbar dropdown style</td>
                                        <td>Jun 30, 2015</td>
                                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-delete"></i></a>
                                        </td>
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
    </div>
    </div>
@endsection
