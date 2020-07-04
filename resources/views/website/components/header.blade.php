
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- css -->
    <link href="{{ asset('assets/website/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/website/css/bootstrap-responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/website/css/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/website/css/jcarousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/website/css/flexslider.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/website/css/style.css') }}" rel="stylesheet" />
    <!-- Theme skin -->
    <link href="{{ asset('assets/website/skins/default.css') }}" rel="stylesheet" />
    <!-- Fav and touch icons -->
    <link rel="icon" sizes="144x144" href="{{ asset('assets/website/ico/apple-touch-icon-144-precomposed.png') }}" />

    <!-- =======================================================
      Theme Name: Flattern
      Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
    <div id="wrapper">

        <!-- start header -->
        <header>
            <div class="container ">
                <div class="row bg-info " >


                    <div class="span4">
                        <br><br>
                        <div class="logo">
                            <a href="{{route('website.index')}}"><img src="{{asset('assets/website/img/logo.png')}}" alt="" class="logo" /></a>
                        </div>
                    </div>
                    <div class="span8">
                        <div  class="navbar navbar-static-top">
                            <div class="navigation" style="margin-top: 15px;">
                                <nav>
                                    <ul class="nav topnav">

                                        <li>
                                            <a href="#">About </a>
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
                                        <li>
                                            <a href="#">Contact </a>
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

