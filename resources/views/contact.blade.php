@extends('template.skeleton')

@section('title', 'Contact Us - CUS')

@section('content')
    @include('components.navbar-top')
</br>
</br>
</br>
</br>
</br>
</br>
<center><img src = "{{URL::asset('assets/ContactUsImage.png')}}" ></center>
<section class = "main-about">

</section>
<center><img src = "{{URL::asset('assets/MapImage.jpg')}}" box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) style = "width:30%;height:30%"></center>
@include('components.footer')
@endsection