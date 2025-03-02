@extends('layouts.public')
@section('content')

    <!--============================= WELCOME =============================-->
    <section class="homepage-welcome-section background-primary">
        <div class="container-fluid m-0 px-3">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10">
                    <h2>Welcome</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 ">
                    <p>
                        Thank you for visiting <span>House of Light</span>. We are a leading consulting and training firm dedicated to creating inclusive environments for people with visual impairments. Our team of experienced educators and accessibility experts provides comprehensive solutions to schools, businesses, and organizations seeking to enhance accessibility and compliance.
                    </p>
                    <p>
                        Our itinerant model provides flexible, personalized <a class="homepage-welcome-links" href="/services/education">educational services</a> tailored to the needs of blind and visually impaired students. By offering face-to-face, virtual, and hybrid learning options, we ensure that each student receives the attention and support they need to succeed. Our licensed Teachers of the Blind and Visually Impaired (TVI) work closely with school districts to develop Individualized Education Programs (IEP) or 504 plans, ensuring every student's educational needs are met.
                    </p>
                    <p>
                        Partnering with <a class="homepage-welcome-links" href="/community_center">iCanDream Center</a>, we will be opening our ESY Program June 2 through July 10th that will offer a supportive, tailored learning environment for visually impaired students. This specialized setting will provide a nurturing space where students can learn and grow, supported by a team of dedicated professionals. Our day school focuses on creating an inclusive atmosphere that fosters independence and confidence.
                    </p>
                    <p>
                        House of Light, LLC also partners with organizations to provide comprehensive accessibility training and support. Our <a class="homepage-welcome-links" href="/services/corporate">corporate services</a> are designed to enhance workplace inclusion for visually impaired employees. We offer workshops and consultations to help organizations implement effective accessibility solutions, ensuring a more inclusive and supportive work environment.

                    </p>
{{--                    <p>--}}
{{--                        For example, do you have an event coming soon? Have you thought about making sure your presentation is accessible for those with disabilities in your audience? Is your team trained to work with a person with disabilities? Is your municipality looking to purchase software for your constituents, in your selection price did you make sure the software was accessible? We can help!--}}
{{--                    </p>--}}
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
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <h2 class="py-3">Our Services</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="d-flex justify-content-center col-md-8 col-lg-6 flex-wrap">
                    <div class="button-primary-cta mb-4 px-4">
                        <a href="/services/education" aria-label="Learn more about Education Services">Education Services</a>
                    </div>
                    <div class="button-primary-cta px-4">
                        <a href="/services/corporate" aria-label="Learn more about Corporate Services">Corporate Services</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//END OUR SERVICES -->
    <!--============================= OUR PARTNERS =============================-->
    <section class="homepage-our-partners-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center pt-3 pb-5">
                    <h2>Our Partners</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex flex-row flex-wrap justify-content-center align-items-center">
                    <figure class="mx-2 p-0">
                        <img src="{{env('APP_URL')}}/assets/images/home/NYPace_NewLogo_horiz.png" class="img-fluid mx-3" alt="partner-logo, NY Pace">
                    </figure>
                        <figure class="px-5 p-0">
                        <img src="{{env('APP_URL')}}/assets/images/home/junior-achievement-chicago.png" class="img-fluid mx-3" alt="partner-logo, Junior Achievement Chicago">
                    </figure>
                    <figure class="mx-2 p-0">
                        <img src="{{env('APP_URL')}}/assets/images/home/north-central-college.png" class="img-fluid mx-3" alt="partner-logo, North Central College">
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center button-primary-cta mt-3">
                    <a href="/partners" aria-label="See more about our partners">See more >>></a>
                </div>
            </div>
        </div>
    </section>
    <!--//END OUR PARTNERS -->
    <!--============================= TESTIMONIAL =============================-->
    <hr>
    <section class="testimonial">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Testimonials</h2>
                </div>

                <div class="col-md-12">
                    <div class="testimonial-container">
                        @foreach($testimonials as $testimonial)
                            <div class="testimonial-card" role="group" aria-label="Testimonial by {!! $testimonial->author_name !!}">
                                <div class="quote">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p class="quote_text">"{!! $testimonial->comment !!}"</p>
                                    <div class="testi-img_block">
                                        <p><span>{!! $testimonial->author_name !!}</span>{!! $testimonial->job_title !!}</p>
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
    <script src="{{env('APP_URL')}}/assets/guest_js/jquery-ui-1.10.4.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/guest_js/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.testimonial-container').slick({
                accessibility: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                dots: false,
                pauseOnHover: true,
                autoplaySpeed: 3000,
            });
        });
    </script>


@endsection
