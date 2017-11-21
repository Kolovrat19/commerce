@extends('layouts.master')

@section('content')
    <div id="wrapper">

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
                                <form method="get" class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-2 control-label">Normal</label>

                                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Help text</label>

                                        <div class="col-sm-10"><input type="text" class="form-control"> <span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                        </div>
                                    </div>
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
    @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <p>
                    {{ $error }}
                </p>
            @endforeach
        </div>
    @endif
    <form  action="{{ action('CategoryController@update', $item->id) }}"  method="POST">

        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="box">

        <label class="label">Parent</label>
        <p class="control">
        {!!
        Form::select('parent_id', $categories, $item->parent_id)
        !!}
        </p>

   <label class="label">Name</label>
   <p class="control">
   <input class="input" type="text" name="name" value="{{ old('name', $item->name) }}">
   </p>
   </div>
   <div class="form-group">

       <button type="submit" >
           Update
       </button>
   </div>

</form>

@endsection
@push('script')
<script>
    new Vue ({
        el: '#app',
        data: {
            myMethod: true,
            lade: true
        }
    });
</script>
@endpush