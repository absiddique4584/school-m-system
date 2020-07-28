
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @foreach($app_name as $app)
    <title>
            {{$app->app_name}}
    </title>
    @endforeach
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- css -->
    <link href="{{ asset('assets/website/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/website/css/bootstrap-responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/website/css/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/website/css/jcarousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/website/css/flexslider.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/website/css/school.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/website/css/style.css') }}" rel="stylesheet" />
    <!-- Theme skin -->
    <link href="{{ asset('assets/website/skins/default.css') }}" rel="stylesheet" />
    <!-- Fav and touch icons -->
    @foreach($fab_logo as $fab)
    <link rel="icon" sizes="144x144" href="{{asset('uploads/settings-logo/'.$fab->logo)}}" />
    @endforeach

</head>

<body>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="container ">
                <div class="row bg-info " >
                    <div class="span4">
                        <br><br>
                        @foreach($settings as $setting)
                        <div class="" style="width: 90px; height: 27px;">
                            <a href="{{route('website.index')}}"><img src="{{asset('uploads/settings-logo/'.$setting->logo)}}" alt="" class="logo" /></a>
                        </div>
                        @endforeach
                    </div>
                    <div class="span8">
                        <div  class="navbar navbar-static-top" style="margin-top: 24px;">
                            <div class="navigation" >
                                <nav>
                                    <ul class="nav topnav">

                                        <li>
                                            <a href="{{ route('website.index') }}">Home</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('admission.manage') }}">Admission </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Library <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Librarian</a></li>
                                                <li><a href="#">Teachers</a></li>
                                                <li><a href="#">Students</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Activity <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('admin.home') }}">Admin</a></li>
                                                <li><a href="#">Teachers</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Blog </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Contact <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                            <!-- end navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </header>

