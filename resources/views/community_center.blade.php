@extends('layouts/public')
@section('content')

    <!--============================= COMMUNITY CENTER =============================-->
    <section class="learning-center">
        <div class="container-fluid">
            <div class="row justify-content-center learning-center-header-container">
                <div id="search-results" class="col-md-10 header-learning-center-container d-flex justify-content-center align-items-center">
                    <h1 class="learning-center-page-title h1-spacing text-center">Welcome to <span class="learning-center-span-3">Looking to Learn</span></h1>
                    <img src="{{env('APP_URL')}}/assets/images/learning-center/bookworm.png" class="img-fluid mx-3 learning-center-header-icon" alt="bookworm">
                </div>
            </div>

            <div class="row justify-content-center px-3 pt-3 pb-0 learning-center-content-container"
                 style="
                    background-image: url('{{ env('APP_URL') }}/assets/images/learning-center/background-branch.png');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    ">
                <div class="col-md-8 mt-3 py-3">
                    <p>
                        House of Light, in collaboration with iCanDream Center, is excited to introduce Looking to Learn, a program designed specifically for students with visual impairments. This innovative program provides a supportive environment where students can gain essential academic and social skills while fostering confidence and independence.
                    </p>
                </div>
                <div class="col-md-8">
                    <h2>Why Choose 'Looking to Learn'?</h2>
                    <ul class="custom-list">
                        <li>
                            <strong>Tailored Instruction:</strong> Delivered by experienced Teachers of Students with Visual Impairments (TVIs) and educational specialists.
                        </li>
                        <li>
                            <strong>Peer Connection:</strong> Opportunities to meet and interact with other students who share similar experiences.
                        </li>
                        <li>
                            <strong>Skill Development:</strong> A focus on building self-advocacy, mobility, and independent living skills.
                        </li>
                        <li>
                            <strong>Fun & Engaging Activities:</strong> Hands-on learning experiences that make education exciting and meaningful.
                        </li>
                    </ul>

                    <h2 class="pt-2">Program Highlights</h2>
                    <ul class="custom-list">
                        <li>
                            <strong>Dates:</strong>  June 2, 2025 - July 10, 2025
                        </li>
                        <li>
                            <strong>Location:</strong> iCan Dream Center 18501 Maple Creek Drive Suite 200 Tinley Park, IL 60477
                        </li>
                        <li>
                            <strong>Eligibility:</strong> Open to students with visual impairments, ages 5-9 years old, high school students, and transition students
                        </li>
                        <li class="big-li">
                            <strong>Curriculum Includes:</strong>
                                <p>- Adaptive technology training</p>
                                <p>- Braille and literacy support</p>
                                <p>- Orientation and mobility exercises</p>
                                <p>- Social and recreational activities</p>
                                <p>- College and career readiness workshops</p>
                        </li>
                    </ul>

                    <h2 class="pt-2">A Partnership for Success</h2>
                    <p>
                        By partnering with iCan Dream Center, House of Light ensures a comprehensive, inclusive, and high-impact educational experience for students. Together, we are committed to fostering a sense of belonging, empowerment, and academic growth.
                    </p>
                    <h2 class="pt-2">How to Enroll</h2>
                    <p>
                        <strong>Enrollment is now open!</strong> Space is limited, so we encourage families and school districts to apply early.
                    </p>
                    <h3>Steps to Apply:</h3>
                        <ol>
                            <li>
                                <p>Complete the online application form</p>
                                <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSewMFrVOo3F4kzq_mQfUCzKyxxHhnj_C8UMEhpnwN2sl4KtoQ/viewform?usp=sharing" target="_blank"><strong>Parent Registration Form</strong></a></p>
                                <p><a href="https://forms.gle/s4fdw9a6KpDmQs4o7" target="_blank"><strong>District Registration Form</strong></a></p>

                            </li>
                            <li>Attend our Open House (information will be posted soon)</li>
                            <li>Secure your spot with program registration and materials.</li>
                        </ol>
                        <br>
                        <p>For more information, please contact us at <strong><a href="mailto:info@houseoflightllc.org">info@houseoflightllc.org</a></strong>.
                        </p>

                </div>
                <div class="row align-items-stretch justify-content-center mt-4" >
                    <!-- First column -->
                    <div class="col-md-4 pt-2" style="background-color: #e8b4ac;">
                        <div class="d-flex flex-column h-100" >
                            <div class="d-flex justify-content-center align-items-center">
                                {{--Logo 1--}}
                                <img src="{{ env('APP_URL') }}/assets/images/learning-center/house-of-light-logo.png"
                                     class="img-fluid learning-center-logos"
                                     alt="house of light logo">
                                {{--Logo 2--}}
                                <img src="{{ env('APP_URL') }}/assets/images/learning-center/icandreamcenter-logo.png"
                                     class="img-fluid learning-center-logos"
                                     alt="icandream center logo">
                            </div>
                            <p class="pt-2">
                                <span class="learning-center-span-1">Join us</span> <span class="learning-center-span-2"> this summer for a life-changing experience where students can
                                learn, connect, and thrive!</span>
                            </p>
                        </div>
                    </div>
                    <!-- Second column -->
                    <div class="col-md-4 px-0 d-flex">
                        <img src="{{ env('APP_URL') }}/assets/images/learning-center/young-reader.png"
                             class="img-fluid learning-center-reader"
                             alt="young boy reading braille">
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--//END COMMUNITY CENTER PAGE -->
@endsection

