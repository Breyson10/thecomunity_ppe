@extends('layouts.frotend.layouts')
@section('container')
    <div class="hero-slider">
        <div class="slider-rev-cont">
            <div class="tp-banner-container">
                <div class="tp-limited">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-delay="5000" data-masterspeed="600" data-slotamount="7" data-transition="fade">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('file_frotend/template/images/home_principal.jpg') }}" alt="">

                            <!-- LAYER NR. 1 -->home_slider2
                            <!-- LAYER NR. 2 -->

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption text-align-center h2 sfr whiter tp-resizeme" data-x="center"
                                data-hoffset="0" data-y="center" data-voffset="55" data-speed="600" data-start="1800"
                                data-easing="Back.easeInOut" data-endspeed="300">
                                Comunidad<br>Picante pero edificante.
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption fade whiter tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
                                data-voffset="155" data-speed="1000" data-start="2800" data-easing="Back.easeInOut"
                                data-endspeed="300">
                                <a href="join.html" class="btn btn-lg btn-default">PPE</a>
                            </div>
                        </li>

                      <li data-delay="5000" data-masterspeed="600" data-slotamount="7" data-transition="fade">
                                <img src="{{ asset('file_frotend/template/images/home_slider2.jpg') }}" alt="">
                          <div class="tp-caption sfr whiter h4 tp-resizeme"
                              data-x="right"
                              data-hoffset="-15"
                              data-y="center"
                              data-voffset="-80"
                              data-speed="1000"
                              data-start="500"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              Lives
                          </div>
                          <div class="tp-caption sfr whiter h2 tp-resizeme"
                              data-x="right"
                              data-hoffset="-20"
                              data-y="center"
                              data-voffset="-40"
                              data-speed="1000"
                              data-start="600"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              is the power
                          </div>
                          <div class="tp-caption customin whiter customout tp-resizeme"
                              data-x="right"
                                data-hoffset="-20"
                              data-y="center"
                                data-voffset="20"
                              data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:100% 50%;"
                              data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                              data-start="1100"
                              data-speed="600"
                              data-easing="Linear.easeNone"
                              data-endspeed="600"
                              data-endeasing="Linear.easeNone"
                              ><hr class="md">
                          </div>
                          <div class="tp-caption sfr whiter para text-align-right tp-resizeme"
                              data-x="right"
                              data-hoffset="-20"
                              data-y="center"
                              data-voffset="80"
                              data-speed="1400"
                              data-start="1000"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Nulla convallis egestas rhoncus. Donec facilisis fermentum<br>sem, ac viverra ante luctus vel.
                          </div>
                          <div class="tp-caption sfr whiter tp-resizeme"
                              data-x="right"
                              data-hoffset="-20"
                              data-y="center"
                              data-voffset="160"
                              data-speed="1000"
                              data-start="1800"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              <a href="donate.html" class="btn btn-lg btn-default">Support</a>
                          </div>
                      </li>

                      <li data-delay="5000" data-masterspeed="600" data-slotamount="7" data-transition="fade">
                                <img src="{{ asset('file_frotend/template/images/home_slider3.jpg') }}" alt="">
                          <div class="tp-caption sfr whiter h4 tp-resizeme"
                              data-x="right"
                              data-hoffset="-15"
                              data-y="center"
                              data-voffset="-80"
                              data-speed="1000"
                              data-start="500"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              Water
                          </div>
                          <div class="tp-caption sfr whiter h2 tp-resizeme"
                              data-x="right"
                              data-hoffset="-20"
                              data-y="center"
                              data-voffset="-40"
                              data-speed="1000"
                              data-start="600"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              for everyone
                          </div>
                          <div class="tp-caption customin whiter customout tp-resizeme"
                              data-x="right"
                                data-hoffset="-20"
                              data-y="center"
                                data-voffset="20"
                              data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:100% 50%;"
                              data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                              data-start="1100"
                              data-speed="600"
                              data-easing="Linear.easeNone"
                              data-endspeed="600"
                              data-endeasing="Linear.easeNone"
                              ><hr class="md">
                          </div>
                          <div class="tp-caption sfr whiter para text-align-right tp-resizeme"
                              data-x="right"
                              data-hoffset="-20"
                              data-y="center"
                              data-voffset="80"
                              data-speed="1400"
                              data-start="1000"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Nulla convallis egestas rhoncus. Donec facilisis fermentum<br>sem, ac viverra ante luctus vel.
                          </div>
                          <div class="tp-caption sfr whiter tp-resizeme"
                              data-x="right"
                              data-hoffset="-20"
                              data-y="center"
                              data-voffset="160"
                              data-speed="1000"
                              data-start="1800"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              <a href="donate.html" class="btn btn-lg btn-default">Give help</a>
                          </div>
                      </li>
                            <li data-delay="5000" data-masterspeed="600" data-slotamount="7" data-transition="fade">
                                <img src="{{ asset('file_frotend/template/images/home_slider4.jpg') }}" alt="">
                          <div class="tp-caption sfr whiter h4 tp-resizeme"
                              data-x="right"
                              data-hoffset="-15"
                              data-y="center"
                              data-voffset="-80"
                              data-speed="1000"
                              data-start="500"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              Water
                          </div>
                          <div class="tp-caption sfr whiter h2 tp-resizeme"
                              data-x="right"
                              data-hoffset="-20"
                              data-y="center"
                              data-voffset="-40"
                              data-speed="1000"
                              data-start="600"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              for everyone
                          </div>
                          <div class="tp-caption customin whiter customout tp-resizeme"
                              data-x="right"
                                data-hoffset="-20"
                              data-y="center"
                                data-voffset="20"
                              data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:100% 50%;"
                              data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                              data-start="1100"
                              data-speed="600"
                              data-easing="Linear.easeNone"
                              data-endspeed="600"
                              data-endeasing="Linear.easeNone"
                              ><hr class="md">
                          </div>
                          <div class="tp-caption sfr whiter para text-align-right tp-resizeme"
                              data-x="right"
                              data-hoffset="-20"
                              data-y="center"
                              data-voffset="80"
                              data-speed="1400"
                              data-start="1000"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Nulla convallis egestas rhoncus. Donec facilisis fermentum<br>sem, ac viverra ante luctus vel.
                          </div>
                          <div class="tp-caption sfr whiter tp-resizeme"
                              data-x="right"
                              data-hoffset="-20"
                              data-y="center"
                              data-voffset="160"
                              data-speed="1000"
                              data-start="1800"
                              data-easing="Back.easeInOut"
                              data-endspeed="300">
                              <a href="donate.html" class="btn btn-lg btn-default">Give help</a>
                          </div>
                      </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Slider -->
    <div class="double-border"></div>
    <!-- Start Lead Block -->
    <div class="lead-block">
        <div class="container">
            <div class="tabs">
                <div class="nav-tabs-bar">
                    <ul class="nav nav-tabs">
                        <li class="active"> <a data-toggle="tab" href="#sampletab1">Our Mission</a> </li>
                        <li> <a data-toggle="tab" href="#sampletab2">Why you should join us</a> </li>
                    </ul>
                    <a href="about.html" class="pull-right">more about us <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="tab-content">
                    <div id="sampletab1" class="tab-pane active">
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <p id="countdown-methods">Jan 1 2020 00:00:00</p>
                                <button id="countdown-start">Start</button>
                                <button id="countdown-stop">Stop</button>
                                <button id="countdown-end" class="btn btn-success">End</button>
                                <button id="countdown-destroy" class="btn btn-danger">Destroy</button>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis
                                    egestas rhoncus.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.
                                    Donec facilisis fermentum sem, ac viverra ante luctus vel. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum
                                    sem, ac viverra ante luctus vel. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante
                                    luctus vel.</p>
                                <hr class="md">
                                <div class="clearfix"></div>
                                <a href="#" class="btn btn-lg btn-primary"><i class="fa fa-cloud-download"></i> Download
                                    Brochure</a>
                            </div>
                            <div class="col-md-4 col-sm-4 hidden-xs">
                                <img src="http://placehold.it/302x312&amp;text=IMAGE+PLACEHOLDER" alt=""
                                    style="margin-top:-40px">
                            </div>
                        </div>
                    </div>
                    <div id="sampletab2" class="tab-pane">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="icon-block"><span class="icon label-info"><i class="fa fa-globe"></i></span>
                                    <h2>To make the planet lively</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas
                                        rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="icon-block"><span class="icon label-warning"><i
                                            class="fa fa-umbrella"></i></span>
                                    <h2>To save the Rain Water</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas
                                        rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="icon-block"><span class="icon label-success"><i class="fa fa-tree"></i></span>
                                    <h2>To make Forests Greener</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas
                                        rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                                </div>
                            </div>
                            <div class="text-align-center">
                                <div class="spacer-20"></div>
                                <a href="#" class="btn btn-primary btn-lg secondary-color-bg">Join now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Lead Block -->
    <!-- Start Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 border-col">
                        <!-- Latest Posts -->
                        <div class="latest-posts">
                            <h3 class="title"><i class="fa fa-folder"></i> Latest Posts</h3>
                            <ul class="posts-listing">
                                <li class="post-list-item format-standard">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-6" data-appear-animation="fadeInLeft"
                                            data-appear-animation-delay="1">
                                            <a href="blog-post.html" class="media-box"><img
                                                    src="http://placehold.it/800x600&amp;text=IMAGE+PLACEHOLDER" alt=""
                                                    class="img-thumbnail post-thumb"></a>
                                        </div>
                                        <div class="col-md-7 col-sm-6" data-appear-animation="fadeInLeft"
                                            data-appear-animation-delay="1">
                                            <h3 class="post-title"><a href="blog-post.html">Borneo orangutan</a></h3>
                                            <span class="post-time meta-data">Wed 20th July, 14</span>
                                            <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra
                                                ante luctus vel...</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="post-list-item format-standard">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-6">
                                            <a href="blog-post.html" class="media-box"><img
                                                    src="http://placehold.it/800x600&amp;text=IMAGE+PLACEHOLDER" alt=""
                                                    class="img-thumbnail post-thumb"></a>
                                        </div>
                                        <div class="col-md-7 col-sm-6">
                                            <h3 class="post-title"><a href="blog-post.html">Traditional hand weaving in the
                                                    andes mountains Peru</a></h3>
                                            <span class="post-time meta-data">Sun 17th July, 14</span>
                                            <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra
                                                ante luctus vel...</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="blog.html" class="btn toblog btn-default pull-right">Visit Blog</a>
                        </div>
                    </div>
                    <!-- Sidebar -->
                    <div class="col-md-4 sidebar right-sidebar">
                        <div class="widget sidebar-widget upcoming-events-widget">
                            <h3 class="title widgettitle"><i class="fa fa-calendar"></i> Upcoming Events</h3>
                            <ul class="upcoming-events">
                                <li data-appear-animation="fadeInRight" data-appear-animation-delay="1">
                                    <img src="http://placehold.it/80x80&amp;text=IMAGE+PLACEHOLDER" alt=""
                                        class="img-thumbnail event-thumb">
                                    <span class="event-date">
                                        <span class="day">16</span>
                                        <span class="monthyear">Aug, 14</span>
                                    </span>
                                    <div class="event-excerpt">
                                        <div class="event-cats meta-data"><a href="event-grid.html">Days</a></div>
                                        <h5 class="event-title"><a href="single-event.html">Australia Day</a></h5>
                                        <p class="event-location"><i class="fa fa-map-marker"></i> Canberra ACT 2600,
                                            Australia</p>
                                    </div>
                                </li>
                                <li data-appear-animation="fadeInRight" data-appear-animation-delay="1">
                                    <img src="http://placehold.it/80x80&amp;text=IMAGE+PLACEHOLDER" alt=""
                                        class="img-thumbnail event-thumb">
                                    <span class="event-date">
                                        <span class="day">20</span>
                                        <span class="monthyear">Aug, 14</span>
                                    </span>
                                    <div class="event-excerpt">
                                        <div class="event-cats meta-data"><a href="event-grid.html">Volunteers</a></div>
                                        <h5 class="event-title"><a href="single-event.html">National Volunteer week</a></h5>
                                        <p class="event-location"><i class="fa fa-map-marker"></i> Parc Orsay, Batiment
                                            Sequoia</p>
                                    </div>
                                </li>
                                <li data-appear-animation="fadeInRight" data-appear-animation-delay="1">
                                    <img src="http://placehold.it/80x80&amp;text=IMAGE+PLACEHOLDER" alt=""
                                        class="img-thumbnail event-thumb">
                                    <span class="event-date">
                                        <span class="day">21</span>
                                        <span class="monthyear">Aug, 14</span>
                                    </span>
                                    <div class="event-excerpt">
                                        <div class="event-cats meta-data"><a href="event-grid.html">Cleanliness</a></div>
                                        <h5 class="event-title"><a href="single-event.html">Business cleanup day</a></h5>
                                        <p class="event-location"><i class="fa fa-map-marker"></i> Parc Orsay, Batiment
                                            Sequoia</p>
                                    </div>
                                </li>
                                <li data-appear-animation="fadeInRight" data-appear-animation-delay="1">
                                    <img src="http://placehold.it/80x80&amp;text=IMAGE+PLACEHOLDER" alt=""
                                        class="img-thumbnail event-thumb">
                                    <span class="event-date">
                                        <span class="day">22</span>
                                        <span class="monthyear">Aug, 14</span>
                                    </span>
                                    <div class="event-excerpt">
                                        <div class="event-cats meta-data"><a href="event-grid.html">World</a></div>
                                        <h5 class="event-title"><a href="single-event.html">World's park day</a></h5>
                                        <p class="event-location"><i class="fa fa-map-marker"></i> Parc Orsay, Batiment
                                            Sequoia</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="upcoming-events-footer">
                                <hr class="sm">
                                <a href="events.html">See all events</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Partners -->
    <div class="our-partners">
        <div class="container">
            <h2 class="title"><small>Mission</small>Partners</h2>
            <div class="row">
                <div class="col-md-3">
                    <p class="margin-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas
                        rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Nulla convallis egestas rhoncus.
                        Donec facilisis fermentum sem.</p>
                </div>
                <div class="col-md-9">
                    <ul class="partner-logos">
                        <li data-appear-animation="fadeInDown" data-appear-animation-delay="10"><img
                                src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></li>
                        <li data-appear-animation="fadeInDown" data-appear-animation-delay="100"><img
                                src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></li>
                        <li data-appear-animation="fadeInDown" data-appear-animation-delay="200"><img
                                src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></li>
                        <li data-appear-animation="fadeInDown" data-appear-animation-delay="300"><img
                                src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></li>
                        <li data-appear-animation="fadeInDown" data-appear-animation-delay="400"><img
                                src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="featured-projects">
        <div class="container">
            <a href="projects.html" class="btn toblog btn-default pull-right">All Projects</a>
            <h2><small>Featured</small> Projects</h2>
            <div class="row">
                <div class="col-md-4 col-sm-4 format-standard">
                    <a href="single-project.html" class="featured-project-block media-box">
                        <img src="http://placehold.it/600x300&amp;text=IMAGE+PLACEHOLDER" alt="" class="featured-image">
                        <span class="project-overlay">
                            <span class="project-title">Life of the whales</span>
                            <span class="project-cat">Oceans</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 format-standard">
                    <a href="single-project.html" class="featured-project-block media-box">
                        <img src="http://placehold.it/600x300&amp;text=IMAGE+PLACEHOLDER" alt="" class="featured-image">
                        <span class="project-overlay">
                            <span class="project-title">We will miss them</span>
                            <span class="project-cat">Forests</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 format-standard">
                    <a href="single-project.html" class="featured-project-block media-box">
                        <img src="http://placehold.it/600x300&amp;text=IMAGE+PLACEHOLDER" alt="" class="featured-image">
                        <span class="project-overlay">
                            <span class="project-title">How to feed the world</span>
                            <span class="project-cat">Food</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
