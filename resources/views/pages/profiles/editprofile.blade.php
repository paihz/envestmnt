@extends('layouts.user', ['title' => 'Edit Profiles'])

@section('content')
    <div class="be-content">
        <div class="main-content container-fluid">
            <!--Basic Elements-->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-body">
                            <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-6">
                                        <input disabled type="email" class="form-control" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Gender</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Phone</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Location</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-3">
                                     <button class='btn btn-lg btn-facebook pull-right'  submit">Update</button>
                                        </div>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
