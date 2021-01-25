@extends('partials.master')

@section('title', '| Antenna and Wave Propagation Unit')

@section('content')

    @yield('partials._navbar')

    <section id="about" class="about_area pt-130 pb-130">
        <div class="about_wrapper">

            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                        <div class="about_content">
                            <div class="section_title">
                                <h3 class="title" tyle="text-align: centre!important;">About <span style="font-size: 25px;"> Antenna and Wave
                                        Propagation Unit</span></h3>
                                <p style="text-align: justify;">
                                    The advances in technology has made communication between multiple electrical appliances
                                    possible. This is the concept of internet of things where every and any device can
                                    communicate using the internet. With the development of 5G and ongoing research on 6G,
                                    the deployment of communication system in most electrical devices is inevitable. For
                                    these devices to communicate between each other, signals are transmitted between these
                                    devices using antenna systems embedded in them at a given frequency band.
                                    <br>
                                    This research group aims to study, design, build and test antenna systems to improve
                                    communication between devices and how external factors affect the system. The group will
                                    work on environmentally friendly material for development of antenna system in line with
                                    Sustainable Development Goals (SDGs) focusing on SDG 9 (Industry, innovation and
                                    infrastructure) and SDG 13 (Climate Action).
                                    <br>
                                    This will give students opportunity to apply theoretical knowledge gained in the class
                                    to practical and hands-on experience.

                                </p>
                                {{-- <h5 style="text-align: centre!important; color: red; margin-top: 10px;"><span>Vision</span>
                                </h5>
                                <p style="text-align: justify;">To become the hub of emerging tech-enabled solutions and
                                    innovation, thereby ensuring and aiding access to safe, affordable, reliable,
                                    sustainable and modern energy in Nigeria.</p> --}}

                                <h5 style="text-align: centre!important; color: red; margin-top: 10px;"><span>Mission</span>
                                </h5>
                                <p>
                                <ul style="list-style-type: square; margin-left: 50px;">
                                    <li>The mission of the group is to improve on antenna systems to make communication more
                                        efficient. The research group is focused on development of antenna system to meet
                                        the evolving communication system.</li>
                                    {{-- <li>Partner with other research communities to create
                                        a culture of high achievement.</li>
                                    <li>Create integrated services, transparent research administration, infrastructure, and
                                        streamlined processes</li>
                                    <li>Enhance the ability to perform research in a global community and support strong
                                        infrastructure for interdisciplinary research</li> --}}
                                </ul>
                                </p>

                                <h5 style="text-align: centre!important; color: red; margin-top: 2px;"><span>Required
                                        Resources</span></h5>
                                <p style="text-align: justify;">
                                    <b>Software</b><br>
                                    <span style="margin-left: 30px;">Empire XPU (EM Modelling Tool), CST STUDIO SUITE (EM
                                        Modelling Tool), MALTAB
                                    </span> <br>
                                    <b>Applications</b> <br>
                                    <span style="margin-left: 30px;">Computer system with Very High Processing speed and
                                        large storage, 3D Printer, Vector Network Analyzer with a calibration kit, Spectrum
                                        Analyzer, Signal generator
                                    </span>
                                </p>
                            </div>
                            {{-- <a href="javascript:void(0)" class="main-btn">Read More</a>
                            --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about_counter d-flex flex-wrap" style="justify-content: center">
                            <div class="single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig"
                                data-wow-duration="1.3s" data-wow-delay="0.2s">
                                <div class="counter_wrapper">
                                    <span class="counter">14</span>
                                    <p>Executed Projects</p>
                                </div>
                            </div>
                            <div class="single_counter counter_2 d-flex justify-content-center align-items-center wow fadeInUpBig"
                                data-wow-duration="1.3s" data-wow-delay="0.5s">
                                <div class="counter_wrapper">
                                    <span class="counter">1</span>
                                    <p>Industrial Partners</p>
                                </div>
                            </div>
                            <div class="single_counter counter_2 d-flex justify-content-center align-items-center wow fadeInUpBig"
                                data-wow-duration="1.3s" data-wow-delay="0.8s">
                                <div class="counter_wrapper">
                                    <span class="counter">2</span>
                                    <p>Academic Partners</p>
                                </div>
                            </div>

                            <div class="single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig"
                                data-wow-duration="1.3s" data-wow-delay="1.1s">
                                <div class="counter_wrapper">
                                    <span class="counter">4</span>
                                    <p>Team Members</p>
                                </div>
                            </div>


                        </div>

                        <h5 style="text-align: centre!important; color: red; margin-top: 10px;"><span
                                style="margin: 20px;">Focus</span></h5>
                        <p style="margin-left: 30px"> <em>Our focus at EnerTech Research Unit covers:</em>
                        <ul style="list-style-type: square; margin-left: 50px; padding-top:5px;">
                            <li>Antenna system</li>
                            <li>5G</li>
                            <li>Biodegradable conductive material</li>
                            <li>3D printing of Antenna</li>
                            <li>On-body/ Wearable Antenna System</li>
                            <li>Specific Absorption Rate (SAR)</li>
                        </ul>
                        </p>

                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- ======= Team Composition ======= -->
    <section class="section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h3 class="title-heading mt-4">Our Team</h3>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-2">
                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/pix.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">Seun Ojerinde (Ph.D)</h6>
                        <p class="text-muted">Team Lead</p>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/pix.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2"> Taliha Abiodun Folorunso(Ph.D)</h6>
                        <p class="text-muted">Senior Researcher</p>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/person1.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">Ifetola Madaki</h6>
                        <p class="text-muted">Research Assistant</p>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/person1.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">Olusola Afolarin</h6>
                        <p class="text-muted">Research Assistant</p>
                        <hr>
                    </div>
                </div>

                {{-- <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/pix.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">David Michael (Ph.D)</h6>
                        <p class="text-muted">Team Lead</p>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/pix.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">Olatomiwa Lanre(Ph.D)</h6>
                        <p class="text-muted">Senior Researcher</p>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/pix.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">Yusuf </h6>
                        <p class="text-muted">Senior Researcher</p>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/pix.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2"> Adedigba Yinka</h6>
                        <p class="text-muted">Researcher</p>
                        <hr>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- END TEAM -->

    <!-- team -->


    {{-- <details>
        <summary>
            Click me to see more details
        </summary>

        <p>
            Details shown after click on the "summary" element.
        </p>
    </details> --}}

    <!-- //team -->
    <!-- End Contact Section -->


    @include('partials._footer')

@endsection
