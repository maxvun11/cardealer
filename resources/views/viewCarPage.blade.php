@extends('layouts.app')

@section('title', 'View Car')

@section('content')
    <!-- wedo  section -->

    <div class="brand-section text-center">
        <button class="brand-btn" onclick="scrollToBrand('brand1')">TOYOTA</button>
        <button class="brand-btn" onclick="scrollToBrand('brand2')">NISSAN</button>
        <button class="brand-btn" onclick="scrollToBrand('brand3')">FERRARI</button>
        <button class="brand-btn" onclick="scrollToBrand('brand4')">FORD</button>
    </div>

    <div class="wedo">
        <div id="brand1" class="brand-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>TOYOTA</h2>
                            <p>One of the most well known Japanese Brand</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <!-- Toyota Supra -->
                            <div class="col-md-6 margin_bottom">
                                <a href="supra.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>TOYOTA<br><span class="blu">Supra MK4</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Toyota Corolla -->
                            <div class="col-md-6 margin_bottom">
                                <a href="corolla.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>TOYOTA<br><span class="blu">Corolla</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Toyota Camry -->
                            <div class="col-md-6 margin_bottom">
                                <a href="camry.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>TOYOTA<br><span class="blu">Camry</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Toyota Hilux -->
                            <div class="col-md-6 margin_bottom">
                                <a href="hilux.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>TOYOTA<br><span class="blu">Hilux</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wedo">
        <div id="brand2" class="brand-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>NISSAN</h2>
                            <p>Well known for its JDM Sport Cars</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <!-- Toyota Supra -->
                            <div class="col-md-6 margin_bottom">
                                <a href="supra.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>Nissan<br><span class="blu">NSX Acura</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Toyota Corolla -->
                            <div class="col-md-6 margin_bottom">
                                <a href="corolla.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>NISSAN<br><span class="blu">GTR R-34</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Toyota Camry -->
                            <div class="col-md-6 margin_bottom">
                                <a href="camry.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>NISSAN<br><span class="blu">FairLady</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Toyota Hilux -->
                            <div class="col-md-6 margin_bottom">
                                <a href="hilux.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>NISSAN<br><span class="blu">SkyLine</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="wedo">
        <div id="brand3" class="brand-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>FERRARI</h2>
                            <p>Europe Most Wanted</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <!-- Toyota Supra -->
                            <div class="col-md-6 margin_bottom">
                                <a href="supra.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>FERRARI<br><span class="blu">F40</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Toyota Corolla -->
                            <div class="col-md-6 margin_bottom">
                                <a href="corolla.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>FERRARI<br><span class="blu">Moderna</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Toyota Camry -->
                            <div class="col-md-6 margin_bottom">
                                <a href="camry.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>FERRARI<br><span class="blu">Italia</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Toyota Hilux -->
                            <div class="col-md-6 margin_bottom">
                                <a href="hilux.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>FERRARi<br><span class="blu">LaFerrari</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="wedo">
        <div id="brand4" class="brand-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>FORD</h2>
                            <p>The American Flag</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <!-- Toyota Supra -->
                            <div class="col-md-6 margin_bottom">
                                <a href="supra.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>FORD<br><span class="blu">Mustang</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Toyota Corolla -->
                            <div class="col-md-6 margin_bottom">
                                <a href="corolla.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>FORD<br><span class="blu">HellCat</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Toyota Camry -->
                            <div class="col-md-6 margin_bottom">
                                <a href="camry.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>FORD<br><span class="blu">GT</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Toyota Hilux -->
                            <div class="col-md-6 margin_bottom">
                                <a href="hilux.html">
                                    <div class="work parallax">
                                        <div class="parallax-image" style="background-image: url('images/banner.jpg');">
                                            <div class="work_text">
                                                <h3>FORD<br><span class="blu">Focus</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <script>
        function scrollToBrand(brandId) {
            const element = document.getElementById(brandId);
            const yOffset = -80; // Adjust this value to position the heading properly
            const y = element.getBoundingClientRect().top + window.scrollY + yOffset;

            window.scrollTo({ top: y, behavior: 'smooth' });
        }
    </script>
    @endsection