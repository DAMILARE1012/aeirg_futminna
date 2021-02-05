@extends('partials.master')

@section('title', '| Seminars')

@section('content')

    <section id="packges" class="destination_area pt-130 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h3 class="title">Seminars</h3>
                        <p>Organized programmes for growth and development...</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/tef_2021.png') }}" alt="Destination">
                        </div>

                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn" style="color: red;"><b>Jan 27, 2021</b></a>
                            <h4 class="title"><a href="#" target="_blank"
                                    rel=”noreferrer”>2021 TEF Entrepreneurship Training Programme</a></h4>
                            <p class="price">
                                <a class="price" href="#" target="_blank"
                                    rel=”noreferrer”><b>Closed</b></a>
                            </p>
                            <a class="more" href="#" target="_blank" rel=”noreferrer”><i
                                    class="lni lni-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/pms.jpg') }}" alt="Destination">
                        </div>
                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2020</a>
                            <h4 class="title"><a href="javascript:void(0)">Artificial Intelligence for Pipeline Monitoring
                                    System (AI4PMS) funded by TETFUND</a></h4>
                            <p class="price">Fund - <b>N 38, 288, 276.00</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/wireless.jpg') }}" alt="Destination">
                        </div>
                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2020</a>
                            <h4 class="title"><a href="javascript:void(0)">Fabrication of Intelligent Wireless Mobile Phone
                                    Battery Charger, funded by (NCC)</a></h4>
                            <p class="price">Fund - <b>N 6, 2589, 990.30</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/e-waste.jpg') }}" alt="Destination">
                        </div>

                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2020</a>
                            <h4 class="title"><a href="javascript:void(0)">Valorizing e-Waste in Nigeria, funded by
                                    University of Leeds, Leeds</a></h4>
                            <p class="price">Fund - <b>£2,000.00</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/sabi_MONI.png') }}" alt="Destination">
                        </div>

                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2020</a>
                            <h4 class="title"><a href="javascript:void(0)">Development of Financial Literacy e-Learning
                                    Platform by GIZ, Nigeria</a></h4>
                            <p class="price">Fund - <b> N 18, 325, 700.00 </b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    @include('partials._footer')

@endsection
