
@extends('partials.master')

@section('title', '| 2011-2009 Projects')

@section('content')

    <section id="packges" class="destination_area pt-130 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h3 class="title">Executed Projects</h3>
                        {{-- <p>Executed projects...</p> --}}
                    </div> 
                </div>
            </div> 
            
            <section id="portfolio" class="portfolio">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                      <ul id="portfolio-flters">
                        <li data-filter="*" class="{{ Request()->is('projects/projects_18_20') ? 'filter-active' : '' }}"><a href="{{ route('project18') }}" >2020-2018</a></li>
                        <li data-filter="*" class="{{ Request()->is('projects/projects_15_17') ? 'filter-active' : '' }}"><a href="{{ route('project15') }}">2017-2015</a></li>
                        <li data-filter="*" class="{{ Request()->is('projects/projects_12_14') ? 'filter-active' : '' }}"><a href="{{ route('project12') }}">2014-2012</a></li>
                        <li data-filter="*" class="{{ Request()->is('projects/projects_09_11') ? 'filter-active' : '' }}"><a href="{{ route('project09') }}">2011-2009</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
            </section>
            
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/loading.jpg') }}" alt="Destination">
                        </div>
                        
                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2011</a>
                            <h4 class="title"><a href="#" target="_blank" style="font-size: 16px!important;">A Novel Intelligent Dirham Coin Dispensing Automated Teller Machine (ATM); (RM5, 000 ) University Endowment Grant, Type B (EDW-A), IIUM, Malaysia.</a></h4>
                            <p class="price"> Grant - <b>N 250,000:00</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> 
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/loading.jpg') }}" alt="Destination">
                        </div>
                        
                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2011</a>
                            <h4 class="title"><a href="#" target="_blank" style="font-size: 16px!important;">Development of an Intelligent Multimodal Biometric System for Household Appliances control (RM20, 000 ); University Endowment Grant, Type B (EDW-B), IIUM, Malaysia. </a></h4>
                            <p class="price"> Grant - <b>N 1,000,000:00</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> 
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/loading.jpg') }}" alt="Destination">
                        </div>
                        
                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2011</a>
                            <h4 class="title"><a href="#" target="_blank" style="font-size: 16px!important;">A New Orthogonal Projection Based Parametric Modeling Technique for ECG Signal Analysis (RM78, 000); Fundamental Research Grant Scheme (FRGS), IIUM, Malaysia.</a></h4>
                            <p class="price"> Grant - <b>N 3,900,000:00</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> 
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/loading.jpg') }}" alt="Destination">
                        </div>
                        
                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2010</a>
                            <h4 class="title"><a href="#" target="_blank" style="font-size: 16px!important;">A new programmable dirham based Hajj Saving Electronic Device (RM4, 900); University Endowment Grant, Type A (EDW-A), IIUM, Malaysia</a></h4>
                            <p class="price"> Grant - <b>N 245,000:00</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> 
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/loading.jpg') }}" alt="Destination">
                        </div>
                        
                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2010</a>
                            <h4 class="title"><a href="#" target="_blank" style="font-size: 16px!important;">A new programmable dirham based Hajj Saving Electronic Device (RM4, 900); University Endowment Grant, Type A (EDW-A), IIUM, Malaysia</a></h4>
                            <p class="price"> Grant - <b>N 245,000:00</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> 
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/loading.jpg') }}" alt="Destination">
                        </div>
                        
                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2010</a>
                            <h4 class="title"><a href="#" target="_blank" style="font-size: 16px!important;">Animal Sound Activity Detection Using Support Vector Machines (RM5,000 ); University Endowment Grant, Type A (EDW-A), IIUM, Malaysia.</a></h4>
                            <p class="price"> Grant - <b>N 250,000:00</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> 
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/loading.jpg') }}" alt="Destination">
                        </div>
                        
                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2010</a>
                            <h4 class="title"><a href="#" target="_blank" style="font-size: 16px!important;">A new hybrid pseudo intelligent MRI Reconstruction Technique - (RM105, 800 ); Ministry of Science and Technology, Malaysia. (E-Science Funded)</a></h4>
                            <p class="price"> Grant - <b>N5,290,000:00</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </section>

    @include('partials._footer')

@endsection



