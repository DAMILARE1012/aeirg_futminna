@extends('partials.master')

@section('title', '| Programme')

@section('content')

    <section section id="about" class="about" class="destination_area pt-150 pb-130" style="margin-top: 150px;">
        <div class="container">
            <div class="section-title">
                <h2>About the Programme</h2>
                <p>The Advanced Engineering Innovation Research Group (AEIRG) 2021 retreat held in Minna on Monday, January
                    11th, 2021, with the welcome address delivered by Prof. A. M. Aibinu. The guest speaker, Pastor (Arc)
                    Shola Adesoye; The importance of having a vision</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ asset('assets/images/programme1/a.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left" style="margin-bottom: 35px;">
                    <h3 style="padding-bottom: 14px;">Opening Address</h3>
                    <p style="padding-bottom: 20px; margin-top: -10px; color: #eec41e"> - Prof. Abiodun Musa Aibinu</p>
                    <p style="text-align: justify; margin-top: -10px;">
                        It gives me a tremendous pleasure to welcome you all to the 2021 Retreat of the Advanced Engineering
                        Innovation Research Group (AEIRG) of the Federal University of Technology, Minna. I hope we are all
                        keeping safe as we battle the second wave of COVID-19 pandemic?<br>
                        We are here again to brainstorm in order to set agenda for the year 2021 on how this our noble and
                        dignified Research Group will finish strong in 2021 by raising the ante of Research and Development
                        (R & D) in the country through solution-based research breakthrough.... <br>
                    </p>
                    <span style="padding-top: 4px;">Click <a
                            href="{{ asset('assets/images/programme1/finishing_strong.pdf') }}" download> Here </a> to
                        download full speech </span>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ asset('assets/images/pix.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3 style="padding-bottom: 14px;">Guest Speaker</h3>
                    <p style="padding-bottom: 20px; margin-top: -10px; color: #eec41e"> - Pastor (Arc) Shola Adesoye</p>
                    <p style="text-align: justify; margin-top: -10px;">
                        Good evening distinguished guests, fellow alumni, ladies and gentlemen. Once again, welcome to
                        Reunion 2019.
                        My topic of discourse today is The Importance of having a Vision <br>
                        I like to define vision as a mental picture of the desired future that produces passion in the
                        hearts of everyone involved. It is the ability to imagine and plan a desired future before you
                        arrive there. <br>
                        The power of a clear vision cannot be overemphasized. It is one, if not the most important need of
                        any people. In the corporate world today, every forward thinking organization fronts its corporate
                        vision statement....
                    </p>
                    <span style="padding-top: 4px;">Click <a
                            href="{{ asset('assets/images/programme1/vision_importance.pdf') }}" download> Here </a> to
                        download full speech </span>
                </div>
            </div>

            <div class="section-title">
                <h2>Captions</h2>
                <div class="row mb-4">
                    <div class="row">
                        @foreach ($images as $image)
                            <div class="col-sm-3">
                                <div class="single_gallery mt-30">
                                    <img src="{{ asset('images/' . $image->getFilename()) }}" alt="gallery">
                                    <a class="image-popup" href="{{ asset('images/' . $image->getFilename()) }}"><i class="lni lni-plus"></i></a>
                                </div> 
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->
    
    <div class="col-lg-12">
        
    </div>
    @include('partials._footer')

@endsection


