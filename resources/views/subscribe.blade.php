<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aroma Shop - Login</title>
    <link rel="icon" href="public/assets/img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="public/assets/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="public/assets/vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="public/assets/vendors/linericon/style.css">
    <link rel="stylesheet" href="public/assets/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="public/assets/vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="public/assets/vendors/nouislider/nouislider.min.css">

    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body>
<!--================ Start Header Menu Area =================-->
@extends('layouts.layout')
<!--================ End Header Menu Area =================-->

<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Subscribe and take a lot of discounts</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->

<!--================Login Box Area =================-->
<section class="login_box_area section-margin">

@include('layouts.alerts');

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <div class="hover">
                        <h4>New to our website?</h4>
                        <p>There are advances being made in science and technology everyday, and a good example of this
                            is the</p>
                        <a class="button button-account" href={{route('register')}}>Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Subscribe Now!</h3>
                    <form class="row login_form" method="post" action="{{route('subscribe.store')}}" id="contactForm">
                        @csrf
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email of your account"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="button button-login w-100">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->


<!--================ Start footer Area  =================-->
<footer>
    <div class="footer-area footer-only">
        <div class="container">
            <div class="row section_gap">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets ">
                        <h4 class="footer_title large_title">Our Mission</h4>
                        <p>
                            So seed seed green that winged cattle in. Gathering thing made fly you're no
                            divided deep moved us lan Gathering thing us land years living.
                        </p>
                        <p>
                            So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep
                            moved
                        </p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Quick Links</h4>
                        <ul class="list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Brand</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h4 class="footer_title">Gallery</h4>
                        <ul class="list instafeed d-flex flex-wrap">
                            <li><img src="public/assets/img/gallery/r1.jpg" alt=""></li>
                            <li><img src="public/assets/img/gallery/r2.jpg" alt=""></li>
                            <li><img src="public/assets/img/gallery/r3.jpg" alt=""></li>
                            <li><img src="public/assets/img/gallery/r5.jpg" alt=""></li>
                            <li><img src="public/assets/img/gallery/r7.jpg" alt=""></li>
                            <li><img src="public/assets/img/gallery/r8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Contact Us</h4>
                        <div class="ml-40">
                            <p class="sm-head">
                                <span class="fa fa-location-arrow"></span>
                                Head Office
                            </p>
                            <p>123, Main Street, Your City</p>

                            <p class="sm-head">
                                <span class="fa fa-phone"></span>
                                Phone Number
                            </p>
                            <p>
                                +123 456 7890 <br>
                                +123 456 7890
                            </p>

                            <p class="sm-head">
                                <span class="fa fa-envelope"></span>
                                Email
                            </p>
                            <p>
                                free@infoexample.com <br>
                                www.infoexample.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row d-flex">
                <p class="col-lg-12 footer-text text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->


<script src="public/assets/vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="public/assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="public/assets/vendors/skrollr.min.js"></script>
<script src="public/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="public/assets/vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="public/assets/vendors/jquery.ajaxchimp.min.js"></script>
<script src="public/assets/vendors/mail-script.js"></script>
<script src="public/assets/js/main.js"></script>
</body>
</html>
