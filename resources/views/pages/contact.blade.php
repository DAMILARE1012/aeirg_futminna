@extends('partials.master')

@section('stylesheets')

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Slider-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.transitions.css') }}" />

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- Fontawesome Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- Fontawesome - Icon -->

    <script src="https://use.fontawesome.com/2c11d19cfb.js"></script>

@endsection

@section('title', '| Contact')

@section('content')

    <!-- START CONTACT -->

    <section class="section" id="contact">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        {{-- <h1 class="title mb-0 text-primary f-17 my-5" style="margin-bottom: 1050px; margin-top: 60px; font-size: 30px;">Contact us</h1> --}}
                        <h3 class="title-heading mt-4">Have a project on mind? </h3>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="contact-info bg-light p-4 rounded mt-4">
                        <h5 class="f-18">Contact Details</h5>
                        <p class="text-muted">For any form of request or enquiry, kindly contact us through the provided
                            fields.</p>
                        <div class="mt-4">
                            <div class="media">
                                <i class="fa fa-address-card-o" aria-hidden="true"></i>
                                <div class="media-body pl-3">
                                    <h5 class="mt-0 f-17">Head Office</h5>
                                    <p class="text-muted mb-0">AI4CE Lab Federal University of Technology Minna, Niger State
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4 pt-1">
                                <div class="media">
                                    <i class="fa fa-envelope-open" aria-hidden="true"></i>
                                    <div class="media-body pl-3">
                                        <h5 class="mt-0 f-17">Email Us</h5>
                                        <p class="text-muted mb-0">aeirg@futminna.edu.ng</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 pt-1">
                                <div class="media">
                                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    <div class="media-body pl-3">
                                        <h5 class="mt-0 f-17">Call Support</h5>
                                        <p class="text-muted mb-0">
                                            +23480-29494164
                                        </p>
                                        <p class="text-muted mb-0">
                                            +23470-34226984
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="pl-0 pl-lg-2 mt-4">
                        <h5 class="f-18">Send a Message</h5>

                        <div class="custom-form mt-3">
                            <div id="message"></div>
                            <form method="post" action="{{ url('contact') }}" name="contact-form" id="contact-form">
                                {{ csrf_field() }}
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group mt-3">
                                            <label class="contact-lable">Full Name</label>
                                            <input name="name" id="name" class="form-control" type="text" required>
                                        </div>
                                    </div>

                                    {{-- <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Last Name</label>
                                        <input name="name" id="lastname" class="form-control" type="text">
                                    </div>
                                </div> --}}
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-3">
                                            <label class="contact-lable">Email Address</label>
                                            <input name="email" id="email" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-3">
                                            <label class="contact-lable">Subject</label>
                                            <input name="subject" id="subject" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-3">
                                            <label class="contact-lable">Your Message</label>
                                            <textarea name="comments" id="comments" rows="5" class="form-control"
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mt-3 text-right">
                                        <input id="submit" name="send" class="submitBnt btn btn-primary btn-round"
                                            value="Send Message" type="submit">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END CONTACT -->

    @include('partials._footer')

@endsection
