@push('css')
<link type="text/css" href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endpush
@extends('layouts.app')

@section('main')
<!-- START NAV -->
<nav class="navbar is-white topNav">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="../">
                <img src="{{ asset('images/bulma.png') }}" width="112" height="28">
            </a>
            <div class="navbar-burger burger" data-target="topNav">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="topNav" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="forum.html">
                    Home
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a class="button  is-small">
                  <span class="icon">
                    <i class="fa fa-user-plus"></i>
                  </span>
                  <span>
                    Register
                  </span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button is-small is-info is-outlined">
                  <span class="icon">
                    <i class="fa fa-user"></i>
                  </span>
                                <span>Login</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- END NAV -->
@yield('content')
@endsection
@push('script')
<script async type="text/javascript" src="{{ asset('js/bulma.js') }}"></script>
@endpush