@extends('layouts.app')

@section('main-content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Portfolio</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="{{ asset('/img/core-img/curve-5.png') }}" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ****** Gallery Area Start ****** -->
    <section class="uza-portfolio-area section-padding-80">

        <!-- Portfolio Menu -->
        <div class="portfolio-menu text-center mb-80">
            <button class="btn active" data-filter="*">All Portfolio</button>
            <button class="btn" data-filter=".ux-ui-design">UX/UI Design</button>
            <button class="btn" data-filter=".market-analytics">Front End</button>
            <button class="btn" data-filter=".marketing-social">Back End</button>
        </div>

        <div class="container-fluid">
            <div class="row uza-portfolio">

                @foreach ($portfolios as $portfolio)
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design">
                    <div class="single-portfolio-slide">
                        {{-- @php
                            $images = json_decode($portfolio->image);
                        @endphp
                        @foreach ($images as $img)
                            <img src="{{ filter_var($img, FILTER_VALIDATE_URL) ? $img : Voyager::image( $img ) }}" style="width:100%" />
                        @endforeach --}}

                        <img src="{{ Voyager::image( $portfolio->image ) }}" alt="">

                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>{{ $portfolio->title }}</h4>
                            <p>{{ $portfolio->description }}</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="{{ route('portfolios.show', $portfolio->id) }}"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-12 text-center mt-30">
                    <a href="#" class="btn uza-btn btn-3">Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Gallery Area End ****** -->
@endsection
