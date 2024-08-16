@extends('layouts.public')
@section('content')

    <!--============================= WELCOME =============================-->
    <section class="homepage-welcome-section background-primary">
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10">
                    <h2>Welcome</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <p>
                        Thank you for visiting <span>House of Light</span>. We are a leading consulting and training firm dedicated to creating inclusive environments for people with visual impairments. Our team of experienced educators and accessibility experts provides comprehensive solutions to schools, businesses, and organizations seeking to enhance accessibility and compliance.
                    </p>
                    <p>
                        We offer specialized <a class="homepage-welcome-links" href="/services/education">educational services</a> and training to ensure that students with visual impairments receive the support they need to succeed. Our programs focus on creating inclusive classrooms, developing individualized education plans (IEPs), and providing teachers with the tools and knowledge to effectively support visually impaired students.
                    </p>
                    <p>
                        Our <a class="homepage-welcome-links" href="/services/corporate">corporate services</a> help corporations build a more inclusive workplace by offering ADA compliance training, accessibility audits, and employee development programs. Our expertise in preventing lawsuits and fostering a culture of inclusion empowers businesses to create a positive impact.
                    </p>
                    <p>
                        For example, do you have an event coming soon? Have you thought about making sure your presentation is accessible for those with disabilities in your audience? Is your team trained to work with a person with disabilities? Is your municipality looking to purchase software for your constituents, in your selection price did you make sure the software was accessible? We can help!

                    </p>
                </div>
            </div>
            <div class="row justify-content-center pt-5">
                <div class="col-md-10">
                    <h2>Our Commitment</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <p>
                        House of Light is committed to collaboration and partnership. We work closely with our clients to develop customized solutions that meet their specific needs.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center pt-5">
                <div class="col-md-10">
                    <h2>Ready to take the next step?</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <p>
                        Contact us today to schedule a consultation and learn more about our services!
                    </p>
                </div>
            </div>
            <div class="row justify-content-center consult-button-wrapper">
                <div class="d-flex justify-content-center">
                    <a id="consult-button" href="/contact">Book a Free Consultation -></a>
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
    <hr>
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Testimonials</h2>
                </div>

                <div class="col-md-12">
                    <div class="testimonial-container">
                        @foreach($testimonials as $testimonial)
                        <div aria-live="polite" class="testimonial-card">
                            <div class="quote">
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
@endsection
@section('scripts')
    <script src="{{env('APP_URL')}}/assets/js/jquery-ui-1.10.4.min.js"></script>
    <script type="text/javascript" src="{{env('APP_URL')}}/assets/js/jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.testimonial-container').slick({
                accessibility: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                dots: true,
                pauseOnHover: true,
                autoplaySpeed: 3000,
            });
        });
    </script>


@endsection
