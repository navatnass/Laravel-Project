@extends('front.layouts.document')
@section('content')
<link rel="stylesheet" href="{{asset ('css/front/main_page_header.css') }}">
<section>
    <header>
        <div class="nav-box">
            <img class="logotype" 
            src="{{ asset('storage/images/logotruck.jpg') }}" 
            alt="Logotype">
            <nav>
                <ul class="nav-links">
                    <li>
                        <a class="active" style="left: -600px;" href="{{route('front.home')}}">{{__('Home')}}</a>
                    </li>
                    <li>
                        <a class="active" style="left: -600px;" href="{{route('front.trucks.index')}}">{{__('Trucks')}}</a>
                    </li>
                </ul>
            <img class="lang-en"
                src="{{ asset('storage/images/flagen.png') }}" 
                alt="lang">
                <a class="lang-en" href="/lang/en"></a>
            <img class="lang-lt" 
                src="{{ asset('storage/images/flaglt.png') }}" 
                alt="lang">
                <a class="lang-lt" href="/lang/lt"></a>
            </nav>
        </div>
        <div class="nav-line"></div>
    </header>

    <div class="truck-text">
        <h2 style="margin-left: 550px; margin-top: 170px" >
            {{ ($truck->make ?? '') }} {{ ($truck->model ?? '') }}
        </h2>
    </div>

    <div class="images-wrapper">
        <div class="portfolio-box-laptop-version">
            <img class="image-popup-toggle first-portfolio-example" 
                src="{{asset('storage/images/' . ($truck->image ?? ''))}}" 
                alt="truck">
        </div>

        {{-- //POPUP EFFECT --}}

        <div class="popup-laptop d-none">
            <div class="top-bar">
                <div class="exit"></div>
            </div>
            <img class="image-popup first-portfolio-example-large-image" src="{{asset('storage/images/' . ($truck->image ?? ''))}}" alt="truck">
        </div>  
    </div>
</section>

<script src="{{asset ('js/front/popup.js') }}"></script>
@endsection
