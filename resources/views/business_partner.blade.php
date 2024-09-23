@php use Illuminate\Support\Str; @endphp
@extends('layouts/public')
@section('content')

    <!--============================= BUSINESS PARTNER PAGE =============================-->
<section class="business-partners">
        <div class="container-fluid">
            <div class="row background-primary">
                <div class="col-md-12 text-center px-0">
                    <h1 class="h1-spacing">Our Partners</h1>
                </div>
            </div>
        </div>
        {{--  Education Logos--}}
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12 text-center px-0 py-4">
                    <h2 class="pt-5 pb-0">Education</h2>
                </div>
            </div>
            <div class="row justify-content-center py-5 ">
                @foreach($educationPartners as $partner)
                    <div class="campus-img_block-wrapper col-lg-3 col-md-6 col-12 p-3 d-flex justify-content-center align-items-center">
                            @php
                                $isOldImage = Str::startsWith($partner->logo_path, '/assets/images/partner-logos/education');
                            @endphp
                            <div class="campus-img_block">
                                @if($isOldImage)
                                    <a href="{{ $partner->business_url }}">
                                        <img src="{{asset($partner->logo_path) }}" class="img-fluid " alt="{{ $partner->name }}" aria-label="Logo of {{$partner->name}}">
                                    </a>
                                @else
                                    <a href="{{ $partner->business_url }}">
                                        <img src="{{ Storage::url($partner->logo_path) }}" class="img-fluid" alt="{{ $partner->name }}" aria-label="Logo of {{$partner->name}}">
                                    </a>
                                @endif
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
        <hr>
{{--  Corporate Logos--}}
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 text-center px-0 py-4">
                    <h2 class="pt-4 pb-0">Corporate</h2>
                </div>
            </div>
            <div class="row justify-content-center py-5">
                @foreach($corporatePartners as $partner)
                    <div class="campus-img_block-wrapper col-lg-3 col-md-6 col-12 p-3 d-flex justify-content-center align-items-center">
                    <div class="campus-img_block">
                        @php
                            $isOldImage = Str::startsWith($partner->logo_path, '/assets/images/partner-logos/corporate');
                        @endphp
                        <div class="campus-img_block">
                            @if($isOldImage)
                                <a href="{{ $partner->business_url }}">
                                    <img src="{{asset($partner->logo_path) }}" class="img-fluid" alt="{{ $partner->name }}" aria-label="Logo of {{$partner->name}}">
                                </a>
                            @else
                                <a href="{{ $partner->business_url }}">
                                    <img src="{{ Storage::url($partner->logo_path) }}" class="img-fluid" alt="{{ $partner->name }}" aria-label="Logo of {{$partner->name}}">
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>
    <!--//END BUSINESS PARTNER PAGE -->
@endsection
