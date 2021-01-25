
@extends('partials.master')

@section('title', '| Gallery')

@section('content')

    <section id="gallery" class="gallery_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_title text-center pb-25">
                        <h3 class="title">Our Gallery</h3>
                        <p>...the story of a place where research thrives into impactful innovations.</p>
                    </div> 
                </div>
            </div> 
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/1.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/1.jpg') }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/2.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/2.jpg') }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/3.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/3.jpg') }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/4.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/4.jpg') }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/5.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/5.jpg') }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/6.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/6.jpg') }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/7.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/7.jpg') }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/8.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/8.jpg') }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/9.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/9.jpg') }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/10.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/10.jpg') }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="asset('assets/images/gallery/11.jpg')" alt="gallery">
                            <a class="image-popup" href="asset('assets/images/gallery/11.jpg')"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/12.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/12.jpg') }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/13.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/13.jpg') }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/14.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/14.jpg') }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/15.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/15.jpg') }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/16.jpg') }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/16.jpg') }}"><i class="lni lni-plus"></i></a>
                            {{--  <p>Ai4CE Event</p>  --}}
                        </div> 
                    </div>
                </div>
            </div>
            {{--  <div class="row">
               
                <div class="col-lg-5">
                    <div class="single_gallery mt-30">
                        <img src="assets/images/gallery/1.jpg" alt="gallery">
                        <a class="image-popup" href="assets/images/gallery/1.jpg"><i class="lni lni-plus"></i></a>
                    </div> 
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single_gallery mt-30">
                                <img src="assets/images/gallery/2.jpg" alt="gallery">
                                <a class="image-popup" href="assets/images/gallery/2.jpg"><i class="lni lni-plus"></i></a>
                            </div> 
                            <div class="single_gallery mt-30">
                                <img src="assets/images/gallery/3.jpg" alt="gallery">
                                <a class="image-popup" href="assets/images/gallery/3.jpg"><i class="lni lni-plus"></i></a>
                            </div> 
                        </div>
                        <div class="col-sm-6">
                            <div class="single_gallery mt-30">
                                <img src="assets/images/gallery/4.jpg" alt="gallery">
                                <a class="image-popup" href="assets/images/gallery/4.jpg"><i class="lni lni-plus"></i></a>
                            </div>
                            <div class="single_gallery mt-30">
                                <img src="assets/images/gallery/5.jpg" alt="gallery">
                                <a class="image-popup" href="assets/images/gallery/5.jpg"><i class="lni lni-plus"></i></a>
                            </div> 
                        </div>
                        
                    </div> 
                </div>
            </div>   --}}
        </div> 
    </section>

    @include('partials._footer')

@endsection
