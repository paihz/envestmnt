@extends('layouts.user', ['title' => ' Withdraw balance '])
@section('css')

@endsection
@section('js')

@endsection

@section('content')
    <div class="be-content">
        <div class="main-content container-fluid">
            <div class="row">
                @if(! count($bankCheck) > 0)
                    <div class="col-md-12">
                        <div class="panel panel-border-color panel-border-color-danger">
                            <div class="panel-heading">No banks detail found !</div>
                            <div class="panel-body">
                                <h3> To proceed your withdrawal process, please add your bank details. </h3>
                                <a  href="{{ url('profile/bank-detail') }}" class="xs-mt-20 xs-mb-20 btn btn-space btn-danger btn-xl">Add bank details</a>
                            </div>
                        </div>
                    </div>
                 @elseif(! count($semuaSenarai) > 0)
                    <div class="col-md-12">
                        <div class="panel panel-border-color panel-border-color-primary">
                            <div class="panel-heading">No investment record found !</div>
                            <div class="panel-body">
                                <h3> The goal of investing is make more money. Investing now, and earn profit.</h3>
                                <a  href="{{ url('view/deposit') }}" class="xs-mt-20 xs-mb-20 btn btn-space btn-primary btn-xl">Make investment</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-sm-12">
                        <div class="panel panel-default panel-table">
                            <div class="panel-heading">Listing
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th style="width:20%;">Package</th>
                                        <th style="width:17%;">Your Profit</th>
                                        <th style="width:15%;">Total invest</th>
                                        <th style="width:10%;">Deposit on</th>
                                        <th style="width:10%;">Effective Date</th>
                                        <th style="width:10%;">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($semuaSenarai as $senarai)
                                        <tr>
                                            <td class="user-avatar cell-detail user-info">
                                                <button class="btn btn-rounded btn-space btn-default">
                                                    Package {{ $senarai->package }}</button>
                                            </td>
                                            <td class="cell-detail">RM {{ $senarai->monthly_profit }}</td>
                                            <td class="milestone">RM {{ $senarai->balance }}</td>
                                            <td class="cell-detail">{{ date('j M  Y', strtotime($senarai->created_at)) }}</td>
                                            <td class="cell-detail">
                                                @if($senarai->package == 3)
                                                    <?php $date3 = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $senarai->created_at)->addMonths(19)?>

                                                    {{  date('j M  Y', strtotime($date3))  }}
                                                @elseif($senarai->package == 2)
                                                    <?php $date2 = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $senarai->created_at)->addMonths(13)?>
                                                    {{  date('j M  Y', strtotime($date2))  }}
                                                @else
                                                    <?php $date1 = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $senarai->created_at)->addMonths(7)?>
                                                    {{  date('j M  Y', strtotime($date1))  }}
                                                @endif
                                            </td>
                                            <td class="text-right">
                                                @if($senarai->package == 3)
                                                    <?php
                                                    $validDate = strtotime(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $senarai->created_at)->addMonths(19)); // pakej 3
                                                    $nowTime = strtotime(date("Y-m-d H:i:s"));
                                                    ?>
                                                    @if($validDate <= $nowTime )
                                                        <a class="btn btn-space btn-success" href="">Send to wallet</a>
                                                    @else
                                                        <a disabled class="btn btn-space btn-danger">Not valid to
                                                            process</a>
                                                    @endif
                                                @elseif($senarai->package == 2)
                                                    <?php
                                                    $validDate = strtotime(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $senarai->created_at)->addMonths(13)); // pakej 2
                                                    $nowTime = strtotime(date("2018-02-11 H:i:s"));
                                                    ?>
                                                    @if($validDate <= $nowTime )
                                                        <a href="withdrawal-all/{{ $senarai->id }}" class="btn btn-space btn-success">Send to wallet</a>
                                                    @else
                                                        <a disabled class="btn btn-space btn-danger">Not valid to
                                                            process</a>
                                                    @endif
                                                @else
                                                    <?php
                                                    $validDate = strtotime(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $senarai->created_at)->addMonths(7)); // pakej 1
                                                    $nowTime = strtotime(date("Y-m-d H:i:s"));
                                                    ?>
                                                    @if($validDate <= $nowTime )
                                                        <a class="btn btn-space btn-success">Send to wallet</a>
                                                    @else
                                                        <a disabled class="btn btn-space btn-danger">Not valid to
                                                            process</a>
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
