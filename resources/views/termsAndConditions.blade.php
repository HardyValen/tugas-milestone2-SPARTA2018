@extends('template.skeleton')

@section('title', 'Terms and Conditions - CUS')

@section('content')
    @include('components.navbar-top')
</br>
</br>
</br>
</br>
</br>
</br>
<center><img src = "{{URL::asset('assets/TermsAndConditionsImage.png')}}"></center>
<section class = "main-about">
    <h1><center>TERMS OF USE</center></h1>
    <div class = "main-about-wrapper">
        <div class = "main-about-content">
            <font color = "#555555">
            <p align = "justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec odio ultricies, 
            dignissim justo a, <b>ullamcorper</b> sem. Sed vel accumsan justo, non elementum lacus. Donec 
            iaculis pellentesque ex, ut gravida nibh rhoncus sit amet. Duis pulvinar felis et dui 
            molestie dictum. Aliquam a ipsum eget ex ultricies accumsan. Vestibulum at enim non 
            metus <b>rhoncus elementum</b>. Curabitur in nisi ex. Proin quis risus tincidunt, commodo arcu 
            eu, varius velit. Nunc facilisis ex vitae tortor (placerat) <b>malesuada</b>. In tellus magna, 
            rhoncus in feugiat et, dapibus in lacus. Mauris eget pulvinar augue.
            </p>
</br>
            <h2><b>GENERAL</b></h2>
            <p align = "justify">
                <ol>
                    <li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec odio 
                    ultricies, dignissim justo a, ullamcorper sem.
                    </li>
                    <li>
                    Sed vel accumsan justo, non elementum lacus. Donec iaculis pellentesque ex, ut 
                    gravida nibh rhoncus sit amet.
                    </li>
                </ol>
            </p>
</br>
            <h2><b>APPLICATION USAGE</b></h2>
            <p align = "justify">
                <ol>
                    <li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec odio 
                    ultricies, dignissim justo a, ullamcorper sem.
                    </li>
                    <li>
                    Sed vel accumsan justo, non elementum lacus. Donec iaculis pellentesque ex, ut 
                    gravida nibh rhoncus sit amet.
                    </li>
                    <li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec odio 
                    ultricies, dignissim justo a, ullamcorper sem.
                    </li>
                    <li>
                    Sed vel accumsan justo, non elementum lacus. Donec iaculis pellentesque ex, ut 
                    gravida nibh rhoncus sit amet.
                    </li>
                </ol>
            </p>
</br>
            <h2><b>PAYMENT</b></h2>
            <p align = "justify">
                <ol>
                    <li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec odio 
                    ultricies, dignissim justo a, ullamcorper sem.
                    </li>
                    <li>
                    Sed vel accumsan justo, non elementum lacus. Donec iaculis pellentesque ex, ut 
                    gravida nibh rhoncus sit amet.
                    </li>
                    <li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec odio 
                    ultricies, dignissim justo a, ullamcorper sem.
                    </li>
                </ol>
            </p>
        </div>
        <div class="main-about-content" id="ytplayer"></div>
        </div>
    </div>
</section>
@include('components.footer')
@endsection