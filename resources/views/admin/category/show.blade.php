@push('css')
<link rel="stylesheet" href="{{ asset('css/static_custom.css') }}" />
@endpush
@extends('layouts.master')

@section('content')
        @include('admin.category._partials.flash-message')
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
                    {!! ($category->is_leaf) ? '<small  style="color:red">Category is LEAF!!!!</small>' : '<small>This Category can have subcategory</small>'!!}
                </div>
            </div>
        </div>

        <div class="content animate-panel">

            <div class="row">
                <div class="col-md-4">
                    <div id="nestable-menu">

                        @if($category->is_leaf)
                            <a class="btn btn-primary"  href="{!! route('products.create', ['category_id' => $category->id, 'category_name' => $category->name, 'category_attributes' => $category->category_attributes ]) !!}">
                                {{trans('product.create')}}
                            </a>
                            @else
                            <button type="button" data-action="expand-all" class="btn btn-default btn-sm">Expand All</button>
                            <button type="button" data-action="collapse-all" class="btn btn-default btn-sm">Collapse All</button>
                            <a class="btn btn-primary"  href="{!! route('categories.create') !!}">
                                {{trans('category.create')}}
                            </a>
                        @endif
                            <a class="btn btn-primary"  href="{!! route('categories.edit', $category->id) !!}">
                                {{trans('category.edit')}}
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
            @if($category->is_leaf)
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
                                <table cellpadding="1" cellspacing="1" class="table">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if ($attributes)
                                        @foreach($attributes as $key => $value)
                                            <tr>
                                                <td>{{ $key }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="panel-footer">
                            Total subproducts -
                        </div>
                    </div>
                </div>
            </div>
                @else
                <div class="row">
                    <div class="col-lg-12">
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
                </div>
            @endif
        </div>

@endsection
