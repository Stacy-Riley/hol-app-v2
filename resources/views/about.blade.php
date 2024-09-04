@extends('layouts/public')
@section('content')

    <!--============================= ORIGINS SECTION =============================-->
<section class="about background-primary">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 text-center">
                <h1 class="pt-5 pb-5">The Vision Behind <span class="about-title-span">House of Light</span></h1>
            </div>
        </div>
        <div class="row justify-content-center p-3 pb-5">
            <div class="col-md-5">
                <h2>Origin</h2>
                <p>
                    Sierra Dockery, founder of House of Light, is a passionate advocate for individuals with visual impairments. Her journey to creating a global impact began in 2015 with a mission to make a profound difference beyond the classroom.
                </p>
                <p>
                    With roots tracing back to her time as a special education student at Illinois State University, Sierra's path was illuminated when her grandmother experienced vision loss shortly after graduation. Armed with her education, she became a steadfast guide, witnessing firsthand the transformative power of support for the visually impaired.
                </p>
                <p>
                    Frustrated by limitations in traditional educational settings, Sierra established House of Light to create a platform for broader impact. Today, her organization reaches across borders, empowering people who are blind or visually impaired to live independently and fully.
                </p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid w-100"  src="{{env('APP_URL')}}/assets/images/about-page/about-portrait.png" alt="Portrait of Founder's Grandmother">
            </div>
        </div>

        <div class="row justify-content-center pl-3 pr-3 pb-5">
            <div class="col-md-5 about-row-3">
                <img class="img-fluid w-100" src="{{env('APP_URL')}}/assets/images/about-page/HoL-logo-tr-bg.png" alt="House of Light Logo">
            </div>
            <div class="col-md-5 ">
                <h2>Mission</h2>
                <p>
                    Our mission is to promote inclusion for individuals with visual impairment by engaging them in society whether in commercial, institutional, or educational spaces.
                </p>
                <br>
                <h2>Vision</h2>
                <p>
                    To improve the lives of those who are blind or visually impaired globally by bringing the sighted world to them through education, inclusion, and innovation.
                </p>
            </div>
        </div>
   </div>
</section>
    <!--//END ORIGINS SECTION -->
    <!--============================= SUSTAINABILITY SECTION =============================-->

    <!-- Business Sustainability Section -->
<section id="sustainability-container" class="background-secondary pl-3 pr-3 py-5">
    <div class="row text-center">
        <div class="col emphasis">
            <h2 id="sustainability-h2" >We Are Always Growing!</h2>
        </div>
    </div>

    <div class="row text-center d-flex justify-content-center">
        <div  class="logo col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
            <a href="https://www.10ksbapply.com/" aria-label="Link to Goldman-Sachs Small Business Initiative">
                <img class="image-fluid" src="{{env('APP_URL')}}/assets/images/about-page/goldman-sachs-logo.png" alt="Link to Goldman Sachs">
            </a>
        </div>
    </div>
</section>

    <!--//SUSTAINABILITY SECTION -->
@endsection
