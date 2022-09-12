<section class="uza-about-us-area">
    <div class="container">
        <div class="row align-items-center">

            <!-- About Thumbnail -->
            <div class="col-12 col-md-6">
                <div class="about-us-thumbnail mb-80">
                    <img src="{{ asset('/img/bg-img/2.jpg') }}" alt="">
                    <!-- Video Area -->
                    <div class="uza-video-area hi-icon-effect-8">
                        <a href="https://www.youtube.com/watch?v=sSakBz_eYzQ" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <!-- About Us Content -->
            <div class="col-12 col-md-6">
                <div class="Biz haqimizda-us-content mb-80">
                    <h2>{{ __("Biz Agentlik jamoasi") }} &amp; {{ __("raqamli marketingmiz") }}</h2>
                    <p>{{ __("UIL raqamli marketing, dizayn va texnologiya sintezi orqali innovatsion raqamli marketing yechimlarini taqdim etuvchi raqamli marketing agentligidir.") }}</p>
                    <p>{{ __("Biz keng qamrovli raqamli marketing strategiyalarimiz orqali brend xabardorligi va brend ishtirokini oshirish orqali korxonalarning o'sishiga va ularning raqamli mavjudligini o'rnatishga yordam berishga e'tibor qaratamiz.") }}</p>
                    <a href="{{ route('about') }}" class="btn uza-btn btn-2 mt-4">{{ __("O'rganishni boshlang") }}</a>
                </div>
            </div>
        </div>
    </div>

    <!-- About Background Pattern -->
    {{-- <div class="about-bg-pattern">
        <img src="{{ asset('/img/core-img/curve-2.png') }}" alt="">
    </div> --}}
</section>
