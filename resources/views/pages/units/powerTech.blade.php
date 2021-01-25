@extends('partials.master')

@section('title', '| PowerTech Unit')

@section('content')

@yield('partials._navbar')

    <section id="about" class="about_area pt-130 pb-130">
        <div class="about_wrapper">
           
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-6">
                            <div class="about_content">
                                <div class="section_title">
                                    <h3 class="title" tyle="text-align: centre!important;">About <span>Power-Tech Unit</span></h3>
                                    <p style="text-align: justify;">Specialists in the development, deployment and application of technological solutions and innovations in the energy sector.   
                                         We offer tech-enabled services in energy utilisation. The unit is made up of researchers and experts in designing and applying technology, thereby improving energy independence and usage efficiency. We are into tech-heavy hardware, software, and tech-enabled services for solar energy, hydro energy, wind energy, bioenergy, and geothermal energy. <br>
                                        In Power-Tech research unit, we support education through the undergraduate and graduate-level project's work to provide tech-enabled solutions to practical problems. The academia at ETRU works with the industry to explore modern technology in power systems planning and operations, FACTS deployment, Distributed Generation, Microgrid Planning and Optimisation of renewable resources. 
                                        </p>
                                    <h5 style="text-align: centre!important; color: red; margin-top: 10px;"><span>Vision</span></h5>
                                    <p style="text-align: justify;">To become the hub of emerging tech-enabled solutions and innovation, thereby ensuring and aiding access to safe, affordable, reliable, sustainable and modern energy in Nigeria.</p>

                                    <h5 style="text-align: centre!important; color: red; margin-top: 10px;"><span>Mission</span></h5>
                                    <p>
                                        <ul style="list-style-type: square; margin-left: 50px;">
                                            <li>Poised to develop local capacity in tech-enabled services in Nigeria's energy sector, leveraging industry 4.0 technologies: Artificial Intelligence, Big Data Analytics, Blockchain, Cloud Computing, Optimisation.</li>
                                            {{-- <li>Partner with other research communities to create a culture of high achievement.</li>
                                            <li>Create integrated services, transparent research administration, infrastructure, and streamlined processes</li>
                                            <li>Enhance the ability to perform research in a global community and support strong infrastructure for interdisciplinary research</li> --}}
                                        </ul>
                                    </p>

                                    <h5 style="text-align: centre!important; color: red; margin-top: 2px;"><span>Expertise and Applications</span></h5>
                                    <p style="text-align: justify;">
                                        <b>Expertise</b><br>
                                        <span style="margin-left: 30px;">Energy conversion and utilisation, Demand-side management, Artificial Intelligence, IoT, Systems Automation, Robotics and Mechatronics, Blockchain, DG Planning and Optimisation, FACTS Planning and Optimisations</span> <br> 
                                    <b>Applications</b> <br>
                                    <span style="margin-left: 30px;">Demand-side management, Energy efficiency, Energy Audit, Integrated Energy Services, Modern energy products development, Infrastructure retrofitting, Creative Business model</span> 
                                        </p>
                                </div> 
                                {{--  <a href="javascript:void(0)" class="main-btn">Read More</a>  --}}
                            </div>
                        </div> 
                        <div class="col-lg-6">
                            <div class="about_counter d-flex flex-wrap" style="justify-content: center">
                                <div class="single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                    <div class="counter_wrapper">
                                        <span class="counter">14</span>
                                        <p>Executed Projects</p>
                                    </div> 
                                </div> 
                                <div class="single_counter counter_2 d-flex justify-content-center align-items-center wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                                    <div class="counter_wrapper">
                                        <span class="counter">1</span>
                                        <p>Industrial Partners</p>
                                    </div> 
                                </div> 
                                <div class="single_counter counter_2 d-flex justify-content-center align-items-center wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                    <div class="counter_wrapper">
                                        <span class="counter">2</span>
                                        <p>Academic Partners</p>
                                    </div> 
                                </div> 
                            
                                <div class="single_counter counter_1 d-flex justify-content-center align-items-center wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="1.1s">
                                    <div class="counter_wrapper">
                                        <span class="counter">4</span>
                                        <p>Team Members</p>
                                    </div> 
                                </div>
                                
                                
                            </div>
                            
                            <h5 style="text-align: centre!important; color: red; margin-top: 10px;"><span style="margin: 20px;">Focus</span></h5>
                                    <p style="margin-left: 30px"> <em>Our focus at EnerTech Research Unit covers:</em>
                                        <ul style="list-style-type: square; margin-left: 50px; padding-top:5px;">
                                            <li><b>Smart Energy</b>
                                                <ul style="list-style-type:circle!important;  margin-left: 50px; padding-top:5px;">
                                                    <li>Smart Meter and Meter Data Acquisition & Management System</li>
                                                    <li>Smart Metering and Advanced Metering Infrastructure (AMI)</li>
                                                    <li>Microgrid Solution</li>
                                                </ul>
                                            </li>
                                            <li><b>Energy Saving</b>
                                                <ul style="list-style-type:circle!important;  margin-left: 50px; padding-top:5px;">
                                                    <li>Cloud-based Smart Energy Efficiency</li>
                                                    <li>Integrated Energy Services</li>
                                                    <li>LED and Smart Lighting Systems</li>
                                                </ul>
                                            </li>
                                            <li><b>FACTS planning and Optimisation in power grids </b>
                                                <ul style="list-style-type:circle!important;  margin-left: 50px; padding-top:5px;">
                                                    <li>Series FACTS: TCSC, SSSC, IPFC</li>
                                                    <li>Shunt FACTS: SVC, STATCOM</li>
                                                    <li>Series-Shunt: UPFC, GUPFC</li>
                                                </ul>
                                            </li>
                                            <li><b>Distributed Generation development, planning and Optimisation</b>
                                                <ul style="list-style-type:circle!important;  margin-left: 50px; padding-top:5px;">
                                                    <li>Grid Connected </li>
                                                    <li>Islanded and Standalone operations</li>
                                                </ul>
                                            </li>
                                            
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
                                <img src="{{ asset('assets/images/units_pix/dr_sadiq.jpeg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h6 class="f-18 mt-4 mb-2"> S.A. Abubakar (Ph.D)</h6>
                            <p class="text-muted">Team Lead</p>
                            <hr>
                        </div>
                    </div>
    
                    <div class="col-lg-3">
                        <div class="team-box text-center py-3 rounded mt-4">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/units_pix/damilare.jpeg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h6 class="f-18 mt-4 mb-2">Damilare Olatunji)</h6>
                            <p class="text-muted">Co-Researcher</p>
                            <hr>
                        </div>
                    </div>
    
                    <div class="col-lg-3">
                        <div class="team-box text-center py-3 rounded mt-4">
                            <div class="team-img">
                                <img src="{{ asset('assets/images/units_pix/ifetola.png') }}" class="img-fluid rounded-circle" alt="">
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



