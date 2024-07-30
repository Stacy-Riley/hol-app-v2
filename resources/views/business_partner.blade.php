@extends('layouts/public')
@section('content')

    <!--============================= BUSINESS PARTNER PAGE =============================-->
    <section class="business-partners">
        <div class="container-fluid">
            <div class="row background-primary">
                <div class="col-md-12 text-center px-0">
                    <h1 class="pt-5 pb-5">Our Partners</h1>
                </div>
            </div>
        </div>
{{--  Education Logos--}}
        <div class="container-fluid background-secondary">
            <div class="row">
                <div class="col-md-12 text-center px-0 py-4">
                    <h2 class="pt-5 pb-0">Education</h2>
                </div>
            </div>
            <div class="row  py-5 background-secondary">
                @foreach($educationPartners as $partner)

                        <div class="d-flex justify-content-center col-12 col-md-6 col-lg-4 d-flex align-items-center justify-content-center">
                            <div class="campus-img_block">
                                <a href="{{ $partner->business_url }}">
                                    <img src="{{env('APP_URL') . $partner->logo_path }}" class="img-fluid" alt="campus-img">
                                </a>
                            </div>
                        </div>

                @endforeach
            </div>
        </div>



{{--  Corporate Logos--}}
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 text-center px-0 py-4">
                    <h2 class="pt-5 pb-0">Corporate</h2>
                </div>
            </div>
            <div class="row justify-content-center py-5">
                @foreach($corporatePartners as $partner)
                    @if($partner->category === 'corporate')
                <div class="d-flex justify-content-center col-12 col-md-6 col-lg-4 d-flex align-items-center justify-content-center">
                    <div class="campus-img_block">
                        <a href="{{ $partner->business_url }}">
                            <img src="{{env('APP_URL') . $partner->logo_path }}" class="img-fluid" alt="campus-img">
                        </a>
                    </div>
                </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!--//END BUSINESS PARTNER PAGE -->
@endsection
