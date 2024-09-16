@extends('layouts/public')
@section('content')

    <!--============================= EDUCATIONAL SERVICES =============================-->
    <section class="mb-5">
        <div class="container-fluid text-center m-0 p-0">
            <div class="row ">
                <div class="col-md-12">
                    <h1 class="h1-spacing">Educational Services</h1>
                </div>
            </div>
        </div>

        {{--CARD HERE--}}
        <div class="container-fluid">
            <div class="row justify-content-center mb-5">
                @foreach ($services as $service)
                    @if($service->category === 'education')
                        <div class="col-10 col-md-6 col-lg-3 background-secondary business-service-card-container">
                            <div>
                                <div class="pt-4">
                                    <h2 class="business-service-title text-center">{{ $service->title }}</h2>
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
                <div class="col-8 col-lg-4 text-center button-primary-cta mb-5">
                    <a href="/contact" role="button" aria-label="Fill out our contact us form">Work with Us!</a>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-10 col-md-10">
                    <h2>Diversity and Inclusion</h2>
                    <p>At House of Light, we firmly believe in diversity, equity, inclusion, and accessibility. These values are deeply rooted in our identity as our team comprises individuals with diverse backgrounds, cultures, and perspectives, which inspires us to continuously strive for inclusivity and accessibility. Here at House of Light, we ensure that “Visibility” is at the forefront of our business.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--//END EDUCATIONAL SERVICES -->
@endsection
