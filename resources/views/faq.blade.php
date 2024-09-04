@extends('layouts/public')
@section('content')

    <!--============================= Faq =============================-->
<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center px-0">
                <h1 class="pt-5 pb-5">FAQ</h1>
            </div>
        </div>
        <div class="row">
                <div class="col-md-12">
                    <div  role="tablist" aria-multiselectable="true">
                        @foreach($faqs as $index=>$faq)
                            <div class="card">
                                <div class="card-header" role="tab" id="heading{{ $index }}">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" class="accordian-link" data-parent="#accordion" href="#collapse{{ $index }}" aria-expanded="true" aria-controls="collapse{{ $index }}">
                                            {!! $faq->question !!}
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse{{ $index }}" class="collapse faq-answer-container" role="tabpanel" aria-labelledby="heading{{ $index }}">
                                    <div class="card-block">
                                        <p>{!! $faq->answer !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--//End Faq -->

@endsection
