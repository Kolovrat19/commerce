@extends('layouts.master')

@section('content')

        @include('admin.category._partials.flash-message')
        <div class="small-header transition animated fadeIn">
            <div class="hpanel">
                <div class="panel-body">
                    <div id="hbreadcrumb" class="pull-right">
                        <ol class="hbreadcrumb breadcrumb">
                            <li><a href="index-2.html">Dashboard</a></li>
                            <li>
                                <span>Forms</span>
                            </li>
                            <li class="active">
                                <span>Edit Category </span>
                            </li>
                        </ol>
                    </div>
                    <h2 class="font-light m-b-xs">
                        Edit Category
                    </h2>
                    <small>Examples of various form controls.</small>
                </div>
            </div>
        </div>

        <div class="content animate-panel">

            <div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hpanel">
                            <div class="panel-body">
                                <h3>{{$item->name}}</h3>
                                <p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>
                            </div>
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
                                Edit {{ $item->name }}
                            </div>
                            <div class="panel-body">
                                @if($errors->any())
                                    <div>
                                        @foreach($errors->all() as $error)
                                            <p>
                                                {{ $error }}
                                            </p>
                                        @endforeach
                                    </div>
                                @endif
                                <form  action="{{ action('CategoryController@update', $item->id) }}"  method="POST"  class="form-horizontal">

                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}

                                    <div class="form-group"><label class="col-sm-2 control-label">Parent Category</label>
                                        <div class="col-sm-10">
                                            @if(!$item->is_leaf)
                                                {!! Form::select('parent_id', $categories, $item->parent_id) !!}
                                                @else
                                                Category is LEAF
                                                <input class="form-control" type="hidden" name="parent_id" value="{{ $item->parent_id }}">
                                                @endif

                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group"><label class="col-sm-2 control-label">Name Category</label>
                                        <div class="col-sm-10">
                                          <input class="form-control" type="text" name="name" value="{{ old('name', $item->name) }}">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    @if($item->is_leaf)
                                    <div class="form-group"><label class="col-sm-2 control-label">Attributes</label>
                                        <div class="col-sm-10">
                                            {{--{{dd($attributes)}}--}}
                                            @if($attributes)
                                            <category-attributes  :attributes="{{ $attributes }}">
                                            </category-attributes>
                                                @else
                                                <category-attributes :attributes=[]></category-attributes>
                                            @endif

                                        </div>
                                    </div>
                                    @endif
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button class="btn btn-default" type="submit">Cancel</button>
                                            <button class="btn btn-primary" type="submit">Save changes</button>
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
