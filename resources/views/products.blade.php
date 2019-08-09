@extends('template.skeleton')

@section('title', 'Terms and Conditions - CUS')

@section('content')
    @include('components.navbar-top')
    @include('components.sidebar')

<section class="main-generic">
    <div class="main-generic-wrapper">
        <img src="{{URL::asset('assets/feature.svg')}}" class="image">
        <h1 class='main-generic-item'>PRODUCTS & SERVICES</h1>
        <div class="main-generic-item">
            <h2>CUS for User</h2>
            <p>
                The following is the flow of using the CUS application for users:
                <ol>
                    <li>Customers select type of foods on the homepage of the application.</li>
                    <li>Customers select the specific merchant to choose on the list of merchant page.</li>
                    <li>Customers enter the estimated time for when the food will be picked up.</li>
                    <li>The order will be received and processed by the merchant according to the information given by the user.</li>
                    <li>The order is processed and finished prior to the given estimated time.</li>
                    <li>The user arrives at the given estimated time, and pay the merchant with the amount stated in the application.</li>
                </ol>
            </p>
        </div>
        <div class="main-generic-item">
            <h2>Application Features</h2>
            <p>
                <ol>
                    <li>
                        <b>Home</b><br>
                        Besides being the main display after logging in, the main functions available in the
                        application starts from the Home menu. In the Home menu, users can choose the
                        available food categories. Food categories available in CUS application are
                        martabak, chicken and duck, noodles and meatballs, fried rice, desserts, and
                        beverages. From these category, then the user can choose the food they wanted to
                        order.
                    </li>
                    <li>
                    <b>List and shop details</b><br>
                    In this feature, users will find out the merchant list according to the existing
                    categories and information about the merchant such as merchant descriptions,
                    opening hours, menu lists and prices of each menu.
                    </li>
                    <li>Customers enter the estimated time for when the food will be picked up.</li>
                    <li>The order will be received and processed by the merchant according to the information given by the user.</li>
                    <li>The order is processed and finished prior to the given estimated time.</li>
                    <li>The user arrives at the given estimated time, and pay the merchant with the amount stated in the application.</li>
                </ol>
            </p>
        </div>

    </div>
</section>
@include('components.footer')
@endsection