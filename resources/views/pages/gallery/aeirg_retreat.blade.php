
@extends('partials.master')

@section('title', '| Gallery - AEIRG Retreat')

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

            <section id="portfolio" class="portfolio">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                      <ul id="portfolio-flters" style="padding: 0; margin: 0 auto 5px auto; list-style: none; text-align: center;  border-radius: 50px;">
                        <li data-filter="*" class="{{ Request()->is('gallery/ai4ce_events') ? 'filter-active' : '' }}"><a href="{{ route('ai4ce_events') }}">Ai4ce Events</a></li>
                        <li data-filter="*" class="{{ Request()->is('gallery/exhibition_room') ? 'filter-active' : '' }}"><a href="{{ route('exhibition_room') }}">Exhibition Room</a></li>

                        <li data-filter="*" class="{{ Request()->is('gallery/aeirg_retreat') ? 'filter-active' : '' }}"><a href="{{ route('aeirg_retreat') }}">Retreat</a></li>

                      </ul>
                    </div>
                  </div>
                </div>
            </section>

            <div class="col-lg-12 mb-5">
                <div class="row">
                    @foreach ($images as $image)
                    <div class="col-sm-3">
                        <div class="single_gallery mt-30">
                            <img src="{{ asset('assets/images/gallery/aeirg_retreat/'. $image->getFilename()) }}" alt="gallery">
                            <a class="image-popup" href="{{ asset('assets/images/gallery/aeirg_retreat/'. $image->getFilename()) }}"><i class="lni lni-plus"></i></a>
                        </div> 
                    </div>
                    @endforeach
                </div>
            </div>
        </div> 
    </section>

    @include('partials._footer')

@endsection
