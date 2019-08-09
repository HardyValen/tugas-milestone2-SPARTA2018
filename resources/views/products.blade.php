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
                    <li>
                    <b>History</b><br>
                    a. <b>On Going</b>:<br>
                    This feature displays orders for users who are in the process of working.<br>
                    b. <b>Completed</b>:<br>
                    This feature displays user orders that have been completed and paid.
                    </li>
                    <li>
                    <b>Search & Near Me</b><br>
                    This feature makes it easy for users to find a merchant that is closest to the user with the help of online real time meap visualization.
                    </li>
                    <li>
                    <b>Wish list</b><br>
                    This feature will present details of the foods we like and are often purchased in repeated frequencies. In addition, the wish list feature is made to make it easier for users to make orders in the application without having to search for the merchant name.
                    </li>
                    <li>
                    <b>Settings</b><br>
                    This feature will help users to change account data or exit the account. In this feature there are also questions discussed for additional user information.
                    </li>
                </ol>
            </p>
        </div>
        <div class="main-generic-item">
            <h2>CUS for Merchants</h2>
            <p>
                On the merchant side, the application has the main function for accepting orders and updating the stock availability in the merchant. This application also used to provide clear information of the orders and the customer who ordered.
            </p>
        </div>
        <div class="main-generic-item">
            <h2>The main features of the application are:</h2>
            <p>
                <ol>
                    <li>
                        <b>Order</b><br>
                        The merchants can accept or decline the order from the customer and also provide the order history.
                    </li>
                    <li>
                    <b>Stock</b><br>
                    Stock page lets the merchants update the menu in their restaurant.
                    </li>
                    <li>
                    <b>Company Profile</b><br>
                    Let the merchant to input the merchant information such as address, phone number, email and operational hours.
                    </li>
                </ol>
            </p>
        </div>
        <div class="main-generic-item">
            <h2>Value for The Customer</h2>
            <p>
                <ol>
                    <li>
                        <b>Easy order, simple and fast</b>; because by using CUS application, customer can make their order first without having to queue in line and wait for the order to be ready.
                        This feature makes it easy for users to find a merchant that is closest to the user with the help of online real time meap visualization.
                    </li>
                    <li>
                    <b>Boost productivity</b>; customer can do both jobs at the same time and still in control.
                    </li>
                    <li>
                    For merchants, they can get <b>additional revenue</b> and manage it <b>effectively</b>.
                    </li>
                </ol>
            </p>
        </div>
        <div class="main-generic-item">
            <h2>Life Cycle of CUS</h2>
            <p>
                It’s been a year since CUS team was first established, currently CUS is still in the pre-launch stage on the life cycle chart, we are targeting to launch the system in late September this year, this is due to the challenge that the team is facing with the technical problem of the application system. While the application itself is already available on the app store today, the system that runs the application isn’t ready yet.
            </p>
        </div>
        <div class="main-generic-item">
            <h2>Further Development for CUS</h2>
            <p>
                We envisioned CUS to grow exponentially in the future, there are several milestones that CUS team target over the next 2-5 years in the future. Below are the milestone with some details:
                <ul>
                    <li>
                        <b>Hiring IT Resource</b><br>
                        Currently, we are outsourcing an IT team create the application, they only work only for a limited time, by hiring IT resource we can have a team to maintain and develop the application system easily.
                    </li>
                    <li>
                    <b>>1000 Merchants</b><br>
                    We are targeting that by 1 year after launching we would have partnered with more than 1000 merchants all across Bandung.
                    </li>
                    <li>
                    <b>New Categories</b><br>
                    We are targeting that CUS will have new sets of features to book venues and new sets of category that needs queuing other than food and beverages.
                    </li>
                    <li>
                    <b>Limited Company</b><br>
                    Limited company status will enable CUS to grow and gain opportunities in partnering with more companies.
                    </li>
                    <li>
                    <b>Electronic Payment Method</b><br>
                    We are hoping that with an electronic payment, people would want to do more transaction. This can be achieved by partnering with a financial technology company or developing our own financial technology.
                    </li>
                </ul>
            </p>
        </div>
    </div>
</section>
@include('components.footer')
@endsection