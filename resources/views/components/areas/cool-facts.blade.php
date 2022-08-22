<div class="uza-cf-area section-padding-80-0">
    <div class="container">
        <div class="row">

            {{-- @foreach ($projects as $project) --}}
            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cf-area d-flex align-items-center mb-80">
                    <h2><span class="counter">{{ $count_projects }}</span></h2>
                    <div class="cf-text">
                        <h6>Projects<br>Completed</h6>
                    </div>
                    <div class="bg-icon"><i class="icon_piechart"></i></div>
                </div>
            </div>

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cf-area d-flex align-items-center mb-80">
                    <h2><span class="counter">120</span></h2>
                    <div class="cf-text">
                        <h6>Happy<br>clients</h6>
                    </div>
                    <div class="bg-icon"><i class="icon_heart_alt"></i></div>
                </div>
            </div>

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cf-area d-flex align-items-center mb-80">
                    <h2><span class="counter">50</span></h2>
                    <div class="cf-text">
                        <h6>WEB<br>awards</h6>
                    </div>
                    <div class="bg-icon"><i class="icon_book_alt"></i></div>
                </div>
            </div>

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cf-area d-flex align-items-center mb-80">
                    <h2><span class="counter">{{ $count_experts }}</span></h2>
                    <div class="cf-text">
                        <h6>Our<br>experts</h6>
                    </div>
                    <div class="bg-icon"><i class="icon_profile"></i></div>
                </div>
            </div>
            {{-- @endforeach --}}

        </div>
    </div>
</div>
