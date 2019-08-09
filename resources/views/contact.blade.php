@extends('template.skeleton')

@section('title', 'Contact Us - CUS')

@section('content')
    @include('components.navbar-top')
    @include('components.sidebar')

<section class="main-generic">
    <div class="main-generic-wrapper">
        <img src="{{URL::asset('assets/ContactUsImage.png')}}" class="image">
        <h1 class='main-generic-item'>CONTACT US</h1>
        <div class="main-generic-item">
            <h2 style='text-align:center'>MAIN OFFICE</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.980654493229!2d107.60824284930509!3d-6.892917069340721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e650e6fe4b61%3A0x2e7653f6a4d58ccc!2sJl.+Ganesa+No.10%2C+Lb.+Siliwangi%2C+Kecamatan+Coblong%2C+Kota+Bandung%2C+Jawa+Barat+40132!5e0!3m2!1sen!2sid!4v1565350545741!5m2!1sen!2sid" frameborder="0" class='iframe-map' allowfullscreen></iframe>
            <p style='text-align:center'>
                <b>Jl. Ganesha No.10, Lb. Siliwangi,</b><br>
                Kecamatan Coblong, Kota Bandung,<br>
                Jawa Barat 40132
            </p>
        </div>
        <div class="main-generic-item">
            <!-- Filbert tolong -->
        </div>
    </div>
</section>

    @include('components.footer')
@endsection