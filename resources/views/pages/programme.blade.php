@extends('partials.master')

@section('title', '| Seminars')

@section('content')

    <section id="packges" class="destination_area pt-130 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h3 class="title">Programmes</h3>
                        <p>Organized programmes for members' growth...</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/aeirg_retreat1.jpeg') }}" alt="Destination">
                        </div>

                        <div class="destination_content">
                            <span class="main-btn" style="color: red;"><b>11 & 12 Jan, 2021</b></span>
                            <h4 class="title" ><span style="font-size: 16px;">Theme: <b>Breaking New Grounds</b></span></h4>
                            <p class="price">
                                <a class="price" href="{{ route('programme1') }}" 
                                    rel=”noreferrer”><b>View More</b></a>
                            </p>
                            <a class="more" href="#" target="_blank" rel=”noreferrer”><i
                                    class="lni lni-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials._footer')

@endsection
