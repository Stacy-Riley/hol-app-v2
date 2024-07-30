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
                <h2>A Journey from Education to <span class="about-subtitle-span">Global Advocacy</span></h2>
                <p>Sierra Dockery founded House of Light in 2015 to make a difference beyond the classroom. Her journey began years earlier at Illinois State University. Four weeks after earning her degree in special education, Sierra’s grandmother began losing her vision.
                    Her education helped her assist her grandmother, marking the first of many times she would guide a visually impaired person.
                    <br>Feeling limited in her role at a public school in Chicago, Sierra started House of Light. Now, her organization has an international reach, helping blind or visually impaired people adapt to everyday activities.
                </p>
                <br>
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
                <p>Our mission is to promote inclusion for individuals with visual impairment by engaging them in society whether in commercial, institutional, or educational spaces. We do this by providing training and programming that targets in-class training for educators, workshops, and professional development of corporate managers who engage with those with disabilities.
                </p>
                <br>
                <h2>Vision</h2>
                <p>House of Light strives to be a collaborative, professional, and supportive educational consulting firm that will inspire each educator to be a better reflection of themselves. While obtaining the support they need to excel in a flexible, non-bureaucratic, and financially rewarding environment. We will engage in best practices, focus on meeting the needs of our stakeholders, and allow our students to excel at their own pace.
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
            <a href="https://www.10ksbapply.com/">
                <img class="image-fluid" src="{{env('APP_URL')}}/assets/images/about-page/goldman-sachs-logo.png" alt="Link to Goldman Sachs">
            </a>
        </div>
    </div>
</section>

    <!--//SUSTAINABILITY SECTION -->
@endsection
