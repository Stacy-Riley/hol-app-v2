@extends('layouts/public')
@section('content')

    <!--============================= CONTACT PAGE =============================-->
    <section class="pb-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 text-center">
                    <h1 class="h1-spacing">Contact Us</h1>
                </div>
            </div>

        {{--Dubsado Form--}}
            <div class="row d-flex justify-content-center">
                <div class="col col-10">
                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.14/iframeResizer.min.js"></script><iframe src="https://hello.dubsado.com/public/form/view/64b5b829a65573003a47a1a6" frameborder="0" style="width:1px; min-width:100%;"></iframe><script type="text/javascript">setTimeout(function(){iFrameResize({checkOrigin: false, heightCalculationMethod: "taggedElement"});}, 30)</script>
                </div>
            </div>
        </div>
    </section>
    <!--//END CONTACT PAGE -->
@endsection
