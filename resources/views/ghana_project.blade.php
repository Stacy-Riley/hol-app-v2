@extends('layouts/public')
@section('content')

    <!--============================= GHANA PROJECT =============================-->
    <section class="mb-5">
        <div class="container-fluid m-0 p-0">
            <div class="row background-secondary text-center">
                <div class="col-md-12">
                    <h1 class="pt-5 pb-5">Ghana Project</h1>
                </div>
            </div>

            <div class="row justify-content-center p-3 pb-5 mt-5">
                <div class="col-md-4 mb-4">
                    <img class="img-fluid w-100"  src="{{env('APP_URL')}}/assets/images/ghana-pics/full-pictures/feature-full.jpg" alt="CEO Sierra getting out of a white guide van in Ghana and smiling at the camera">
                </div>

                <div class="col-md-6">
                    <p>Sierra Dockery founded House of Light in 2015 to make a difference beyond the classroom. Her journey began years earlier at Illinois State University. Four weeks after earning her degree in special education, Sierra’s grandmother began losing her vision.
                        Her education helped her assist her grandmother, marking the first of many times she would guide a visually impaired person.
                        <br>Feeling limited in her role at a public school in Chicago, Sierra started House of Light. Now, her organization has an international reach, helping blind or visually impaired people adapt to everyday activities.
                    </p>
                    <br>
                    <div class="d-flex justify-content-around button-primary-cta">
                        <a href="https://gofund.me/d92b8bb8" role="button" >Donate</a>
                        <a href="/sponsor_form" role="button" >Sponsor</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    Video section with gallery of images--}}
    <section class="ghana-media background-primary">
        <h3 class="visually-hidden">Images of Ghana Project</h3>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-10 d-flex justify-content-center">
                    <div class="video-container">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/9OgCLSamuto" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>


        <div class="gallery-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{env('APP_URL')}}/assets/images/ghana-pics/full-pics/photo1-full.jpeg" class="grid image-link">
                            <figure class="effect-bubba gallery-img-wrap">
                                <img src="{{env('APP_URL')}}/assets/images/ghana-pics/photo1.png" class="img-fluid" alt="Sierra shakes hands with a Ghanaian teacher with smiling students and staff watching from the background">
                                <figcaption>
                                    <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{env('APP_URL')}}/assets/images/ghana-pics/full-pics/photo2-full.jpeg" class="grid image-link">
                            <figure class="effect-bubba gallery-img-wrap">
                                <img src="{{env('APP_URL')}}/assets/images/ghana-pics/photo2.png" class="img-fluid" alt="A blind Ghanaian man in an orange shirt smiles enthusiastically">
                                <figcaption>
                                    <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{env('APP_URL')}}/assets/images/ghana-pics/full-pics/photo3-full.jpeg" class="grid image-link">
                            <figure class="effect-bubba gallery-img-wrap">
                                <img src="{{env('APP_URL')}}/assets/images/ghana-pics/photo3.png" class="img-fluid" alt="Sierra and a staff member of the Cape Coast School for the Deaf and Blind stand in front of the painted mural showing their logo, a coat of arms that is diagonally cut into a blue sectional and striped black and white sectional with a drawing of a walking man with a cane and an ear in the middle. The bottom reads 'Disability Not Inability'">
                                <figcaption>
                                    <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
{{--                Second Lower Row--}}
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{env('APP_URL')}}/assets/images/ghana-pics/full-pics/photo4-full.jpeg" class="grid image-link">
                            <figure class="effect-bubba gallery-img-wrap">
                                <img src="{{env('APP_URL')}}/assets/images/ghana-pics/photo4.png" class="img-fluid" alt="Ghanaian students and staff for the Cape Coast School for the Deaf and blind in a gathering">
                                <figcaption>
                                    <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{env('APP_URL')}}/assets/images/ghana-pics/full-pics/photo5-full.jpeg" class="grid image-link">
                            <figure class="effect-bubba gallery-img-wrap">
                                <img src="{{env('APP_URL')}}/assets/images/ghana-pics/photo5.png" class="img-fluid" alt="Ghanaian students play with basketballs and lanyards">
                                <figcaption>
                                    <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{env('APP_URL')}}/assets/images/ghana-pics/full-pics/photo6-full.jpeg" class="grid image-link">
                            <figure class="effect-bubba gallery-img-wrap">
                                <img src="{{env('APP_URL')}}/assets/images/ghana-pics/photo6.png" class="img-fluid" alt="Three young Ghanaian students in bright orange line up smiling against a wall and one in grey comes out of a green door and looks at his waving peer">
                                <figcaption>
                                    <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="ghana-content container-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
                <h3>History</h3>
                <p>
                    In 2018, our CEO had the incredible opportunity to visit Ghana alongside her mentor,
                    Denise Allums. As a licensed Teacher of the Visually Impaired, Sierra's journey as an
                    entrepreneur began as a resource teacher in the Chicago Public Schools. This rich
                    background laid the foundation for her passion and commitment to creating positive
                    change. More importantly, the place in which she created our slogan, “Making a
                    Difference Beyond the Classroom.”
                </p>
                <p>
                    This year, Sierra's mentor, Denise Allums, embarked on a life-transforming Tour of Ghana,
                    in collaboration with Linal Harris of Insights 4 Coaching Life. During a heartfelt
                    conversation, Denise revealed that the tour would include a stop at the Cape Coast School
                    for the Deaf and Blind.
                </p>
                <p>
                    Driven by a deep passion to make a difference, Sierra felt compelled to take action. She
                    turned to Facebook, leveraging her extensive network to seek support for a cause close to
                    her heart: the Cape Coast School for the Deaf and Blind. Within just 24 hours,
                    contributions poured in from all corners of the world, leaving Sierra exhilarated by the
                    overwhelming response from her supporters.
                </p>
                <p>
                    In an unexpected turn of events, Denise extended a heartfelt invitation, urging Sierra to
                    embark on a transformative trip to Africa. The experience would forge an indelible
                    connection with Ghana, its people, and a profound mission to empower the lives of students
                    at the Cape Coast School for the Deaf and Blind.
                </p>
                <p>
                    Together, we established an annual fundraising mission to address diverse needs, providing
                    essential resources such as Braille books, Braille writers, canes, sports equipment, and
                    invaluable professional development opportunities.
                </p>
            </div>
        </div>
    </section>

    <section class="ghana-sponsor background-primary">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-10">
                    <h3>Sponsorship</h3>
                    <p>
                        At House of Light, we believe in the power of collaboration and compassionate
                        action to bring about transformative change.
                    </p>
                    <p>
                        Partner with us and be a part of creating a brighter future for students at the Cape
                        Coast School for the Deaf and Blind. Together, we can provide vital resources,
                        professional development opportunities, and essential support that will uplift and
                        empower these young minds.
                    </p>
                    <br>
                    <div class="button-secondary-cta" >
                    <a href="/sponsor_form" role="button">Sponsor</a>
                    </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="ghana-donate container-fluid background-secondary">
        <div class="row justify-content-center">
            <div class="col-10">
                <h3>Donate</h3>
                <br>
                <h3 class="text-center">August 2023 Update: Progress at Cape Coast School for the Deaf and Blind</h3>
                <p>
                    We are thrilled to share that as of June 2023, the Cape Coast School for the Deaf and
                    Blind has secured funding from their government, marking a significant step forward in
                    addressing foundational issues and building up the school.
                </p>
                <p>
                    While this funding is a substantial boost, the school still requires specific
                    materials to ensure they can maintain quality education and enhance daily living skills
                    for their students. Your continued support in providing these essential resources will
                    make a lasting impact on the lives of these young learners.
                </p>
                <p>
                    Together, let's rally behind the Cape Coast School for the Deaf and Blind and help them
                    create a nurturing environment where each student can thrive.
                </p>
                <p>
                    We are still actively collecting funds and donations to support our cause. Here is a list of of items we are still in need of:
                </p>
                <ul>
                    <li>Canes</li>
                </ul>
                <br>
                <div class="button-primary-cta">
                    <a href="https://gofund.me/d92b8bb8" role="button">Donate</a>
                </div>

            </div>
        </div>
    </section>

    <section class="ghana-past-collaborations container-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
                <h3>Past Collaborations</h3>
                <p class="mb-0">
                    In 2022, House of Light joined forces with Insights 4 Life Coaching and the Dream Academy
                    Foundation, a non-profit organization. Together, we embarked on a journey to bring social
                    awareness and essential social services to the Cape Coast School for the Deaf and Blind.
                </p>
                <br>
                <div class="d-flex justify-content-center">
                    <img class="img-fluid" src="{{env('APP_URL')}}/assets/images/partner-logos/dream-academy.png" alt="Dream Academy logo, lightbulb in center of Dream and Academy lightbulb and foundation in gold">
                </div>
                <br>
                <p>
                    “Disability doesn't mean inability,” says the school's slogan, Cape Coast School for the
                    Deaf and Blind in Ghana. So, by working together, we can improve the lives of young people
                    who are blind or visually impaired. We agree with this and support this concept, which is
                    why we've chosen to work with the Chicago-based Dream Academy Foundation this year to
                    raise money for the Cape Coast School's children.
                </p>
                <p>
                    Your contribution has an impact. A child who is blind or visually challenged can have
                    your support to see the world. You can help a child who is blind or visually impaired
                    see the world.
                </p>
            </div>
        </div>
    </section>
    <!--//END GHANA PROJECT -->
@endsection
@section('scripts')
    <!-- jQuery, Bootstrap JS. -->
    <script src="{{env('APP_URL')}}/assets/guest/js/jquery.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/guest/js/tether.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/guest/js/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="{{env('APP_URL')}}/assets/guest/js/slick.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/guest/js/waypoints.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/guest/js/counterup.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/guest/js/instafeed.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/guest/js/owl.carousel.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/guest/js/validate.js"></script>
    <script src="{{env('APP_URL')}}/assets/guest/js/tweetie.min.js"></script>
    <!-- Subscribe -->
    <script src="{{env('APP_URL')}}/assets/guest/js/subscribe.js"></script>

    <script src="{{env('APP_URL')}}/assets/guest/js/jquery-ui-1.10.4.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/guest/js/jquery.isotope.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/guest/js/animated-masonry-gallery.js"></script>
    <!-- Magnific popup JS -->
    <script src="{{env('APP_URL')}}/assets/guest/js/jquery.magnific-popup.js"></script>
    <!-- Script JS -->
    <script src="{{env('APP_URL')}}/assets/guest/js/script.js"></script>

@endsection
