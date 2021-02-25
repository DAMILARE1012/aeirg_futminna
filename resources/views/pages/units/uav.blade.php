@extends('partials.master')

@section('title', '| Autonomous Systems & Mobility Research Unit')

@section('content')

    @yield('partials._navbar')

    <section id="about" class="about_area pt-130 pb-130">
        <div class="about_wrapper">

            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                        <div class="about_content">
                            <div class="section_title">
                                <h3 class="title" tyle="text-align: centre!important;">About <span>Autonomous Systems &
                                        Mobility Research Unit</span></h3>
                                <p style="text-align: justify;">Experts in design, development and usage of advanced signal
                                    processing and autonomous systems for a wide array of scientific applications
                                    <br>
                                    The Autonomous Systems and Mobility Research Unit, a member of the Advanced Engineering
                                    Innovation Research Group (AEIRG) uses off-the-shelf and custom in-house-built drones
                                    for a wide array of applications. The research unit consists of researchers who
                                    specialise on various aspects of drone design and usage which allows for design and
                                    develop of custom-made drones for specific applications.
                                    <br>

                                    Core to our research work is the coupling of the algorithmic design and the design of
                                    the digital system in order to expose the hardware platform characteristics to the
                                    algorithm, but also to guide the hardware architecture design through the
                                    characteristics of the algorithm.
                                    <br>
                                    The ASM Research Unit will support education by bringing real-world UAV development into
                                    undergraduate and graduate level courses. We work with academia and industry to explore
                                    potential UAV uses and opportunities, such as precision agriculture, monitoring and
                                    surveillance of critical assets as well as developing a framework for safely integrating
                                    UAVs into the national airspace.

                                </p>
                                <h5 style="text-align: centre!important; color: red; margin-top: 10px;"><span>Vision</span>
                                </h5>
                                <p style="text-align: justify;">To be the go-to centre for delivering drone and ground robot
                                    solutions to the country in both military and civilian applications and across different
                                    fields of human endeavour.</p>

                                <h5 style="text-align: centre!important; color: red; margin-top: 10px;"><span>Mission</span>
                                </h5>
                                <p>
                                <ul style="list-style-type: square; margin-left: 50px;">
                                    <li>The ASM Research Unit will educate, train and develop local competence in
                                        contemporary autonomous systems development while leveraging on advanced signal
                                        processing techniques through the synthesis, analysis, experimentation, and design
                                        of unmanned systems for proffering practical solutions to day-to-day problems and
                                        achieving industry 4.0 in Nigeria.</li>
                                    {{-- <li>Partner with other research communities to create a culture of high achievement.</li>
                                            <li>Create integrated services, transparent research administration, infrastructure, and streamlined processes</li>
                                            <li>Enhance the ability to perform research in a global community and support strong infrastructure for interdisciplinary research</li> --}}
                                </ul>
                                </p>

                                {{-- <h5 style="text-align: centre!important; color: red; margin-top: 2px;"><span>Expertise and Applications</span></h5>
                                    <p style="text-align: justify;">
                                        <b>Expertise</b><br>
                                        <span style="margin-left: 30px;">Energy conversion and utilisation, Demand-side management, Artificial Intelligence, IoT, Systems Automation, Robotics and Mechatronics, Blockchain, DG Planning and Optimisation, FACTS Planning and Optimisations</span> <br> 
                                    <b>Applications</b> <br>
                                    <span style="margin-left: 30px;">Demand-side management, Energy efficiency, Energy Audit, Integrated Energy Services, Modern energy products development, Infrastructure retrofitting, Creative Business model</span> 
                                        </p> --}}
                            </div>
                            {{-- <a href="javascript:void(0)" class="main-btn">Read More</a> --}}
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
                        <p style="margin-left: 30px"> <em>The ASM Research Unit focuses on the areas of:</em>
                        <ul style="list-style-type: square; margin-left: 50px; padding-top:5px;">
                            <li>Unmanned Aerial Systems</li>
                            <li>Ground moving robots</li>
                            <li>Intelligent Systems</li>
                            <li>Integration of UAVs into civilian airspace and activities which include precision
                                agriculture, surveying for civilian and mapping application</li>
                            <li>Long endurance unmanned operations.</li>
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
                            <img src="{{ asset('assets/images/units_pix/dr_daniyan.jpeg') }}"
                                class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">Abdullahi Daniyan (Ph.D)</h6>
                        <p class="text-muted">Team Lead</p>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/units_pix/dr_folorunso.jpg') }}"
                                class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">Abiodun Taliha Folorunso(Ph.D)</h6>
                        <p class="text-muted">Co-Researcher</p>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/units_pix/ifetola.png') }}" class="img-fluid rounded-circle"
                                alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">Ifetola Madaki</h6>
                        <p class="text-muted">Research Assistant</p>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/units_pix/attaihru.png') }}"
                                class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">Attahiru Jibril</h6>
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
