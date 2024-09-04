@extends('layouts/public')
@section('content')

    <!--============================= CAREER PAGE =============================-->
    <section class="career">
        <div class="container-fluid">
            <div class="row background-primary">
                <div class="col-md-12 text-center px-0">
                    <h1 class="pt-5 pb-5">Careers</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10 px-2 my-5">
                    <h2 class="my-3">Open Positions</h2>
                    @foreach($careerListings as $index=> $careerListing)
                        <div class="careerListing-container">
                            <h3 class="pt-3">{!! $careerListing->title !!}</h3>
                            <div>
                                {!! $careerListing->body !!}
                            </div>
                            <br>
                            <div class="button-primary-cta a mb-5">
                                <a href="/career/apply" aria-label="Apply for this position">Apply Here</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Return to Top Link -->
            <div class="row justify-content-end mr-2 mb-5">
                <a href="" id="return-to-top" role="button" aria-label="Return to the top of the page">Return to Top</a>
            </div>
        </div>
    </section>
            <!--//END CAREER -->
@endsection
@section('scripts')
    <script>
        // Show the link when the user scrolls down 100px from the top
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                document.getElementById("return-to-top").style.display = "block";
            } else {
                document.getElementById("return-to-top").style.display = "none";
            }
        }

        // Smooth scroll to the top of the page when the user clicks the link
        document.getElementById("return-to-top").onclick = function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        };
    </script>
@endsection
