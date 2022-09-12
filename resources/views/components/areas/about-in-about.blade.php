<section class="uza-about-us-area section-padding-80">
    <div class="container">
        <div class="row align-items-center">
            <!-- About Thumbnail -->
            <div class="col-12 col-lg-6">
                <div class="about-us-thumbnail mb-80">
                    <img src="{{ asset('/img/bg-img/2.jpg') }}" alt="">
                    <!-- Video Area -->
                    <div class="uza-video-area hi-icon-effect-8">
                        <a href="https://www.youtube.com/watch?v=sSakBz_eYzQ" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <!-- About Us Content -->
            <div class="col-12 col-lg-6">
                <div class="section-heading mb-5">
                    <h2>{{ __("Bizning Vazifalar") }}</h2>
                </div>

                <div class="about-us-content mb-80">
                    <div class="about-tab-area">
                        <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">{{ __("Yaratish") }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">{{ __("Analiz") }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">{{ __("Strategiya") }}</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Mona Tab Content -->
                    <div class="about-tab-content">
                        <div class="tab-content" id="mona_modelTabContent">
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                                <!-- Tab Content Text -->
                                <div class="tab-content-text">
                                    <p>{{ __("Bizning vazifa mashxur brendlarning Digital Marketing soxasida o'sishga yordam berish") }}</p>
                                    <p>{{ __("Biz yondashuvimiz mijozlar bilan boshidan ishlash va mijozning biznes maqsadlari va missiyalari bilan bog'liq holda strategiya qilamiz. ") }}</p>
                                    <a href="#" class="btn uza-btn mt-30">{{ __("Malumot olish") }}</a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                                <!-- Tab Content Text -->
                                <div class="tab-content-text">
                                    <p>{{ __("At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna liquyam erat.") }}</p>
                                    <p>{{ __("Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.") }}</p>
                                    <a href="#" class="btn uza-btn mt-30">{{ __("Malumot olish") }}</a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                                <!-- Tab Content Text -->
                                <div class="tab-content-text">
                                    <p>{{ __("Bizning vazifa mashxur brendlarning Digital Marketing soxasida o'sishga yordam berish") }}</p>
                                    <p>{{ __("Biz yondashuvimiz mijozlar bilan boshidan ishlash va mijozning biznes maqsadlari va missiyalari bilan bog'liq holda strategiya qilamiz.") }}</p>
                                    <a href="#" class="btn uza-btn mt-30">{{ __("Malumot olish") }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Background Pattern -->
    <div class="about-bg-pattern">
        <img src="{{ asset('/img/core-img/curve-2.png') }}" alt="">
    </div>
</section>
