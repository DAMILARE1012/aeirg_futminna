@extends('partials.master')

@section('title', '| e-Learning Unit')

@section('content')

    @yield('partials._navbar')

    <section id="about" class="about_area pt-130 pb-130">
        <div class="about_wrapper">

            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                        <div class="about_content">
                            <div class="section_title">
                                <h3 class="title" tyle="text-align: centre!important;">About <span>e-Learning Unit</span></h3>
                                <p style="text-align: justify;">
                                    The E-Learning Research Unit, a member of the Advanced Engineering Innovation Research
                                    Group (AEIRG) consists of researchers who specialise on the design, and deployment of
                                    state of the art Electronic learning management system. They specialize in the
                                    transformation of learning contents into multimedia interactive mode for the best
                                    learning experience. Well experienced in the deployment and development of learning
                                    content and outcome based learning assessment.
                                    <br>
                                    Core to our research work is the development of a seamless system for the realization of
                                    Educational learning goals and objectives at the primary, secondary and tertiary levels.
                                    EL is well poised to provide interactive learning features based on the standard
                                    instructional system design guidelines. We aim to create intuitive learning and teaching
                                    experiences for both learners and instructors and also to develop diverse ways of
                                    delivering learning.
                                    <br>
                                    The EL Research Unit will support education sector by bringing captivating videos and
                                    info-graphics that leaves the learner with an experiential feeling that enkindles the
                                    learner’s desire to study.

                                </p>
                                <h5 style="text-align: centre!important; color: red; margin-top: 10px;"><span>Vision</span>
                                </h5>
                                <p style="text-align: justify;">To be the hob for delivering E-learning services that will reposition the educational sector and change the narrative of education in Nigerian institutions and beyond.</p>

                                <h5 style="text-align: centre!important; color: red; margin-top: 10px;"><span>Mission</span>
                                </h5>
                                <p>
                                <ul style="list-style-type: square; margin-left: 50px;">
                                    <li>The mission of the EL Research Unit is to design, develop and deploy multimedia interactive Electronic learning environments where learners feel supported. The unit will engage in developing the capacity of partners and administrators in the education sector.</li>
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
                                    <span style="margin-left: 30px;">Learning management systems/portals, Offline mobile apps for learning, Student information systems, Computer-aided learning resource development, Instructional designs, Quality Assurance and Standardization, and Course Management Processes.
                                        </span> <br>
                                    <b>Applications</b> <br>
                                    <span style="margin-left: 30px;">Tertiary institutions, Secondary & primary schools, Training institutes, Agriculture, Entrepreneurship centres, Online learning, Online Coaching, Online personal development
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
                            <li>Multimedia development</li>
                            <li>Video creations</li>
                            <li>Interactive lesson creations</li>
                            <li>Captivating assessment</li>
                            <li>Learner centred</li>
                            <li>LMS development</li>
                            <li>Development of effective instructional strategy</li>

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
                            <img src="{{ asset('assets/images/units_pix/dr_caroline.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">Caroline Alenoghena (Ph.D)</h6>
                        <p class="text-muted">Team Lead</p>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/units_pix/kolo_ezra.jpeg') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">Kolo Ezra Zhiri</h6>
                        <p class="text-muted">Full Stack and Mobile App Developer</p>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/units_pix/benjamen.jpeg') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">Benjamin Alenoghena</h6>
                        <p class="text-muted">Full Stack Web Developer</p>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-box text-center py-3 rounded mt-4">
                        <div class="team-img">
                            <img src="{{ asset('assets/images/units_pix/damilare.jpeg') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h6 class="f-18 mt-4 mb-2">Olatunji Damilare</h6>
                        <p class="text-muted">Front-End Web Developer</p>
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
