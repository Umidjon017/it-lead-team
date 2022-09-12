@extends('layouts.app')

@section('main-content')

    <!-- ***** Welcome Area Start ***** -->
    @include('components.areas.welcome')
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    @include('components.areas.about-in-home')
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Services Area Start ***** -->
    @include('components.areas.services')
    <!-- ***** Services Area End ***** -->

    <!-- ***** Portfolio Area Start ***** -->
    @include('components.areas.portfolio')
    <!-- ***** Portfolio Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    @include('components.areas.cta')
    <!-- ***** Blog Area End ***** -->
@endsection
