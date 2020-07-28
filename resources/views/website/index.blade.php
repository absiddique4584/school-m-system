
@extends('website.components.layouts')

    @section('content')

        <!----------------------------------------->
        <section id="featured">
            <div id="nivo-slider">
                <div class="nivo-slider" >
                    @foreach($sliders as $slider)
                    <img style="height: 400px; width: 100%;" src="{{asset('uploads/slider/'.$slider->image)}}" alt=""  />
                    @endforeach
                </div>
            </div>
        </section>
        <br>
        <section>
            <div class="school-body">
                @foreach($institutions as $institution)
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="school-name"><strong>{{$institution->school_name}}</strong></h3>
                        <h3 class="school-reg">Registration no : {{$institution->school_reg}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="data-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pull-right data-right">
                        <h4>Students List</h4>
                        <a class="btn btn-large btn-theme btn-rounded" href="{{ route('studentlist.manage') }}">Click Here</a>
                    </div>
                    <div class="col-md-6 pull-left data-left">
                        <h4>For Admission</h4>
                        <a class="btn btn-large btn-theme btn-rounded" href="{{ route('admission.manage') }}">Click Here</a>
                    </div>
                </div>
            </div>

        </section>

        <section id="content">
            <se class="container">
                <div class="row">
                    <div class="span12">
                        <div class="row">

                            <div class="span3">
                                <div class="box aligncenter">
                                    <div class="aligncenter icon">
                                        <i class="icon-briefcase icon-circled icon-64 active"></i>
                                    </div>
                                    <div class="text">
                                        <h6>Corporate business</h6>
                                        <p>
                                            Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                                        </p>
                                        <a href="#">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="box aligncenter">
                                    <div class="aligncenter icon">
                                        <i class="icon-desktop icon-circled icon-64 active"></i>
                                    </div>
                                    <div class="text">
                                        <h6>Responsive theme</h6>
                                        <p>
                                            Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                                        </p>
                                        <a href="#">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="box aligncenter">
                                    <div class="aligncenter icon">
                                        <i class="icon-desktop icon-circled icon-64 active"></i>
                                    </div>
                                    <div class="text">
                                        <h6>Responsive theme</h6>
                                        <p>
                                            Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                                        </p>
                                        <a href="#">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="box aligncenter">
                                    <div class="aligncenter icon">
                                        <i class="icon-desktop icon-circled icon-64 active"></i>
                                    </div>
                                    <div class="text">
                                        <h6>Responsive theme</h6>
                                        <p>
                                            Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                                        </p>
                                        <a href="#">Learn more</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </se>
        </section>
                <!------------------->
                <!------------------->

        <section id="content">
            <div class="container">

                <!-- divider -->
                <div class="row">
                    <div class="span12">
                        <div class="solidline">
                        </div>
                    </div>
                </div>
                <!-- end divider -->
                <!-- Portfolio Projects -->
                <div class="row">
                    <div class="span12">
                        <h4 class="heading">Some of recent <strong>works</strong></h4>
                        <div class="row">
                            <section id="projects">
                                <ul id="thumbs" class="portfolio">
                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The City" href="{{asset('assets/website/img/works/full/image-01-full.jpg')}}">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="{{asset('assets/website/img/works/thumbs/image-01.jpg ')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->
                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Office" href="{{asset('assets/website/img/works/full/image-02-full.jpg')}}">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="{{asset('assets/website/img/works/thumbs/image-02.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->
                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="{{asset('assets/website/img/works/full/image-03-full.jpg')}}">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="{{asset('assets/website/img/works/thumbs/image-03.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->
                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="{{asset('assets/website/img/works/full/image-04-full.jpg ')}}">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="{{asset('assets/website/img/works/thumbs/image-04.jpg ')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->
                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 photography" data-id="id-4" data-type="web">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Sea" href="{{asset('assets/website/img/works/full/image-05-full.jpg ')}}">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="{{asset('assets/website/img/works/thumbs/image-05.jpg ')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->
                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 photography" data-id="id-5" data-type="icon">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Clouds" href="{{asset('assets/website/img/works/full/image-06-full.jpg ')}}">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="{{asset('assets/website/img/works/thumbs/image-06.jpg ')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->
                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="{{asset('assets/website/img/works/full/image-07-full.jpg ')}}">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="{{asset('assets/website/img/works/thumbs/image-07.jpg ')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->
                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Dark" href="{{asset('assets/website/img/works/full/image-08-full.jpg ')}}">
                                            <span class="overlay-img"></span>
                                            <span class="overlay-img-thumb font-icon-plus"></span>
                                        </a>
                                        <!-- Thumb Image and Description -->
                                        <img src="{{asset('assets/website/img/works/thumbs/image-08.jpg ')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Projects -->
                <!-- divider -->
                <div class="row">
                    <div class="span12">
                        <div class="solidline">
                        </div>
                    </div>
                </div>
                <!-- end divider -->
                <div class="row">
                    <div class="span12">
                        <h4>Teachers <strong>Identity</strong></h4>
                        <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
                            <li>

                                <a href="#">
                                    <img style="width: 155px; height: 110px;" src="{{asset('assets/admin/smart.jpg ')}}" class="client-logo" alt="" />
                                </a>
                                <h5 style="text-align: center;">Mr.Sumon</h5>
                            </li>
                            <li>

                                <a href="#">
                                    <img style="width: 155px; height: 110px;" src="{{asset('assets/admin/smart.jpg ')}}" class="client-logo" alt="" />
                                </a>
                                <h5 style="text-align: center;">Mr.Sumon</h5>
                            </li>
                            <li>

                                <a href="#">
                                    <img style="width: 155px; height: 110px;" src="{{asset('assets/admin/smart.jpg ')}}" class="client-logo" alt="" />
                                </a>
                                <h5 style="text-align: center;">Mr.Sumon</h5>
                            </li>
                            <li>

                                <a href="#">
                                    <img style="width: 155px; height: 110px;" src="{{asset('assets/admin/smart3.jpg ')}}" class="client-logo" alt="" />
                                </a>
                                <h5 style="text-align: center;">Mr.Sumon</h5>
                            </li>
                            <li>

                                <a href="#">
                                    <img style="width: 155px; height: 110px;" src="{{asset('assets/admin/smart2.jpg ')}}" class="client-logo" alt="" />
                                </a>
                                <h5 style="text-align: center;">Mr.Sumon</h5>
                            </li>
                            <li>

                                <a href="#">
                                    <img style="width: 155px; height: 110px;" src="{{asset('assets/admin/smart.jpg ')}}" class="client-logo" alt="" />
                                </a>
                                <h5 style="text-align: center;">Mr.Sumon</h5>
                            </li>
                            <li>

                                <a href="#">
                                    <img style="width: 155px; height: 110px;" src="{{asset('assets/admin/smart.jpg ')}}" class="client-logo" alt="" />
                                </a>
                                <h5 style="text-align: center;">Mr.Sumon</h5>
                            </li>
                            <li>

                                <a href="#">
                                    <img style="width: 155px; height: 110px;" src="{{asset('assets/admin/smart.jpg ')}}" class="client-logo" alt="" />
                                </a>
                                <h5 style="text-align: center;">Mr.Sumon</h5>
                            </li>
                            <li>

                                <a href="#">
                                    <img style="width: 155px; height: 110px;" src="{{asset('assets/admin/smart.jpg ')}}" class="client-logo" alt="" />
                                </a>
                                <h5 style="text-align: center;">Mr.Sumon</h5>
                            </li>
                            <li>

                                <a href="#">
                                    <img style="width: 155px; height: 110px;" src="{{asset('assets/admin/smart.jpg ')}}" class="client-logo" alt="" />
                                </a>
                                <h5 style="text-align: center;">Mr.Sumon</h5>
                            </li>
                            <li>

                                <a href="#">
                                    <img style="width: 155px; height: 110px;" src="{{asset('assets/admin/smart.jpg ')}}" class="client-logo" alt="" />
                                </a>
                                <h5 style="text-align: center;">Mr.Sumon</h5>
                            </li>
                            <li>

                                <a href="#">
                                    <img style="width: 155px; height: 110px;" src="{{asset('assets/admin/smart.jpg ')}}" class="client-logo" alt="" />
                                </a>
                                <h5 style="text-align: center;">Mr.Sumon</h5>
                            </li>


                        </ul>

                    </div>
                </div>
            </div>
        </section>

                <!------------------->

    @endsection
