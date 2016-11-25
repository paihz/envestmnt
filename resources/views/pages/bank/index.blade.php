@extends('layouts.user', ['title' => 'Bank Details'])
@section('css')

@endsection
@section('js')
    <script src="{{ asset('assets/lib/select2/js/select2.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".drop-down").select2();
        });
    </script>
@endsection
@section('content')
    <div class="be-content">
        <aside class="page-aside">
            <div class="be-scroller nano">
                <div class="nano-content">
                    <div class="content">
                        <h2>Aside Element</h2>
                        <p>This is the <b>aside</b> content, you can easily add content and components to this element.
                        </p>
                        <p>Add the (<code>be-aside</code>) class to your main wrapper (<code>be-wrapper</code>) element
                            for proper content spacing.</p>
                    </div>
                </div>
            </div>
        </aside>
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-sm-7 col-sm-offset-4">
                    <div class="panel panel-default panel-border-color ">
                        <div class="panel-heading panel-heading-divider">Basic Form<span class="panel-subtitle">This is the default bootstrap form layout</span>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(array('action' => 'BankController@simpanBank')) !!}
                            <div class="form-group xs-pt-10">
                                {{ Form::label('beneficiary-name', 'Beneficiary name') }}
                                {{ Form::text('beneficiary-name', Auth::user()->name , ['class' => 'form-control', 'placeholder' => 'Name of Beneficiary ']) }}
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    {{ Form::select('bank-name', $banklist, null, ['placeholder' => 'Select Your Bank...', 'class' => 'form-control select2 drop-down', 'style' => 'width: 100%;']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('bankaccnum', 'Bank Account No.') }}
                                {{ Form::text('bankaccnum', null, ['class' => 'form-control', 'placeholder' => 'Bank Account Number']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('swiftcode', 'Swift Code ') }}
                                {{ Form::text('swiftcode', null, ['class' => 'form-control', 'placeholder' => '*Optional']) }}
                            </div>
                            <div class="row xs-pt-15">
                                <div class="col-xs-12">
                                    <button class="pull-right btn btn-lg  btn-primary" type="submit">Save bank info
                                    </button>
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
