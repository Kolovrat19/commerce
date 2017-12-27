@extends('layouts.master')
@push('css')
{{--<link rel="stylesheet" href="{{ asset('vendor/xeditable/bootstrap3-editable/css/bootstrap-editable.css') }}" />--}}
{{--<link rel="stylesheet" href="{{ asset('vendor/select2-3.5.2/select2.css') }}" />--}}
{{--<link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap/select2-bootstrap.css') }}" />--}}
{{--<link rel="stylesheet" href="{{ asset('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" />--}}
{{--<link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.min.css') }}" />--}}
{{--<link rel="stylesheet" href="{{ asset('vendor/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" />--}}
@endpush
@section('content')

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
                            <form class="form-horizontal" method="POST"  id="form" action="{{ route('products.store') }}">
                                {{ csrf_field() }}
                                <div class="form-group"><label>{{trans('category.parent')}}</label>
                                    {{ Input::get('category_name')  }}
                                    <input class="form-control" type="hidden" name="category_id" value="{{ Input::get('category_id') }}">
                                    {{--{!!--}}
                                         {{--Form::select('parent_id', $categories, Input::get('category_id'), ['class' => 'js-source-states', 'style' => 'width: 100%'])--}}
                                    {{--!!}--}}
                                </div>

                                <div class="form-group"><label>{{trans('product.name')}}</label>
                                    <input type="text" placeholder="{{trans('product.name')}}" class="form-control" name="name"></div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                {{--{{dd($brands)}}--}}
                                <div class="form-group"><label>{{trans('product.brand')}}</label>
                                    {!!
                                        Form::select('brand_id', $brands, null, ['class' => 'js-source-states', 'style' => 'width: 100%'])
                                    !!}
                                </div>
                                @if ($errors->has('brand'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brand') }}</strong>
                                    </span>
                                @endif
                                <product-attributes-form :attributes="{{ Input::get('category_attributes') }}">
                                </product-attributes-form>

                                <div>
                                    <button class="btn btn-default" type="submit">Cancel</button>
                                    <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Submit</strong></button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>



            </div>
        </div>

@endsection
@push('script')

{{--<script src="{{ asset('vendor/moment/moment.js') }}"></script>--}}
{{--<script src="{{ asset('vendor/xeditable/bootstrap3-editable/js/bootstrap-editable.min.js') }}"></script>--}}
{{--<script src="{{ asset('vendor/select2-3.5.2/select2.min.js') }}"></script>--}}
{{--<script src="{{ asset('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>--}}
{{--<script src="{{ asset('vendor/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js') }}"></script>--}}
{{--<script>--}}
{{--//    $(function(){--}}
{{--//        $(".js-source-states").select2();--}}
{{--//    });--}}

{{--</script>--}}
@endpush