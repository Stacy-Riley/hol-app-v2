@extends('layouts.public')
@section('content')

    <!--============================= WELCOME =============================-->
    <section class="homepage-welcome-section background-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2>Welcome</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <p>
                        Thank you for visiting <span>House of Light</span>. We are an organization serving low vision and blind individuals led by educators providing high quality, cost-effective services to our low incidence populations within the public school sector.
                    </p>
                    <p>
                        We understand the importance of partnerships and collaborations, thus we strive to make sure our students receive high quality, one-on-one instruction, and age-appropriate services for activities of daily living via face-to-face, virtual, or hybrid instruction as applicable.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--//END WELCOME -->
    <!--============================= SERVICES =============================-->
    <section class="homepage-our-services-section background-secondary position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <h2 class="py-3">Our Services</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="d-flex justify-content-between col-md-8 col-lg-6 flex-wrap">
                    <div class="button-primary-cta mb-4">
                        <a href="/services/education">Education Services</a>
                    </div>
                    <div class="button-primary-cta">
                        <a href="/services/corporate">Corporate Services</a>
                    </div>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="d-flex justify-content-center">
                    <a id="consult-button" href="/contact">Book a Free Consultation -></a>
                </div>
            </div>
        </div>
    </section>
    <!--//END OUR SERVICES -->
    <!--============================= OUR PARTNERS =============================-->
    <section class="homepage-our-partners-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pt-3 pb-5">
                    <h2>Our Partners</h2>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                    <div class="col-xs-12 col-md-6 col-lg-4 text-center">
                        <img src="/assets/images/home/NYPace_NewLogo_horiz.png" class="" alt="partner-logo, NY Pace">
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3 text-center">
                        <img src="/assets/images/home/junior-achievement-chicago.png" class="" alt="partner-logo, Junior Achievement Chicago">
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3 text-center">
                        <img src="/assets/images/home/north-central-college.png" class="" alt="partner-logo, North Central College">
                    </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center button-primary-cta">
                    <a href="/partners" class="">See more >>></a>
                </div>
            </div>
        </div>
    </section>
    <!--//END OUR PARTNERS -->
    <!--============================= TESTIMONIAL =============================-->
    <section class="testimonial ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Testimonials</h2>
                </div>

                <div class="col-md-12">
                    <div class="testimonial-container">
                        @foreach($testimonials as $testimonial)
                        <div aria-live="polite" class="slick-list draggable">
                            <div class="quote slick-track">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <p class="quote_text">"{{ $testimonial->comment }}"</p>
                                <div class="testi-img_block">

                                    <p><span>{{ $testimonial->author_name }}</span>{{ $testimonial->job_title }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--//END TESTIMONIAL -->
                <!--============================= OUR BLOG =============================-->
{{--    <section class="blog">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <h2>Our Blog</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-8">--}}
{{--                    <a href="blog-post.html" class="home_blog_link">--}}
{{--                        <div class="blog-img_box">--}}
{{--                            <img src="assets/images/blog-img_1.jpg" class="img-fluid blog_display" alt="blog-img">--}}
{{--                            <div class="blogtitle">--}}
{{--                                <h3>Eestibulum sodales</h3>--}}
{{--                                <i class="icon-user fa-common" aria-hidden="true"></i>--}}
{{--                                <p>by: admin</p>--}}
{{--                                <i class="icon-speedometer fa-common" aria-hidden="true"></i>--}}
{{--                                <p>9- Nov-2016</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <a href="blog-post.html" class="home_blog_link">--}}
{{--                        <div class="blog-img_box">--}}
{{--                            <img src="assets/images/blog-img_2.jpg" class="img-fluid blog_display" alt="blog-img">--}}
{{--                            <div class="blogtitle">--}}
{{--                                <h3>Variations of passages</h3>--}}
{{--                                <i class="icon-user fa-common" aria-hidden="true"></i>--}}
{{--                                <p>by: admin</p>--}}
{{--                                <i class="icon-speedometer fa-common" aria-hidden="true"></i>--}}
{{--                                <p>9- Nov-2016</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4">--}}
{{--                    <a href="blog-post.html" class="home_blog_link">--}}
{{--                        <div class="blog-img_box">--}}
{{--                            <img src="assets/images/blog-img_3.jpg" class="img-fluid blog_display" alt="blog-img">--}}
{{--                            <div class="blogtitle">--}}
{{--                                <h3>Lorem Ipsum passage</h3>--}}
{{--                                <i class="icon-user fa-common" aria-hidden="true"></i>--}}
{{--                                <p>by: admin</p>--}}
{{--                                <i class="icon-speedometer fa-common" aria-hidden="true"></i>--}}
{{--                                <p>9- Nov-2016</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <a href="blog-post.html" class="home_blog_link">--}}
{{--                        <div class="blog_hide">--}}
{{--                            <i class="icon-link" aria-hidden="true"></i>--}}
{{--                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been dummy...</p>--}}
{{--                            <div class="blogtitle-link">--}}
{{--                                <i class="icon-user fa-common" aria-hidden="true"></i>--}}
{{--                                <p>by: admin</p>--}}
{{--                                <i class="icon-speedometer fa-common" aria-hidden="true"></i>--}}
{{--                                <p>9- Nov-2016</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <a href="blog-post.html" class="home_blog_link">--}}
{{--                        <div class="blog-img_box">--}}
{{--                            <div class="blog-video">--}}
{{--                                <div class="blog-play_btn"> <img src="assets/images/play-btn.png" alt="play-btn"> </div>--}}
{{--                                <img src="assets/images/blog-img_4.jpg" class="img-fluid blog_display" alt="blog-img">--}}
{{--                            </div>--}}
{{--                            <!-- // end .blog-video -->--}}
{{--                            <div class="blogtitle">--}}
{{--                                <h3>Nam libero tempore</h3>--}}
{{--                                <i class="icon-user fa-common" aria-hidden="true"></i>--}}
{{--                                <p>by: admin</p>--}}
{{--                                <i class="icon-speedometer fa-common" aria-hidden="true"></i>--}}
{{--                                <p>9- Nov-2016</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div><br>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 text-center">--}}
{{--                    <a href="#" class="btn btn-default btn-courses">VIEW ALL BLOG</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--//END OUR BLOG -->

@endsection

@section('scripts')
{{--    <script>--}}
{{--        $(document).ready(function(){--}}
{{--            $('.testimonial-container').slick({--}}
{{--                setting-name: setting-value--}}
{{--        });--}}
{{--        });--}}
{{--    </script>--}}

@endsection
