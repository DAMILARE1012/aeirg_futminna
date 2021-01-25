
@extends('partials.master')

@section('title', '| Blog')

@section('content')

    <section id="blog" class="blog_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h3 class="title">Our News Center</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dianum eirmod tempor invidunt ut labore et dolore magna </p>
                    </div> 
                </div>
            </div> 
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="assets/images/blog-1.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <div class="blog_meta">
                                <ul>
                                    <li>Posted by: <a href="javascript:void(0)">Michle Smith</a></li>
                                    <li>14 June 2023</li>
                                </ul>
                            </div>
                            <h4 class="blog_title"><a href="javascript:void(0)">Tonumy eirmod tempor invidunt ut labore et dolore magn aaliq yam erat, sed diam voluptua.</a></h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magn aaliq yam erat, sed diam voluptua. At vero eos et accusam et justo dolores ea rebum Stet clita kasd gubergren sea.</p>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-6">
                    <div class="single_blog d-sm-flex mt-30">
                        <div class="blog_image">
                            <img src="assets/images/blog-2.jpg" alt="blog">
                        </div>
                        <div class="blog_content blog_content_2 media-body">
                            <h4 class="blog_title"><a href="javascript:void(0)">Tonumy eirmod temporinvi unt ut labore et dolore</a></h4>
                            <p>Lorem ipsum dolor sit ametcon setetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                            <a href="javascript:void(0)" class="more">Read More</a>
                        </div>
                    </div> 
                    <div class="single_blog d-sm-flex mt-30">
                        <div class="blog_image">
                            <img src="assets/images/blog-3.jpg" alt="blog">
                        </div>
                        <div class="blog_content blog_content_2 media-body">
                            <h4 class="blog_title"><a href="javascript:void(0)">Tonumy eirmod temporinvi unt ut labore et dolore</a></h4>
                            <p>Lorem ipsum dolor sit ametcon setetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                            <a href="javascript:void(0)" class="more">Read More</a>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </section>

@endsection





    