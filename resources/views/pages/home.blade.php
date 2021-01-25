
@extends('partials.master')

@section('title', '| Home')

@section('content')

@yield('partials._navbar')

<div id="home" class="header_slider" style="height: 100vh; width:100vw;">
    <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url({{ asset('assets/images/hero-area.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="slider_content">
                        <h2 class="slider_title wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.2s">Advanced Engineering Innovation <span> Research Group</span></h2>
                        <p class="wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">An industry-oriented, multi-disciplinary, research group that specialize in research and development...</p>
                        <a href="{{ route('about') }}" class="main-btn wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.8s">Read More</a>
                    </div> 
                </div>
            </div> 
        </div> 
    </div> 
</div>



@endsection
