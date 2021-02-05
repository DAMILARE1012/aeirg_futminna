@extends('partials.master')

@section('title', '| Units')

@section('content')

    <section id="services" class="services_area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h3 class="title">Our Research Units</h3>
                        <p>Our expertise cut across the following fields</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_service mt-30 text-center wow fadeInUpBig" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <div class="services_icon">
                            <img src="{{ asset('assets/images/1.jpg') }}" alt="Destination">
                        </div>

                        <div class="services_content">
                            <h4 class="title" style="font-size:18px!important;">E-Learning</h4>
                            <p class="text-left" style="font-size: 14px;">The E-Learning Research Unit, a mem... <a
                                    href="{{ route('Elearning') }}" class="btn btn-primary btn-sm">View Unit</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_service mt-30 text-center wow fadeInUpBig" data-wow-duration="1.3s"
                        data-wow-delay="0.4s">
                        <div class="services_icon">
                            <img src="{{ asset('assets/images/2.jpg') }}" alt="Destination">
                        </div>

                        <div class="services_content">
                            <h4 class="title" style="font-size:18px!important;">Antenna and Wave Propagation</h4>
                            <p class="text-left" style="font-size: 14px;">The advances in technology has made.... <a
                                    href="{{ route('awp') }}" class="btn btn-primary btn-sm">View Unit</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_service mt-30 text-center wow fadeInUpBig" data-wow-duration="1.3s"
                        data-wow-delay="0.6s">
                        <div class="services_icon">
                            <img src="{{ asset('assets/images/3.jpg') }}" alt="Destination">
                        </div>
                        <div class="services_content">
                            <h4 class="title" style="font-size:18px!important;">Autonomous Vehicles: Autotronics</h4>
                            <p class="text-left" style="font-size: 14px;">The Autonomous Vehicles, Autotronics,... <a
                                    href="{{ route('autotronics') }}" class="btn btn-primary btn-sm">View Unit</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_service mt-30 text-center wow fadeInUpBig" data-wow-duration="1.3s"
                        data-wow-delay="0.8s">
                        <div class="services_icon">
                            <img src="{{ asset('assets/images/4.png') }}" alt="Destination">
                        </div>
                        <div class="services_content">
                            <h4 class="title" style="font-size:18px!important;">Unmanned Aerial Vehicle(UAV)</h4>
                            <p class="text-left" style="font-size: 14px;">Experts in design, development... <a
                                    href="{{ route('uav') }}" class="btn btn-primary btn-sm">View Unit</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_service mt-30 text-center wow fadeInUpBig" data-wow-duration="1.3s"
                        data-wow-delay="0.8s">
                        <div class="services_icon">
                            <img src="{{ asset('assets/images/5.jpeg') }}" alt="Destination">
                        </div>
                        <div class="services_content">
                            <h4 class="title" style="font-size:18px!important;">Web & Mobile Dev.</h4>
                            <p class="text-left" style="font-size: 14px;">The web development unit is a member of ... <a
                                    href="{{ route('webDev') }}" class="btn btn-primary btn-sm">View Unit</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_service mt-30 text-center wow fadeInUpBig" data-wow-duration="1.3s"
                        data-wow-delay="0.8s">
                        <div class="services_icon">
                            <img src="{{ asset('assets/images/6.jpg') }}" alt="Destination">
                        </div>
                        <div class="services_content">
                            <h4 class="title" style="font-size:18px!important;">Precision Agriculture</h4>
                            <p class="text-left" style="font-size: 14px;">The Percision Agriculture Research... <a
                                    href="{{ route('precision_agric') }}" class="btn btn-primary btn-sm ">View Unit</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_service mt-30 text-center wow fadeInUpBig" data-wow-duration="1.3s"
                        data-wow-delay="0.8s">
                        <div class="services_icon">
                            <img src="{{ asset('assets/images/7.png') }}" alt="Destination">
                        </div>
                        <div class="services_content">
                            <h4 class="title" style="font-size:18px!important;">Power-Tech (PT)</h4>
                            <p class="text-left" style="font-size: 14px;">Specialists in the development,...<a
                                    href="{{ route('powerTech') }}" class="btn btn-primary btn-sm">View Unit</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single_service mt-30 text-center wow fadeInUpBig" data-wow-duration="1.3s"
                        data-wow-delay="0.8s">
                        <div class="services_icon">
                            <img src="{{ asset('assets/images/8.jpg') }}" alt="Destination">
                        </div>
                        <div class="services_content">
                            <h4 class="title" style="font-size:18px!important;">Digital Signal Processing (DSP)</h4>
                            <p class="text-left" style="font-size: 14px;">Specialists in the development,...<a href="#"
                                    class="btn btn-primary btn-sm disabled">View Unit</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials._footer')

@endsection
