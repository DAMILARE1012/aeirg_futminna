@extends('partials.master')

@section('title', '| About')

@section('content')

@yield('partials._navbar')

    <section id="about" class="about_area pt-130 pb-130">
        <div class="about_wrapper">
           
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-6">
                            <div class="about_content">
                                <div class="section_title">
                                    <h3 class="title" tyle="text-align: centre!important;">About <span>Us</span></h3>
                                    <p style="text-align: justify;">An industry-oriented, multi-disciplinary, research group that specialize in research and development, governmental contracting, and commercialization of innovations.<br>The activities of the group range from basic and applied research to commercialization through partnership with industries, other educational institutions and defense industry.</p>
                                    <h5 style="text-align: centre!important; color: red; margin-top: 10px;"><span>Vision</span></h5>
                                    <p style="text-align: justify;">To create an outstanding climate of research innovations and services for Nigerian community.</p>

                                    <h5 style="text-align: centre!important; color: red; margin-top: 10px;"><span>Mission</span></h5>
                                    <p>
                                        <ul style="list-style-type: square; margin-left: 50px;">
                                            <li>Enhance researchers’ abilities to obtain and manage grants.</li>
                                            <li>Partner with other research communities to create a culture of high achievement.</li>
                                            <li>Create integrated services, transparent research administration, infrastructure, and streamlined processes</li>
                                            <li>Enhance the ability to perform research in a global community and support strong infrastructure for interdisciplinary research</li>
                                        </ul>
                                    </p>
                                </div> 
                                {{--  <a href="javascript:void(0)" class="main-btn">Read More</a>  --}}
                            </div>
                        </div> 
                        <div class="col-lg-6">
                            <div class="about_counter d-flex flex-wrap" style="justify-content: center">
                                <div class="single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                    <div class="counter_wrapper">
                                        <span class="counter">134</span>
                                        <p>Executed Projects</p>
                                    </div> 
                                </div> 
                                <div class="single_counter counter_2 d-flex justify-content-center align-items-center wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                                    <div class="counter_wrapper">
                                        <span class="counter">5</span>
                                        <p>Industrial Partners</p>
                                    </div> 
                                </div> 
                                <div class="single_counter counter_2 d-flex justify-content-center align-items-center wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                    <div class="counter_wrapper">
                                        <span class="counter">6</span>
                                        <p>Academic Partners</p>
                                    </div> 
                                </div> 
                            
                                <div class="single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="1.1s">
                                    <div class="counter_wrapper">
                                        <span class="counter">26</span>
                                        <p>Team Members</p>
                                    </div> 
                                </div> 
                            </div> 
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="team-box text-center py-3 rounded mt-4">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/units_pix/prof_musa.jpeg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h6 class="f-18 mt-4 mb-2">Abiodun Musa Aibinu (Ph.D)</h6>
                            <p class="text-muted">Group Coordinator</p>
                            <hr>
                        </div>
                    </div>
                </div>
                
    
                <div class="row mt-5 pt-2">
                    <div class="col-lg-3">
                        <div class="team-box text-center py-3 rounded mt-4">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/units_pix/dr_caroline.png') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h6 class="f-18 mt-4 mb-2">Alenoghena Caroline (Ph.D)</h6>
                            <p class="text-muted">Team Lead: e-Learning </p>
                            <hr>
                        </div>
                    </div>
    
                    <div class="col-lg-3">
                        <div class="team-box text-center py-3 rounded mt-4">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/units_pix/dr_folorunso.jpg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h6 class="f-18 mt-4 mb-2">T.A. Folorunso(Ph.D)</h6>
                            <p class="text-muted">Team Lead: Precision Agric.</p>
                            <hr>
                        </div>
                    </div>
    
                    <div class="col-lg-3">
                        <div class="team-box text-center py-3 rounded mt-4">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/units_pix/dr_sadiq.jpeg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h6 class="f-18 mt-4 mb-2"> S.A. Abubakar(Ph.D)</h6>
                            <p class="text-muted">Team Lead: Power-Tech</p>
                            <hr>
                        </div>
                    </div>
    
                    <div class="col-lg-3">
                        <div class="team-box text-center py-3 rounded mt-4">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/pix.png') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h6 class="f-18 mt-4 mb-2">Seun Ojerinde (Ph.D)</h6>
                            <p class="text-muted">Team Lead: AWP</p>
                            <hr>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="team-box text-center py-3 rounded mt-4">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/units_pix/dr_daniyan.jpeg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h6 class="f-18 mt-4 mb-2">Abdullahi Daniyan(Ph.D)</h6>
                            <p class="text-muted">Team Lead: AWP</p>
                            <hr>
                        </div>
                    </div>
    
                    <div class="col-lg-3">
                        <div class="team-box text-center py-3 rounded mt-4">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/units_pix/jibril_bala.jpeg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h6 class="f-18 mt-4 mb-2">J.A. Bala</h6>
                            <p class="text-muted">Team Lead: Autotronics</p>
                            <hr>
                        </div>
                    </div>
    
                    <div class="col-lg-3">
                        <div class="team-box text-center py-3 rounded mt-4">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/units_pix/kolo_ezra.jpeg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h6 class="f-18 mt-4 mb-2">Ezra Zihri Kolo </h6>
                            <p class="text-muted">Team Lead: Software Dev.</p>
                            <hr>
                        </div>
                    </div>
    
                    <div class="col-lg-3">
                        <div class="team-box text-center py-3 rounded mt-4">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/pix.png') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h6 class="f-18 mt-4 mb-2"> A.P. Adedigba </h6>
                            <p class="text-muted">Team Lead: DSP</p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END TEAM -->

    <!-- team -->
