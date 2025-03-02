@extends('layouts/public')
@section('content')

    <!--============================= CORPORATE SERVICES =============================-->
    <section>
    {{--   section class="mb-5"--}}
    <div class="corporate-services-background pb-5"
        style="
        background-image: url('{{ env('APP_URL') }}/assets/images/services/blind-woman-reading-braille-book-next-to-young-girl.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: bottom;
        background-attachment: fixed;
        color: #ffffff;
        overflow: hidden
        "
    >

        <div class="container-fluid text-center mb-5">
            <div class="row">
                <div class="col-md-12 m-0 pt-0 pb-5 background-secondary">
                    <h1 class="h1-spacing-corporate">Corporate Services</h1>
                    <div class=" text-center col-10 mx-auto">
                        <p>
                            At House of Light, we are dedicated to fostering a welcoming and integrated workplace through our specialized corporate training programs. Our expertise in supporting businesses to hire and empower individuals with disabilities helps create an environment where everyone feels a sense of belonging and participation.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{--CARD HERE--}}
        <div class="container-fluid">
            <div class="row justify-content-center mb-5">
                @foreach ($services as $service)
                    @if($service->category === 'corporate')
                        <div class="col-10 col-md-6 col-lg-3 background-secondary business-service-card-container">
                            <div>
                                <div class="pt-4">
                                    <h2 class="business-service-title text-center">{!! $service->title !!}</h2>
                                </div>
                            </div>
                            <div class="pb-2 business-service-card-body">
                                <p>{!! $service->body !!}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="row justify-content-center">
                <div class="col-8 col-lg-4 text-center button-primary-cta mb-5" id="button-work-with-us-corp">
                    <a href="/contact" role="button" aria-label="Fill out our contact us form">Work with Us!</a>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--//END CORPORATE SERVICES -->
@endsection
