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
                                <span>Interface</span>
                            </li>
                            <li class="active">
                                <span>Nestable list</span>
                            </li>
                        </ol>
                    </div>
                    <h2 class="font-light m-b-xs">
                        Nestable list
                    </h2>
                    <small>Nestable - Drag & drop hierarchical list.</small>
                </div>
            </div>
        </div>
        <div class="content animate-panel">

            <div class="row">
                <div class="col-md-4">
                    <div id="nestable-menu">
                        <button type="button" data-action="expand-all" class="btn btn-default btn-sm">Expand All</button>
                        <button type="button" data-action="collapse-all" class="btn btn-default btn-sm">Collapse All</button>
                        <a class="btn btn-primary"  href="{!! route('products.create') !!}">
                            {{trans('product.create')}}
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="hpanel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                <a class="closebox"><i class="fa fa-times"></i></a>
                            </div>
                            Nestable custom theme list
                        </div>
                        <div class="panel-body">

                            <p class="m-b-lg">
                                Each list you can customize by standard css styles. Each element is responsive so you can add to it any other element to improve functionality of list.
                            </p>
                            <table id="example2" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if ($products->count())

                                        @foreach ($products as $product)
                                            <tr>
                                                <td><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></td>

                                            </tr>
                                        @endforeach
                                @else
                                    <p class="text-center">
                                        {{ _('This category has no pages yet') }}
                                    </p>
                                @endif
                                </tbody>
                            </table>

                            <div class="m-t-md">
                                <h5>Serialised Output</h5>
                            </div>
                            <textarea id="nestable2-output" class="form-control"></textarea>

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

