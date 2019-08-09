@extends('template.skeleton')

@section('title', 'About CUS')

@section('content')
<<<<<<< HEAD
    @include('components.navbar-top')
=======
@include('components.navbar-top')
</br>
</br>
</br>
</br>
</br>
</br>
<center><img src = "{{URL::asset('assets/AboutUsImage.jpg')}}"></center>
<section class="main-about">
        <h1>ABOUT CUS</h1>
        <div class="main-about-wrapper">
            <div class="main-about-content">
</br>
                <h2><b>COMPANY PROFILE</b></h2>
                <p align = "justify">
                <font color = "#555555"> 
                Departing from a long line of problems in ordering food, CUS comes with a breakthrough 
                in modifying the queuing system. CUS is a smartphone-based application that makes it easier
                for customers to buy food by ordering in advance without having to wait for the order 
                process at the location. Our application is intended for more efficient use of time. 
                Basically, this application uses a take-away system to create convenience for users to buy 
                goods quickly. The difference with the usual take-away system is that users can order 
                directly through the application, this can reduce the time for the process of waiting for 
                orders. Additionally, our application also has “time estimation-feature” for taking orders. 
                This feature serves to make it easy for application users to estimate the time in taking/food 
                ordered.
                </p>
</br>
                <h2><b>OUR CONCERN</b></h2>
                <p align = "justify">
                CUS is created to accommodate offline food merchants as their Omni channel with the goal of 
                increasing their productivity and making offline shopping easier. Thus CUS vision is to become 
                the biggest and most trusted e-marketplace for offline store in Indonesia by improving the 
                customer experience and transaction efficiency.
                </p>
</br>
                <h2><b>MARKETING</b></h2>
                <p align = "justify">
                CUS is created to accommodate offline food merchants as their Omni channel with the goal of 
                increasing their productivity and making offline shopping easier. Thus CUS vision is to become 
                the biggest and most trusted e-marketplace for offline store in Indonesia by improving the 
                customer experience and transaction efficiency.
                </p>
</br>
                <h2><b>ECONOMICS</b></h2>
                <p align = "justify">
                The capital that CUS will need is estimated as much as Rp 38.150.000. In the current condition, 
                the majority of the equity is currently hold by CV Ganesha Globalindo as much as Rp 31.500.000 
                and the rest is by the member of CUS. Other than that, CUS already got some funding as much as 
                Rp 7.000.000 from Program Mahasiswa Wirausaha (PMW), Rp 500.000 from YoungPreneur Competition, 
                and Rp 5.000.000 from Lembaga Pengembangan Inovasi dan Kewirausahaan Institut Teknologi Bandung 
                (LPIK ITB). Although the estimated cost is covered, CUS is still trying to get more funding for 
                further development of the application and also to boost in terms of marketing matters.
                </p>
</br>
                <h2>
</font>
            </div>
            <div class="main-about-content" id="ytplayer"></div>
            </div>
        </div>
</section>
@include('components.footer')
>>>>>>> 723562eaec19c15a23f65487d1d387bdef965054
@endsection