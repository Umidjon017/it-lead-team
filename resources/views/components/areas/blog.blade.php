<section class="uza-blog-area">
    <!-- Background Curve -->
    <div class="blog-bg-curve">
        <img src="./img/core-img/curve-4.png" alt="">
    </div>

    @include('components.areas.cta')

    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>{{ __("Our Latest Blogs") }}</h2>
                    <p>{{ __("Hit the button below or give us a call!") }}</p>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Single Blog Post -->
            <div class="col-12 col-lg-4">
                <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/8.jpg);">
                    <!-- Post Content -->
                    <div class="post-content">
                        <span class="post-date"><span>23</span> {{ __("August, 2018") }}</span>
                        <a href="#" class="post-title">{{ __("SEO: The Movie By Ignite Visibility") }}</a>
                        <p>{{ __("Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut") }}</p>
                        <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-lg-4">
                <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/9.jpg);">
                    <!-- Post Content -->
                    <div class="post-content">
                        <span class="post-date"><span>13</span> {{ __("December, 2018") }}</span>
                        <a href="#" class="post-title">{{ __("What Curling Irons Are The Best Ones") }}</a>
                        <p>{{ __("Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut") }}</p>
                        <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-lg-4">
                <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/10.jpg);">
                    <!-- Post Content -->
                    <div class="post-content">
                        <span class="post-date"><span>08</span> {{ __("July, 2018") }}</span>
                        <a href="#" class="post-title">{{ __("Amazon REV Workshop: Road to Seattle") }}</a>
                        <p>{{ __("Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut") }}</p>
                        <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
