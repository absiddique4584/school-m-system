<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    @foreach($name as $na)
    <title>@yield('title'){!! $na->app_name !!}</title>
    @endforeach

    <link href="{{asset('assets/admin/stylesheets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/admin.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/admin/btheme/css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/admin/stylesheets/css/bootstrap-toggle.min.css')}}" rel="stylesheet">

    @foreach($fab_logo as $fab)
    <link rel="icon" sizes="144x144" href="{{asset('uploads/settings-logo/'.$fab->logo)}}" />
    @endforeach
    <style>
        .active{
            color: #c81dbe;
            height: 35px;
            width: auto;
            display: block;
            background-color: #FF8E8F;
        }
        ul li{
            list-style: none;
        }
    </style>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        @foreach($name as $na)
        <a class="navbar-brand" href="#">
            <strong>
                {!! $na->app_name !!}
            </strong>
        </a>
        @endforeach
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
            <i class="fa fa-bars"></i></button>

        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>

        <!-- Navbar-->
        <div>
                <a style="color: #7BFFC1;"  id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->is_admin === 1 ? 'Admin':'User' }}
                </a>
            <div class="clearfix"></div>
                    <a style="margin-left: 4px; margin-bottom: 5px; color: #FF8E8F;" href="{{ route('logout') }}" data-toggle="tooltip" data-placement="left" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout  <i
                            class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
        </div>

    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <ul>
                            <li><a  style="color: #7BFFC1; " class="nav-link {{ request()->is('dashboard') ? 'active':'' }}" href="{{route('admin.home')}}"> <div class="sb-nav-link-icon"><i style="color: #f1f1f1;" class="fa fa-square-o"></i></div> DASHBOARD</a></li>
                            <li> <a  style="color: #7BFFC1; " class="nav-link  {{ request()->is('slider/manage','slider/add','slider/edit/*') ? 'active':'' }}" href="{{route('slider.manage')}}"> <div class="sb-nav-link-icon"><i style="color: #f1f1f1;" class="fa fa-globe"></i></div> SLIDER</a></li>
                            <li> <a  style="color: #7BFFC1; " class="nav-link  {{ request()->is('permission/manage','permission/edit/*') ? 'active':'' }}" href="{{route('permission.manage')}}"> <div class="sb-nav-link-icon"><i style="color: #f1f1f1;"  class="fa fa-anchor"></i></div> PERMISSION</a></li>
                            <li> <a  style="color: #7BFFC1; " class="nav-link  {{ request()->is('institution/manage','institution/edit/*') ? 'active':'' }}" href="{{route('institution.manage')}}"> <div class="sb-nav-link-icon"><i style="color: #f1f1f1;"  class="fa fa-home"></i></div>INSTITUTION</a></li>
                            <li> <a  style="color: #7BFFC1; " class="nav-link
                            {{ request()->is('admit/manage','admit/edit/*','admit/add','admission/one','admission/two') ? 'active':'' }}"
                            href="{{route('admit.manage')}}"> <div class="sb-nav-link-icon"><i style="color: #f1f1f1;"  class="fa fa-anchor"></i></div>ADMISSION</a></li>
                            <li> <a  style="color: #7BFFC1; " class="nav-link  {{ request()->is('settings/manage','settings/edit/*','settings/add') ? 'active':'' }}" href="{{route('settings.manage')}}"> <div class="sb-nav-link-icon"><i style="color: #f1f1f1;"  class="fa fa-key"></i></div>SETTINGS</a></li>
                        </ul>
                        </div>

                    </div>

            </nav>
        </div>


