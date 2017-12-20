@extends('layouts.master')
@push('css')
<link rel="stylesheet" href="{{ asset('vendor/xeditable/bootstrap3-editable/css/bootstrap-editable.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/select2-3.5.2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap/select2-bootstrap.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" />
@endpush

@section('content')
    <div id="wrapper">
        @include('admin.category._partials.flash-message')
        <div class="small-header">
            <div class="hpanel">
                <div class="panel-body">
                    <div id="hbreadcrumb" class="pull-right">
                        <ol class="hbreadcrumb breadcrumb">
                            <li><a href="index-2.html">Dashboard</a></li>
                            <li>
                                <span>Forms</span>
                            </li>
                            <li class="active">
                                <span>Validation </span>
                            </li>
                        </ol>
                    </div>
                    <h2 class="font-light m-b-xs">
                        Validation
                    </h2>
                    <small>Build a form with validation functionality</small>
                </div>
            </div>
        </div>

        <div class="content">

            <div class="row">
                <div class="col-lg-6">
                    <div class="hpanel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                <a class="closebox"><i class="fa fa-times"></i></a>
                            </div>
                            jQuery Validation Plugin
                        </div>
                        <div class="panel-body">
                            <p>
                                The jQuery Validation Plugin provides drop-in validation for your existing forms, while making all kinds of customizations to fit your application really easy.
                            </p>
                            <form class="form-horizontal" method="POST"  id="form" action="{{ route('categories.store') }}">
                                {{ csrf_field() }}
                                <div class="form-group"><label>{{trans('category.parent')}}</label>
                                {!!
                                     Form::select('parent_id', $categories, null, ['class' => 'js-source-states', 'style' => 'width: 100%'])
                                !!}
                                    @if ($errors->has('node'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('node') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group"><label>{{trans('category.name')}}</label> <input type="text" placeholder="{{trans('category.name')}}" class="form-control" name="name"></div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <div class="form-group">

                                    <div class="col-sm-10">
                                        <label> <input type="checkbox" class="i-checks" name="leaf"> Last Category (leaf of the Tree) </label>
                                    </div>
                                </div>
                                <div>
                                    {{--<button class="btn btn-default" type="submit">Cancel</button>--}}
                                    <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Submit</strong></button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>



            </div>
        </div>

        <!-- Right sidebar -->
        <div id="right-sidebar" class="animated fadeInRight">

            <div class="p-m">
                <button id="sidebar-close" class="right-sidebar-toggle sidebar-button btn btn-default m-b-md"><i class="pe pe-7s-close"></i>
                </button>
                <div>
                    <span class="font-bold no-margins"> Analytics </span>
                    <br>
                    <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
                </div>
                <div class="row m-t-sm m-b-sm">
                    <div class="col-lg-6">
                        <h3 class="no-margins font-extra-bold text-success">300,102</h3>

                        <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="no-margins font-extra-bold text-success">280,200</h3>

                        <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                    </div>
                </div>
                <div class="progress m-t-xs full progress-small">
                    <div style="width: 25%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar"
                         class=" progress-bar progress-bar-success">
                        <span class="sr-only">35% Complete (success)</span>
                    </div>
                </div>
            </div>
            <div class="p-m bg-light border-bottom border-top">
                <span class="font-bold no-margins"> Social talks </span>
                <br>
                <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
                <div class="m-t-md">
                    <div class="social-talk">
                        <div class="media social-profile clearfix">
                            <a class="pull-left">
                                <img src="images/a1.jpg" alt="profile-picture">
                            </a>

                            <div class="media-body">
                                <span class="font-bold">John Novak</span>
                                <small class="text-muted">21.03.2015</small>
                                <div class="social-content small">
                                    Injected humour, or randomised words which don't look even slightly believable.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-talk">
                        <div class="media social-profile clearfix">
                            <a class="pull-left">
                                <img src="images/a3.jpg" alt="profile-picture">
                            </a>

                            <div class="media-body">
                                <span class="font-bold">Mark Smith</span>
                                <small class="text-muted">14.04.2015</small>
                                <div class="social-content">
                                    Many desktop publishing packages and web page editors.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-talk">
                        <div class="media social-profile clearfix">
                            <a class="pull-left">
                                <img src="images/a4.jpg" alt="profile-picture">
                            </a>

                            <div class="media-body">
                                <span class="font-bold">Marica Morgan</span>
                                <small class="text-muted">21.03.2015</small>

                                <div class="social-content">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-m">
                <span class="font-bold no-margins"> Sales in last week </span>
                <div class="m-t-xs">
                    <div class="row">
                        <div class="col-xs-6">
                            <small>Today</small>
                            <h4 class="m-t-xs">$170,20 <i class="fa fa-level-up text-success"></i></h4>
                        </div>
                        <div class="col-xs-6">
                            <small>Last week</small>
                            <h4 class="m-t-xs">$580,90 <i class="fa fa-level-up text-success"></i></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <small>Today</small>
                            <h4 class="m-t-xs">$620,20 <i class="fa fa-level-up text-success"></i></h4>
                        </div>
                        <div class="col-xs-6">
                            <small>Last week</small>
                            <h4 class="m-t-xs">$140,70 <i class="fa fa-level-up text-success"></i></h4>
                        </div>
                    </div>
                </div>
                <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.
                    Many desktop publishing packages and web page editors.
                </small>
            </div>

        </div>

        <!-- Footer-->
        <footer class="footer">
        <span class="pull-right">
            Example text
        </span>
            Company 2015-2020
        </footer>

    </div>


@endsection
@push('script')

<script src="{{ asset('vendor/moment/moment.js') }}"></script>
<script src="{{ asset('vendor/xeditable/bootstrap3-editable/js/bootstrap-editable.min.js') }}"></script>
<script src="{{ asset('vendor/select2-3.5.2/select2.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script>
    $(function(){
        $(".js-source-states").select2();
    });

</script>
@endpush