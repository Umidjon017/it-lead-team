<section class="uza-portfolio-area section-padding-80">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>{{ __("Portfolio") }}</h2>
                    <p>{{ __("Biz sizning sohangiz bo'yicha mutaxassis bo'lib, o'z sohamizning yuqori qismida qolamiz.") }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Portfolio Slides -->
            <div class="portfolio-sildes owl-carousel">
                
                @foreach ($portfolios as $portfolio)
                <!-- Single Portfolio Slide -->
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
                @endforeach
            </div>
        </div>
    </div>

    <!-- Client Feedback Area Start -->
    @include('components.areas.clients-feedback')
    <!-- Client Feedback Area End -->

    <!-- Border -->
    <div class="container">
        <div class="border-line"></div>
    </div>

    <!-- Background Curve -->
    <div class="portfolio-bg-curve">
        <img src="{{ asset('/img/core-img/curve-3.png') }}" alt="">
    </div>
</section>
