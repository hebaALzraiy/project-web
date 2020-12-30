@extends('frontsite.layouts.master')
@section('content')


    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/banner.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Hello <br><strong class="cur">I Am Jashika Jonson</strong></h1>
                            <span>And I can help you lose weight fast and safety</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br>has been the industry's standard dummy text ever since the 1500s, when an unknown<br> printer took a galley</p>
                            <div class="button_section"> <a class="main_bt" href="#">Contact us</a> <a class="main_bt" href="#">Click Here</a> </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="images/banner.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Hello <br><strong class="cur">I Am Jashika Jonson</strong></h1>
                            <span>And I can help you lose weight fast and safety</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br>has been the industry's standard dummy text ever since the 1500s, when an unknown<br> printer took a galley</p>
                            <div class="button_section"> <a class="main_bt" href="#">Contact us</a> <a class="main_bt" href="#">Click Here</a> </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="images/banner.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Hello <br><strong class="cur">I Am Jashika Jonson</strong></h1>
                            <span>And I can help you lose weight fast and safety</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br>has been the industry's standard dummy text ever since the 1500s, when an unknown<br> printer took a galley</p>
                            <div class="button_section"> <a class="main_bt" href="#">Contact us</a> <a class="main_bt" href="#">Click Here</a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>

    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="aboutheading">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="aboutimg">
                        <figure><img src="images/about.jpg" alt="img" /></figure>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                            to using 'Content here, content here', making it look like readable English. Many desktop publishing packaged by th</p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- end about -->
    <!-- Coach -->
    <div class="Coach">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Why <strong class="need">You Need A Coach?</strong></h2>
                        <span>A Health Coach Helps Make Change Safer and Better for Your Body</span> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="tow-box ">
                                <i><img src="images/1.png" alt="img"/></i>
                                <p>I will create your everyday nutrition strategies</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="tow-box mrgn-top">
                                <i><img src="images/3.png" alt="img"/></i>
                                <p>I will help you understand why you have gained the weight</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 pnd-top">
                            <div class="tow-box ">
                                <i><img src="images/2.png" alt="img"/></i>
                                <p>I will help you have enough time for yourself</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="tow-box mrgn-top">
                                <i><img src="images/4.png" alt="img"/></i>
                                <p>Will Make Change Safer and Better for Your Body </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="read-more">
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Currency -->
    <!--service -->
    <div class="get_infor green_bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="get ">
                        <h2>GET <br><strong class="white">
                                RESULTS 100% </strong> GUARANTEED
                        </h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                            to using 'Content here, content here', making it look like readable English. Many desktop publishing packaged by th</p>
                        <a class="started" href="#">get started</a>
                    </div>
                </div>
                <div class="col-lg-6 pdn-right">
                    <div class="guaranteed">
                        <figure><img src="images/Request.jpg"></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end service -->


    <!-- state abouts -->

    <div class="Contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage3">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Your name" type="Your name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Phone" type="Phone">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Email" type="Email">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Select Coach" type="Select Coach">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                                <textarea class="textarea" placeholder="Message">Message</textarea>
                            </div>
                        </div>
                    </form>
                </div>

                <button class="send-btn">Make an Appointment</button>
            </div>
        </div>
    </div>


@endsection
