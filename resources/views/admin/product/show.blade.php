@push('css')
<link rel="stylesheet" href="{{ asset('css/static_custom.css') }}" />
@endpush
@extends('layouts.master')

@section('content')
        <div class="normalheader transition animated fadeIn">
            <div class="hpanel">
                <div class="panel-body">
                    <a class="small-header-action" href="#">
                        <div class="clip-header">
                            <i class="fa fa-arrow-up"></i>
                        </div>
                    </a>

                    <div id="hbreadcrumb" class="pull-right m-t-lg">
                        <ol class="hbreadcrumb breadcrumb">
                            <li><a href="index-2.html">Dashboard</a></li>
                            <li>
                                <span>Tables</span>
                            </li>
                            <li class="active">
                                <span>{{ $product->name }}</span>
                            </li>
                        </ol>
                    </div>
                    <h2 class="font-light m-b-xs">
                        {{ $product->name }}
                    </h2>
                    <small>Advanced interaction controls to any HTML table</small>
                </div>
            </div>
        </div>

        <div class="content animate-panel">

            <div class="row">
                <div class="col-md-4">
                    <div id="nestable-menu">
                        <button type="button" data-action="expand-all" class="btn btn-default btn-sm">Expand All</button>
                        <button type="button" data-action="collapse-all" class="btn btn-default btn-sm">Collapse All</button>
                        <a class="btn w-xs btn-primary"  href="{{ route('products.edit', [ $product->id ]) }}">
                            {{trans('product.edit')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hpanel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                <a class="closebox"><i class="fa fa-times"></i></a>
                            </div>
                            Basic example with Ajax (json file)
                        </div>
                        <div class="panel-body">
                            {{ $product->name }}
                            {{ $brand->name }}
                            {{ $product->attributes }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@push('script')
<script src="{{ asset('vendor/nestable/jquery.nestable.js') }}"></script>
<script>

    $(function () {

        var updateOutput = function (e) {
            var list = e.length ? e : $(e.target),
                    output = list.data('output');
            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
            } else {
                output.val('JSON browser support required for this demo.');
            }
        };
        // activate Nestable for list 1
        $('#nestable2').nestable({
            group: 1
        }).on('change', updateOutput);

//        // activate Nestable for list 2
//        $('#nestable2').nestable({
//            group: 1
//        }).on('change', updateOutput);

        // output initial serialised data
        updateOutput($('#nestable2').data('output', $('#nestable2-output')));
//        updateOutput($('#nestable2').data('output', $('#nestable2-output')));

        $('#nestable-menu').on('click', function (e) {
            var target = $(e.target),
                    action = target.data('action');
            if (action === 'expand-all') {
                $('.dd').nestable('expandAll');
            }
            if (action === 'collapse-all') {
                $('.dd').nestable('collapseAll');
            }
        });

    });

</script>
@endpush


