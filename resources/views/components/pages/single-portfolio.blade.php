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
                                <li class="breadcrumb-item"><a href="{{ url('portfolios') }}">Portfolio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">App Developement</li>
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

    <!-- ***** Portfolio Single Area Start ***** -->
    <section class="uza-portfolio-single-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-12 col-md-6">
                    <div class="portfolio-details-text">
                        <h2>{{ $portfolios->title }}</h2>
                        {{-- <h6>Analysis, Marketing</h6> --}}
                        <p>{{ $portfolios->description }}</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="portfolio-meta">
                        <h6><strong>Client: &nbsp;</strong> {{ $portfolios->client }}</h6>
                        <h6><strong>Date: &nbsp;</strong> {{ $portfolios->ordered_at }}</h6>
                        <h6><strong>Location: &nbsp;</strong> {{ $portfolios->location }}</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="portfolio-thumbnail mt-80">
                        <img src="{{ Voyager::image($portfolios->image) }}" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="portfolio-pager mt-80 d-flex align-items-center justify-content-between">
                        <a href="{{ $previous_record }}"><i class="arrow_left"></i> {{ __("Previous Post") }}</a>
                        <a href="{{ url('/') }}">{{ __("Back to home") }}</a>
                        <a href="{{ $next_record }}">{{ __("Next Post") }}<i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Portfolio Single Area End ***** -->

    @include('components.areas.newsletter')
@endsection