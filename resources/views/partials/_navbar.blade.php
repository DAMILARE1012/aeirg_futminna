<section class="header_area">
    <div class="header_navbar" style="background-color: #6c757d;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ route('home') }}"><img
                                src="{{ asset('assets/images/logo.svg') }}" alt="Logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item {{ Request()->is('/') ? 'active' : '' }}"> <a class="page-scr oll"
                                        href="{{ route('home') }}">Home</a> </li>
                                <li class="nav-item {{ Request()->is('about') ? 'active' : '' }}"> <a
                                        class="page-scroll" href="{{ route('about') }}">About</a> </li>
                                <li class="nav-item {{ Request()->is('units') ? 'active' : '' }}"> <a
                                        class="page-scroll" href="{{ route('units') }}">Units</a> </li>
                                <li class="nav-item" {{ Request()->is('achievements') ? 'active' : '' }}> <a
                                        class="page-scroll" href="{{ route('achievements') }}">Achievements</a> </li>
                                <li class="nav-item {{ Request()->is('gallery') ? 'active' : '' }}"> <a
                                        class="page-scroll" href="{{ route('gallery') }}">Gallery</a> </li>
                                {{-- <li class="nav-item"> <a class="page-scroll"
                                        href="{{ route('blog') }}">Blog</a> </li> --}}
                                <li class="nav-item {{ Request()->is('contact') ? 'active' : '' }}"> <a
                                        class="page-scroll" href="{{ route('contact') }}">Contact</a> </li>
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <button class="dropbtn">Opportunities <sup style="color: #fff;"><b>New</b></sup> <span class="lnr lnr-chevron-down-circle"
                                                style="padding-right: 8px;"></span></button>
                                        <div class="dropdown-content">
                                            <a href="{{ route('seminars') }}"
                                                style="padding: 8px; margin:2px; color: white!important;y"><span
                                                    class="lnr lnr-layers {{ Request()->is('seminars') ? 'active' : '' }}"
                                                    style="padding-right: 12px; color: white!important;"></span>Seminars
                                            </a>
                                            <a href="#" style="padding: 8px; margin:2px; color: white!important;"><span
                                                    class="lnr lnr-apartment {{ Request()->is('training') ? 'active' : '' }}"
                                                    style="padding-right: 12px; "></span>Trainings</a>
                                            <a href="{{ route('internship') }}" style="padding: 8px; margin:2px; color: white!important;"><span
                                                    class="lnr lnr-enter {{ Request()->is('internship') ? 'active' : '' }}"
                                                    style="padding-right: 12px; "></span>Internship <sup style="color: red;"><b>New</b></sup></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
