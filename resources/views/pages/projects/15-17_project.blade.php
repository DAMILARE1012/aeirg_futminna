
@extends('partials.master')

@section('title', '| 2017-2015 Projects')

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
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/fuelless_gen.JPG') }}" alt="Destination">
                        </div>
                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2017</a>
                            <h4 class="title"><a href="javascript:void(0)" style="font-size: 16px!important;">Design and Fabrication of Fuel-less Generator</a></h4>
                            <p class="price">TETFUND - <b>N 1, 316, 400.00</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> 
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/walking_stick.jpg') }}" alt="Destination">
                        </div>
                        
                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2016</a>
                            <h4 class="title"><a href="#" target="_blank" style="font-size: 16px!important;">Fabrication of GSM Communication Based Walking Cane Robot (GWCR) for Enhancing Ambulation, funded Nigerian Communications Commission (NCC)</a></h4>
                            <p class="price"> Grant - <b>N 3,096,840</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> 
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/NCC.jpg') }}" alt="Destination">
                        </div>
                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2015</a>
                            <h4 class="title"><a href="javascript:void(0)" style="font-size: 16px!important;">Design and Development of Low Cost Adaptive GSM Signal Booster, funded by Nigerian Communications Commission (NCC)</a></h4>
                            <p class="price">Fund - <b>N 3,100,000</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> 
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/NCC.jpg') }}" alt="Destination">
                        </div>
                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2015</a>
                            <h4 class="title"><a href="javascript:void(0)" style="font-size: 16px!important;">Seamless Data and Voice Connection Using Multiple Operators Enabled SIM (MOES) card, funded by Nigerian Communications Commission (NCC)</a></h4>
                            <p class="price">Fund - <b>N 2,961,561.15</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> 
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="destination_image">
                            <img src="{{ asset('assets/images/NCC.jpg') }}" alt="Destination">
                        </div>
                        
                        <div class="destination_content">
                            <a href="javascript:void(0)" class="main-btn">2015</a>
                            <h4 class="title"><a href="javascript:void(0)" style="font-size: 16px!important;">Fabrication and Production of GSM Battery, funded by Nigerian Communications Commission (NCC)</a></h4>
                            <p class="price">Fund -  <b>N 2,700,000</b></p>
                            <a class="more" href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </section>

    @include('partials._footer')

@endsection



