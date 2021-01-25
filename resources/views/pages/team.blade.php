
@extends('partials.master')

@section('title', '| Team')

@section('content')

    <section id="team" class="team_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h3 class="title">Meet The Team</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod tempor invidunt ut labore et dolore magna </p>
                    </div> 
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_team mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="team_image">
                            <img src="{{ asset('assets/images/team-1.jpg') }}" alt="team">
                        </div>
                        <div class="team_content">
                            <h5 class="team_name">Kim John</h5>
                            <p>Founder and CEO</p>
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_team mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.4s">
                        <div class="team_image"><img src="{{ asset('assets/images/team-2.jpg') }}" alt="team"></div>
                        <div class="team_content">
                            <h5 class="team_name">Sara Smith</h5>
                            <p>Senior Trainer</p>
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_team mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.6s">
                        <div class="team_image">
                            <img src="{{ asset('assets/images/team-3.jpg') }}" alt="team">
                        </div>
                        <div class="team_content">
                            <h5 class="team_name">John Doe</h5>
                            <p>Trip Guide</p>
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_team mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="team_image">
                            <img src="{{ asset('assets/images/team-4.jpg') }}" alt="team">
                        </div>
                        <div class="team_content">
                            <h5 class="team_name">Ena Smith</h5>
                            <p>Business Manager</p>
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </section>

@endsection
