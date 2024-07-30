@extends('layouts/public')
@section('content')

    <!--============================= BOOK PRODUCTS =============================-->
    <section class="book">
        <div class="container-fluid">
            <div class="row">
                <div id="search-results" class="col-md-12 text-center">
                    <h1 class="pt-5 pb-5">Braille Books</h1>
                </div>
            </div>

            <div class="row justify-content-center book-intro">
                <div class="col-md-8 text-center">
                    <p>
                        Please <a href="/contact">Contact Us</a> if you would like to purchase any of the Braille Books we have made for students. If you don't see what you want here, please take advantage of our <a href="/services/education">Transcription Services</a> and we'll make the book for you.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="course_filter background-secondary">
   {{--   Search Form--}}
                        <form action="{{ route('book_products.index') }}#search-results" method="GET">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-3">
                                    <select class="form-control custom-select" name="grade_level" autocomplete="off">
                                        <option value="">Select Grade</option>
                                        <option value="1">Grade One</option>
                                        <option value="2">Grade Two</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-2">
                                    <select class="form-control custom-select" name="pages" autocomplete="off">
                                        <option value="">Book Length</option>
                                        <option value="1">Less than 10 pages</option>
                                        <option value="2">10 - 20 pages</option>
                                        <option value="3">20 pages and above</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-2">
                                    <select class="form-control custom-select" name="cost" autocomplete="off">
                                        <option value="">Price Range</option>
                                        <option value="1">Less than $10</option>
                                        <option value="2">$10 to $20</option>
                                        <option value="3">$20 and above</option>
                                    </select>
                                </div>
                                <div class="col-md-12 col-lg-3">
                                    <button class="btn btn-block btn-admission" type="submit" role="button">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <br>
{{--   Book Card--}}
            <div class="row">
                @foreach ($bookProducts as $bookProduct)
                    <div class="col-md-4  mb-5">
                        <div class="book-card-container">
                            <div class="p-4">
                                <h4>Title: {{ $bookProduct->title }}</h4>
                                <p>Author: {{ $bookProduct->author }}</p>
                            </div>
                            <!-- // end .couse-desc-wrap -->
                            <div class="course_duration ml-0">
                                <ul class="book-card-details-container">
                                    <li>
                                        <p>Grade Level: </p><span>{{ $bookProduct->grade_level }}</span></li>
                                    <li>
                                        <p>Number of Pages: </p><span>{{ $bookProduct->num_pages }}</span></li>
                                    <li>
                                        <p>Price: </p><span>${{ $bookProduct->cost }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
            <!-- Return to Top Link -->
            <div class="row justify-content-end mr-2">
                <a href="" id="return-to-top" role="button" >Return to Top</a>
            </div>
        </div>
    </section>
    <!--//END BOOK PRODUCTS -->
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
