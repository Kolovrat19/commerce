@push('css')

@endpush
@extends('layouts.app')

@section('main')
    <body>
    <div id="app">
        <!-- Header -->
        <div id="header">
            <div class="color-line">
            </div>
            <div id="logo" class="light-version">
        <span>
            Homer Theme
        </span>
            </div>
            <nav role="navigation">
                <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
                <div class="small-logo">
                    <span class="text-primary">HOMER APP</span>
                </div>
                <form role="search" class="navbar-form-custom" method="post" action="#">
                    <div class="form-group">
                        <input type="text" placeholder="Search something special" class="form-control" name="search">
                    </div>
                </form>
                <div class="mobile-menu">
                    <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                        <i class="fa fa-chevron-down"></i>
                    </button>
                    <div class="collapse mobile-navbar" id="mobile-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a class="" href="login.html">Login</a>
                            </li>
                            <li>
                                <a class="" href="login.html">Logout</a>
                            </li>
                            <li>
                                <a class="" href="profile.html">Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-right">
                    <ul class="nav navbar-nav no-borders">
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                <i class="pe-7s-speaker"></i>
                            </a>
                            <ul class="dropdown-menu hdropdown notification animated flipInX">
                                <li>
                                    <a>
                                        <span class="label label-success">NEW</span> It is a long established.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="label label-warning">WAR</span> There are many variations.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="label label-danger">ERR</span> Contrary to popular belief.
                                    </a>
                                </li>
                                <li class="summary"><a href="#">See all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                <i class="pe-7s-keypad"></i>
                            </a>

                            <div class="dropdown-menu hdropdown bigmenu animated flipInX">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="projects.html">
                                                <i class="pe pe-7s-portfolio text-info"></i>
                                                <h5>Projects</h5>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="mailbox.html">
                                                <i class="pe pe-7s-mail text-warning"></i>
                                                <h5>Email</h5>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="contacts.html">
                                                <i class="pe pe-7s-users text-success"></i>
                                                <h5>Contacts</h5>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="forum.html">
                                                <i class="pe pe-7s-comment text-info"></i>
                                                <h5>Forum</h5>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="analytics.html">
                                                <i class="pe pe-7s-graph1 text-danger"></i>
                                                <h5>Analytics</h5>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="file_manager.html">
                                                <i class="pe pe-7s-box1 text-success"></i>
                                                <h5>Files</h5>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown">
                                <i class="pe-7s-mail"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu hdropdown animated flipInX">
                                <div class="title">
                                    You have 4 new messages
                                </div>
                                <li>
                                    <a>
                                        It is a long established.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        There are many variations.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Lorem Ipsum is simply dummy.
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        Contrary to popular belief.
                                    </a>
                                </li>
                                <li class="summary"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" id="sidebar" class="right-sidebar-toggle">
                                <i class="pe-7s-upload pe-7s-news-paper"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="login.html">
                                <i class="pe-7s-upload pe-rotate-90"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Navigation -->
        <aside id="menu">
            <div id="navigation">
                <div class="profile-picture">
                    <a href="index-2.html">
                        <img src="{{ asset('images/profile.jpg') }}" class="img-circle m-b" alt="logo">
                    </a>

                    <div class="stats-label text-color">
                        <span class="font-extra-bold font-uppercase">Robert Razer</span>

                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                <small class="text-muted">Founder of App <b class="caret"></b></small>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="analytics.html">Analytics</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>


                        <div id="sparkline1" class="small-chart m-t-sm"></div>
                        <div>
                            <h4 class="font-extra-bold m-b-xs">
                                $260 104,200
                            </h4>
                            <small class="text-muted">Your income from the last year in sales product X.</small>
                        </div>
                    </div>
                </div>

                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{ route('admin.dashboard') }}"> <span class="nav-label">{{trans('aside.dashboard')}}</span> <span class="label label-success pull-right">v.1</span> </a>
                    </li>
                    <li>
                        <a href="analytics.html"> <span class="nav-label">{{trans('aside.showcase')}}</span><span class="label label-warning pull-right">OPEN</span> </a>
                    </li>
                    <li class="active">
                        <a href="#"><span class="nav-label">{{trans('aside.catalog')}}</span><span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('categories.index') }}">{{trans('aside.categories')}}</a></li>
                            <li><a href="{{ route('categories.index') }}">{{trans('aside.attributes')}}</a></li>
                            <li><a href="{{ route('products.index') }}">{{trans('aside.products')}}</a></li>
                            <li><a href="{{ route('brands.index') }}">{{trans('aside.brands')}}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="grid_system.html"> <span class="nav-label">Grid system</span></a>
                    </li>
                    <li>
                        <a href="landing_page.html"> <span class="nav-label">Landing page</span></a>
                    </li>
                    <li>
                        <a href="http://104.236.248.183/dashboard"> <span class="nav-label">Meteor version</span></a>
                    </li>
                </ul>
            </div>
        </aside>
        <div id="wrapper">
        @yield('content')
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
                                    <img src="{{ asset('images/a1.jpg') }}" alt="profile-picture">
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
                                    <img src="{{ asset('images/a2.jpg') }}" alt="profile-picture">
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
                                    <img src="{{ asset('images/a3.jpg') }}" alt="profile-picture">
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

    </div>
@endsection
@push('script')

@endpush