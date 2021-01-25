@extends('partials.master')

@section('title', '| AVAC Unit')

@section('content')

    @yield('partials._navbar')

    <section id="about" class="about_area pt-130 pb-130">
        <div class="about_wrapper">

            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                        <div class="about_content">
                            <div class="section_title">
                                <h3 class="title" tyle="text-align: centre!important;">About <span> AVAC Unit </span></h3>
                                <p style="text-align: justify;">
                                    The Autonomous Vehicles, Autotronics, and Control (AVAC) Unit of the Advanced
                                    Engineering Innovation Research Group (AEIRG) is a sub-group that deals with research
                                    and development of autonomous vehicles (AVs) and unmanned ground vehicles (UGVs). The
                                    group applies linear and nonlinear control engineering principles in the design and
                                    fabrication of AVs and UGVs for various sectors across the academic, industrial, and
                                    commercial spectrum. The group will develop AV control schemes for transport,
                                    agriculture, security, education, and health sectors.
                                    <br>

                                </p>
                                <h5 style="text-align: centre!important; color: red; margin-top: 10px;"><span>Vision</span>
                                </h5>
                                <p style="text-align: justify;">To become a leading centre in autonomous vehicles and
                                    control engineering research and development across the public and private sectors.</p>

                                <h5 style="text-align: centre!important; color: red; margin-top: 10px;"><span>Mission</span>
                                </h5>
                                <p>
                                <ul style="list-style-type: square; margin-left: 50px;">
                                    <li>The AVAC unit will conduct research, development and capacity building in state of
                                        the art technologies in autonomous vehicles and control engineering through the
                                        design and implementation of solutions across academia, industry, and government.
                                    </li>
                                    {{-- <li>Partner with other research communities to create
                                        a culture of high achievement.</li>
                                    <li>Create integrated services, transparent research administration, infrastructure, and
                                        streamlined processes</li>
                                    <li>Enhance the ability to perform research in a global community and support strong
                                        infrastructure for interdisciplinary research</li> --}}
                                </ul>
                                </p>

                                <h5 style="text-align: centre!important; color: red; margin-top: 2px;"><span>Expertise and
                                        Applications</span></h5>
                                <p style="text-align: justify;">
                                    <b>Expertise</b><br>
                                    <span style="margin-left: 30px;">Computer Vision, Machine Learning, Embedded Systems,
                                        Linear and Nonlinear Control, Autonomous Navigation, Perception and Sensing,
                                        Internet of Things (IoT)
                                    </span> <br>
                                    <b>Applications</b> <br>
                                    <span style="margin-left: 30px;">Road Safety, Vehicle Automation, Supervisory Control,
                                        Monitoring and Surveillance, Payload Delivery and Transportation, Remote Perception,
                                        Data Acquisition
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
                        <p style="margin-left: 30px"> <em>The research focus of the AVAC unit are in the following
                                areas:</em>
                        <ul style="list-style-type: square; margin-left: 50px; padding-top:5px;">
                            <li>Autonomous Vehicles</li>
                            <li>Automobile Electronics (Autotronics)</li>
                            <li>Control Engineering</li>
                            <li>Vehicle Perception</li>
                            <li>Machine Learning</li>
                            <li>Remote Monitoring and Control</li>

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
                        <h6 class="f-18 mt-4 mb-2">Jibril Abdullahi Bala</h6>
                        <p class="text-muted">Team Lead</p>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/pix.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">Abiodun Taliha Folorunso(Ph.D)</h6>
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
