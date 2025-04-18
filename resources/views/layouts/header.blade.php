<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pythogorax</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <title>@yield('title', 'Pythogorax')</title>
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="Loading..." /></div>
    </div>
    <!-- end loader -->

    <!-- header -->
    <header>
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                                    <div class="full text-start">
                                        <div class="logo">
                                            <button class="btn p-0 border-0 bg-transparent" id="openSliderBtn">
                                                <img src="{{ asset('images/logo.png') }}" alt="Logo" />
                                            </button>
                                        </div>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Slide-in Menu Panel -->
                <div id="customSlider" class="custom-slider bg-dark text-white p-4">
                    <button class="btn btn-light mb-3" id="closeSliderBtn">Close</button>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="{{ url('/') }}" class="nav-link text-white">Check Model</a></li>
                    </ul>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('aboutUsPage') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('viewCarPage') }}">Cars</a>
                                </li>
                                @can('isAdmin')
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('viewAppointmentPage') }}">View Appointment</a>
                                    </li>
                                @endcan
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('afterSalesPage') }}">After Sales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('loginPage') }}">
                                        <i class="fa fa-user-circle padd_right" aria-hidden="true"></i>Login/Sign Up
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- end header -->

    <style>
        .custom-slider {
            position: fixed;
            top: 0;
            left: -300px;
            width: 300px;
            height: 100%;
            background-color: #222;
            z-index: 1050;
            transition: left 0.3s ease-in-out;
        }

        .custom-slider.show {
            left: 0;
        }
    </style>


    <script>
        document.getElementById('openSliderBtn').addEventListener('click', function () {
            document.getElementById('customSlider').classList.add('show');
        });

        document.getElementById('closeSliderBtn').addEventListener('click', function () {
            document.getElementById('customSlider').classList.remove('show');
        });
    </script>