@extends('layouts.app')

@section('main-content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">{{ __("Biz haqimizda") }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> {{ __("Bosh sahifa") }} </a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __("Biz haqimizda") }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="./img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    @include('components.areas.about-in-about')
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Why Choose Us Area Start ***** -->
    @include('components.areas.why-choose-us')
    <!-- ***** Why Choose Us Area End ***** -->

    <!-- ***** Team Member Area Start ***** -->
    @include('components.areas.team-member')    
    <!-- ***** Team Member Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    @include('components.areas.cta')
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Client Feedback Area Start ***** -->
    @include('components.areas.clients-feedback')
    <!-- ***** Client Feedback Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    @include('components.areas.cool-facts')
    <!-- ***** Cool Facts Area End ***** -->
@endsection
