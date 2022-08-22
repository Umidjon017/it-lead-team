<section class="uza-portfolio-area section-padding-80">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Team of Experts</h2>
                    <p>We stay on top of our industry by being experts in yours.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Team Member Slides -->
            <div class="team-sildes owl-carousel">

                @foreach ($experts as $expert)
                <!-- Single Team Slide -->
                <div class="single-team-slide">
                    <img src="{{ filter_var($expert->image, FILTER_VALIDATE_URL) ? $expert->image : Voyager::image( $expert->image ) }}" style="width:auto; height: auto; object-fit:contain;"  />
                    
                    <!-- Overlay Effect -->
                    <div class="overlay-effect">
                        <h6>{{ $expert->profession }}</h6>
                        <h4>{{ $expert->full_name }}</h4>
                        <p>{{ $expert->description }}</p>
                    </div>
                    <!-- Social Info -->
                    <div class="team-social-info">
                        <a href="{{ $expert->link_linkedin }}" target="_blank" class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="{{ $expert->link_telegram }}" target="_blank" class="telegram" data-toggle="tooltip" data-placement="top" title="Telegram"><i class="fa-brands fa-telegram"></i></a>
                        <a href="{{ $expert->link_github }}" target="_blank" class="github" data-toggle="tooltip" data-placement="top" title="Github"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Border -->
    <div class="container">
        <div class="border-line mt-80"></div>
    </div>
</section>
