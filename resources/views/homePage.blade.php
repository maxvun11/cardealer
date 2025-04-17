@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

@if(session('error'))
<br>
    <div class="alert alert-danger" style="margin-bottom:0;">
       
            {{ session('error') }}
       
    </div>
@endif
    <!-- banner -->
    <section class="banner_main">
        <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#banner1" data-slide-to="0" class="active"></li>
                <li data-target="#banner1" data-slide-to="1"></li>
                <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-bg">
                                        <h1>Japanese DM MOTORS</h1>
                                        <span>Vintage Japanese Cars</span><br>
                                        <a href="viewCarPage">View Models</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text_img">
                                        <figure><img src="images/jdm.png" alt="#" /></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-bg">
                                        <h1>CONTINENTAL CARS</h1>
                                        <span>European Old Money</span><br>
                                        <a href="viewCarPage">View Models</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text_img">
                                        <figure><img src="images/conti.png" alt="#" /></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-bg">
                                        <h1>USA MUSCLE MOTORS</h1>
                                        <span>Pride Of America</span><br>
                                        <a href="viewCarPage">View Models</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text_img">
                                        <figure><img src="images/muscle.png" alt="#" /></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>
    <!-- end banner -->

    <!-- three_box -->
    <div class="three_box">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box_text">
                        <h3>Best Quality</h3>
                        <i><img src="images/thr.png" alt="#" /></i>
                        <p>All models are checked and in best quality, guarantee to be safe.</p><br>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_text">
                        <h3>After Sales</h3>
                        <i><img src="images/thr1.png" alt="#" /></i>
                        <p>Free first 3 routine maintenance for buyers, ensuring performance.</p><br>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_text">
                        <h3>24-Hour Hotline</h3>
                        <i><img src="images/thr2.png" alt="#" /></i>
                        <p>We are family. Call us anytime anywhere anyhow when you face issue.</p><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- three_box -->

    <!-- Wedo Section -->
    <div class="wedo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Featured Models</h2>
                        <p>Car models imported seasonally, so model availability might vary</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <!-- Toyota Supra -->
                        <div class="col-md-6 margin_bottom">
                            <a href="viewCarPage">
                                <div class="work parallax">
                                    <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                        <div class="work_text">
                                            <h3>TOYOTA<br><span class="blu">Supra MK4</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Nissan NSX -->
                        <div class="col-md-6 margin_bottom">
                            <a href="viewCarPage">
                                <div class="work parallax">
                                    <div class="parallax-image" style="background-image: url('images/img2.png');">
                                        <div class="work_text">
                                            <h3>NISSAN<br><span class="blu">NSX Acura</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Adds Space Between Image Rows -->
                    <div class="row image-row-gap">
                        <!-- Ford Mustang -->
                        <div class="col-md-6 margin_bottom">
                            <a href="viewCarPage">
                                <div class="work parallax">
                                    <div class="parallax-image" style="background-image: url('images/img3.png');">
                                        <div class="work_text">
                                            <h3>FORD<br><span class="blu">Mustang</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Ferrari F40 -->
                        <div class="col-md-6 margin_bottom">
                            <a href="viewCarPage">
                                <div class="work parallax">
                                    <div class="parallax-image" style="background-image: url('images/img4.png');">
                                        <div class="work_text">
                                            <h3>FERRARI<br><span class="blu">F40</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- "See More" Button -->
                    <a class="read_more" href="viewCarPage">See More</a>
                </div>
            </div>
        </div>
    </div>




    <!-- About Section -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <!-- Background image container with hover effect -->
                        <div class="about_img">
                            <!-- "Who We Are" is always visible -->
                            <div class="about_box">
                                <h3>We are UTAR smugglers</h3>
                                <a href="aboutUsPage" class="read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Section -->

    <!-- testimonial -->
    <div class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Testimonial</h2>
                        <p>Some love from our previous client</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption ">
                                        <div class="row">
                                            <div class="col-md-6 margin_boot">
                                                <div class="test_box">
                                                    <i><img src="images/tes.jpg" alt="#" /></i>
                                                    <h4>Prof Ewe</h4>
                                                    <span>(UTAR President)</span>
                                                    <p>I bought my ferrari here, crazy good not gonna lie, one step to
                                                        the pedal and it reach 200km/h in 5 second. My life have never
                                                        been quicker ever since i got a Ferrari, thank you Pythogorax!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 margin_boot">
                                                <div class="test_box">
                                                    <i><img src="images/tes1.jpg" alt="#" /></i>
                                                    <h4>Osamu Moroe</h4>
                                                    <span>(UTAR Choir President)</span>
                                                    <p>So happy to see JDM Motor culture being spread throughout the
                                                        world, I used to have a mx-5 and now I wanted to get a Supra
                                                        MK4, Pythogorax was able to plug me one and now i have stopped
                                                        aging!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-6 margin_boot">
                                                <div class="test_box">
                                                    <i><img src="images/tes.jpg" alt="#" /></i>
                                                    <h4>Zeb Vun</h4>
                                                    <span>(UTAR Student)</span>
                                                    <p>They gave me a GT86 for free because I have no transport to
                                                        school, damn i feel so honoured to accept this gift, I love you
                                                        Pythogorax</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 margin_boot">
                                                <div class="test_box">
                                                    <i><img src="images/tes1.jpg" alt="#" /></i>
                                                    <h4>Oscar Seah</h4>
                                                    <span>(Pytho Club President)</span>
                                                    <p>Got my F40 for half of market price, I wonder how they even get
                                                        it, even the maintenance and services are well executed, the
                                                        parts are all ready stock</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-6 margin_boot">
                                                <div class="test_box">
                                                    <i><img src="images/tes.jpg" alt="#" /></i>
                                                    <h4>Eivonne Goh</h4>
                                                    <span>(Software Engineer)</span>
                                                    <p>Wanted a Myvi, gave me a Mini Cooper, I'll take it I guess</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 margin_boot">
                                                <div class="test_box">
                                                    <i><img src="images/tes1.jpg" alt="#" /></i>
                                                    <h4>Xuan You</h4>
                                                    <span>(China Chansellor)</span>
                                                    <p>Like what the Chinese say, a cat that catches mouses is a good
                                                        cat, no matter its color. I don't care where they get the car
                                                        from but it's good</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end testimonial -->
@endsection