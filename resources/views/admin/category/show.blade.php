@push('css')
<link rel="stylesheet" href="{{ asset('css/static_custom.css') }}" />
@endpush
@extends('layouts.master')

@section('content')
    <!-- Main Wrapper -->
    <div id="wrapper">

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
                                <span>{{ $category->name }}</span>
                            </li>
                        </ol>
                    </div>
                    <h2 class="font-light m-b-xs">
                        {{ $category->name }}
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

                        <a class="btn btn-default"  href="{!! route('products.create', ['category_id' => $category->id ]) !!}">
                            {{trans('product.create')}}
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
                            <div class="dd" id="nestable2">
                                {{--{{dd($subcategories)}}--}}
                                    @if ($subcategories->count())
                                        {!! $tree !!}
                                    @else
                                        <p class="text-center">
                                            {{ trans('category.no_subcategories') }}
                                        </p>
                                    @endif
                            </div>

                        </div>
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
                            This is a basic table design
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table cellpadding="1" cellspacing="1" class="table">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Street Address</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if ($counter = $products->count())
                                        @foreach ($products as $product)
                                            <tr>
                                                <td><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></td>
                                                <td>{{ $product->created_at }}</td>
                                                <td>{{ $product->updated_at }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <p class="text-center">
                                            {{ _('This category has no pages yet') }}
                                        </p>
                                    @endif

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="panel-footer">
                            Total products - {{ $counter }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hpanel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                <a class="closebox"><i class="fa fa-times"></i></a>
                            </div>
                            {{ trans('category.pages_on_subcategories') }}
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table cellpadding="1" cellspacing="1" class="table table-condensed">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Street</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if ($subcounter = $subproducts->count())
                                            @foreach ($subproducts as $subproduct)
                                                <tr>
                                                    <td><a href="{{ route('products.show', $subproduct->id) }}">{{ $subproduct->name }}</a></td>
                                                    <td>{{ $subproduct->created_at }}</td>
                                                    <td>{{ $subproduct->updated_at }}</td>
                                                </tr>
                                            @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="panel-footer">
                            Total subproducts - {{ $subcounter }}
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