<section class="team py-5" id="team">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold">Our Academic Partners</h3>
        <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4"></p>
        <div class="row ab-info second pt-lg-4">
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/futminna.png') }}" alt="futminna image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://futminna.edu.ng">
                            <h6 class="text-team-w3">Federal University of Technology Minna</h6>
                        </a>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/huddersfield.png') }}" alt="huddersfield image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">

                        <a href="https://www.hud.ac.uk/">
                            <h6 class="text-team-w3">University of Huddersfield</h6>
                        </a>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/ibbul.jpeg') }}" alt="ibbul image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://ibbu.edu.ng/">
                            <h6 class="text-team-w3">Ibrahim Badamasi Babangida University Lapai</h6>
                        </a>
                        
                    </div>
                </div>
            </div>

        </div>

        <div class="row ab-info second pt-lg-4">
            

            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/lautech.png') }}" alt="lautech image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://www.lautech.edu.ng/">
                            <h6 class="text-team-w3">Ladoke Akintola University of Technology Ogbomosho</h6>
                        </a>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/manchester.png') }}" alt="manchester image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://www2.mmu.ac.uk/">
                            <h6 class="text-team-w3">Manchester Metropolitan University</h6>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/techu.png') }}" alt="techu image" height="150" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://tech-u.edu.ng/">
                            <h6 class="text-team-w3">First Technical University</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <h3 class="tittle text-center font-weight-bold">Our Industrial Partners</h3>
        <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4"></p>
        <div class="row ab-info second pt-lg-4">
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/susej.jpeg') }}" alt="susej image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://susejgroup.org/">
                            <h6 class="text-team-w3">SUSEJ Nigeria Limited</h6>
                        </a>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/basic.png') }}" alt="basic image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">

                        <a href="https://basicworks.com.ng/">
                            <h6 class="text-team-w3">Basic Electrical Electronics Works Limited</h6>
                        </a>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 Tumbnail text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/buypower.png') }}" alt="buypower image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://susejgroup.org/">
                            <h6 class="text-team-w3">Buy Power</h6>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row ab-info second pt-lg-4">    
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/eclipsepower.jpg') }}" alt="eclipsepower image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">
                        <a href="https://eclipsepower.ng/">
                            <h6 class="text-team-w3">Eclipse Power</h6>
                        </a>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 ab-content text-center mt-lg-0 mt-4">
                <div class="ab-content-inner">
                    <img src="{{ asset('partners/valuehandlers.png') }}" alt="Valuehandlers image" height="200" width="200" class="img-fluid">
                    <div class="ab-info-con">

                        <a href="https:#">
                            <h6 class="text-team-w3">Valuehandlers International LTD</h6>
                        </a>
                        
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

{{--  <details>
    <summary>
    Click me to see more details
    </summary>

    <p>
        Details shown after click on the "summary" element.
    </p>
</details>  --}}

<!-- //team -->
<!-- End Contact Section -->


@include('partials._footer')

@endsection



