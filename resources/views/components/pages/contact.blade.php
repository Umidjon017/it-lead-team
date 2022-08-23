@extends('layouts.app')

@section('main-content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">{{ __("Contact") }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i>{{ __("Home") }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __("Contact") }}</li>
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

    <!-- ***** Contact Area Start ***** -->
    <section class="uza-contact-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Form -->
                <div class="col-12 col-lg-8">
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    <span>&times;</span>
                                </button>
                                <h5><i class="icon fas fa-check"></i></h5>
                                {{session('success')}}
                            </div>
                        </div>
                    @endif
                    @if (Session::has('warning'))
                        <div class="alert alert-danger alert-dismissible show fade">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> <span>&times;</span> </button>
                            <h5><i class="icon fas fa-ban"></i> </h5>
                            {{session('warning')}}
                        </div>
                    @endif
                    <div class="uza-contact-form mb-80">
                        <div class="contact-heading mb-50">
                            <h4>Thank you for your interest. <br>Please fill out the form below to inquire about our work in Digital.</h4>
                        </div>
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="full_name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control mb-30" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="organization" placeholder="Organization">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control mb-30" name="message" rows="8" cols="80" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn uza-btn btn-3 mt-15">{{ __("Contact Us") }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Single Contact Card -->
                <div class="col-12 col-lg-4">
                    <div class="contact-sidebar-area mb-80">
                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                            <h4>Contact Us</h4>
                            <h3>(+998)99 988-35-00</h3>
                            <h3>(+998)91 170-20-17</h3>
                            <h6>it-lead.team@gmail.com</h6>
                            <h6>Mon - Sat: 9:00 - 19:00 <br>Closed on Weekends</h6>
                        </div>

                        {{-- <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                            <h4>London</h4>
                            <h3>(+65) 2222 5678</h3>
                            <h6>49 Charing Cross Rd, London, UK <br>hello.colorlib@gmail.com</h6>
                        </div>

                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                            <h4>New York</h4>
                            <h3>(+65) 6666 5678</h3>
                            <h6>40 Baria Sreet 13/2 NY City, US <br>hello.colorlib@gmail.com</h6>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Google Maps -->
                <div class="col-12">
                    <div class="google-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.662494712076!2d72.35897108359578!3d40.747451466928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bced630e0f4795%3A0xf72460c2369068a8!2sDigital%20City!5e0!3m2!1sen!2s!4v1661170397211!5m2!1sen!2s" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    @include('components.areas.newsletter')
    <!-- ***** Header Area End ***** -->
@endsection
