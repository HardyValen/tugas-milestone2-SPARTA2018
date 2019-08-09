@extends('template.skeleton')

@section('title', 'Landing - CUS')

@section('content')
@include('components.navbar-top')
@include('components.sidebar')
    <section class='main-hero'>
        <div class="main-hero-wrapper">
            <h1>
                Introducing<br>
                <b>CUS</b>
            </h1>
            <a href="https://play.google.com/store/apps/details?id=user.com.cus&hl=in" class="button-white">
                <i class="fab fa-google-play"></i>&emsp;<span>GET APP</span>
            </a>
        </div>
    </section>

    <section class="main-about">
        <h1>ABOUT CUS</h1>
        <div class="main-about-wrapper">
            <div class="main-about-content">
                <h2>ANSWERING QUEUING PROBLEMS</h2>
                <p> 
                    CUS is a smartphone-based application that makes it
                    easier for customers to buy food by ordering in 
                    advance without having to wait for the order process
                    at the location.
                </p>
                <a href="/about">READ MORE</a>
            </div>
            <div class="main-about-content" id="ytplayer"></div>
        </div>
    </section>

    <section class="main-services">
        <h1>OUR SERVICES</h1>
        <div class="main-service-wrapper">
            <div class="main-service-card">
                <img src="{{URL::asset('assets/iconWishlist.svg')}}">
                <h2>WISHLIST</h2>
                <p>This feature will present details of the foods we like and are often purchased in
                repeated frequencies. In addition, the wish list feature is made to make it easier for
                users to make orders in the application without having to search for the merchant
                name.</p>
            </div>
            <div class="main-service-card">
                <img src="{{URL::asset('assets/iconGrocery.svg')}}">
                <h2>STORES NEAR ME</h2>
                <p>This feature makes it easy for users to find a merchant that is closest to the user with
                the help of online real time map visualization.
                </p>
            </div>
            <div class="main-service-card">
                <img src="{{URL::asset('assets/iconEstimation.svg')}}">
                <h2>SHOP DETAILS</h2>
                <p>In this feature, users will find out the merchant list according to the existing
                categories and information about the merchant such as merchant descriptions,
                opening hours, menu lists and prices of each menu.</p>
            </div>
            <div class="main-service-card">
                <img src="{{URL::asset('assets/iconMerchant.svg')}}">
                <h2>CUS FOR MERCHANTS</h2>
                <p>On the merchant side, the application has the main function for accepting orders and
                updating the stock availability in the merchant. This application also used to provide clear
                information of the orders and the customer who ordered.</p>
            </div>
        </div>
    </section>

    <section class="main-testimonial">
        <h1>TESTIMONIAL</h1>
        <div class="main-testimonial-wrapper">
            <div class="main-testimonial-card">
                <img src="{{URL::asset('assets/iconWishlist.svg')}}">
                <h2>JOHN DOE</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Pellentesque tempus pulvinar molestie. Pellentesque habitant
                    morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </p>
            </div>
            <div class="main-testimonial-card">
                <img src="{{URL::asset('assets/iconGrocery.svg')}}">
                <h2>MARY SUE</h2>
                <p>
                    Etiam enim velit, consequat vitae velit non, varius cursus elit. 
                    Vivamus ut arcu mauris. Sed sodales eu nibh tincidunt laoreet. 
                </p>
            </div>
            <div class="main-testimonial-card">
                <img src="{{URL::asset('assets/iconEstimation.svg')}}">
                <h2>SHOP DETAILS</h2>
                <p>
                    Nam fermentum ac ex in condimentum. Vivamus eget metus nec metus
                    bibendum mattis vel egestas nisi. In hac habitasse platea dictumst.
                </p>
            </div>
        </div>
    </section>

    <footer>
        <p>
            <i class="fas fa-copyright"></i> 2018 CUS, All Rights Reserved
            <ul>
                <li><a href="#"><i class="fab fa-youtube fa-2x"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter-square fa-2x"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-square fa-2x"></i></a></li>
            </ul>
        </p>
    </footer>

<script src="{{URL::asset('js/main-youtube.js')}}"></script>
@endsection
