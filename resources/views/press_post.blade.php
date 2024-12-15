@php use Illuminate\Support\Str; @endphp
@extends('layouts/public')
@section('content')

    <!--============================= PRESS POSTS =============================-->
    <section class="book">
        <div class="container-fluid">
            <div class="row">
                <div id="search-results" class="col-md-12 text-center">
                    <h1 class="h1-spacing">Press Posts</h1>
                </div>
            </div>
            <!--============================= ARTICLE SECTION =============================-->
            <div class="row press-container">
                <div class="col-md-8">
                    <hr>
                    @foreach($articles as $article)
                        @php
                            $isOldImage = Str::startsWith($article->cover_image_path, '/assets/images/press-page');
                        @endphp
                        <div>

                            <h2>{{ $article->title }}</h2>
                            <div class="d-flex ">
                                <p class="mr-4 fw-bold">By: {{ $article->author }}</p>
                                <p>{{ \Carbon\Carbon::parse($article->published_at)->format('F j, Y') }}</p>
                            </div>
                            <div class="blog-img_block text-center">
                                @if($isOldImage)
                                    <img src="{{asset($article->cover_image_path) }}" class="img-fluid press-image" alt="{{ $article->title }}">
                                @else
                                    <img src="{{ Storage::url($article->cover_image_path) }}" class="img-fluid press-image" alt="{{ $article->title }}">
                                @endif

                            </div>


                            <p class="press-post-img-caption">{{ $article->img_caption }}</p>
                            <p>{!! $article->body !!}</p>
                            <br>

                            @if($article->external_link_url)
                            <div class="press-post-read-more-container">
                                <a href="{{$article->external_link_url}}">See full article >>></a>
                                <br>
                            </div>
                            @endif
                            <div class="blog-icons">
                                <div class="blog-share_block">
                                    <ul>
                                        <li><a href="https://www.linkedin.com/company/house-of-light-llc" aria-label="Visit our LinkedIn page"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.tiktok.com/@house_of_lightllc" aria-label="Visit our Tiktok page">
                                                <svg class="pt-1" fill="#3f74af" width="18" height="18" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M412.19,118.66a109.27,109.27,0,0,1-9.45-5.5,132.87,132.87,0,0,1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14,23.9,350,16,350.13,16H267.69V334.78c0,4.28,0,8.51-.18,12.69,0,.52-.05,1-.08,1.56,0,.23,0,.47-.05.71,0,.06,0,.12,0,.18a70,70,0,0,1-35.22,55.56,68.8,68.8,0,0,1-34.11,9c-38.41,0-69.54-31.32-69.54-70s31.13-70,69.54-70a68.9,68.9,0,0,1,21.41,3.39l.1-83.94a153.14,153.14,0,0,0-118,34.52,161.79,161.79,0,0,0-35.3,43.53c-3.48,6-16.61,30.11-18.2,69.24-1,22.21,5.67,45.22,8.85,54.73v.2c2,5.6,9.75,24.71,22.38,40.82A167.53,167.53,0,0,0,115,470.66v-.2l.2.2C155.11,497.78,199.36,496,199.36,496c7.66-.31,33.32,0,62.46-13.81,32.32-15.31,50.72-38.12,50.72-38.12a158.46,158.46,0,0,0,27.64-45.93c7.46-19.61,9.95-43.13,9.95-52.53V176.49c1,.6,14.32,9.41,14.32,9.41s19.19,12.3,49.13,20.31c21.48,5.7,50.42,6.9,50.42,6.9V131.27C453.86,132.37,433.27,129.17,412.19,118.66Z"></path>
                                                </svg>
                                            </a></li>
                                        <li><a href="https://www.instagram.com/house_of_lightllc/" aria-label="Visit our Instagram page"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.facebook.com/houseoflightllc" aria-label="Visit our Facebook page"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li> Share :</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach

                <!-- Pagination Links -->
                    @if($articles->lastPage() > 1 )
                        <div class="d-flex justify-content-center press-post-pagination-container">
                            {{ $articles->links('pagination::bootstrap-4') }}
                        </div>
                    @endif
                </div>
    <!--//END ARTICLE COLUMN -->

                <!--============================= SIDEBAR COLUMN =============================-->
                        <div class="col-md-4">
                            @if($articlesSidebar->count() > 0)
                                <h3>Articles</h3>
                                @foreach($articlesSidebar as $articleSide)
                                <div class="research-posts">
                                    <div class="research-news_block">
                                        <span>{{ \Carbon\Carbon::parse($articleSide->published_at)->format('F j, Y') }}</span>
                                        <a href="{{$articleSide->external_link_url}}"><p>{{ $articleSide->title }}</p></a>
                                    </div>
                                </div>
                                @endforeach
                            @endif

                            <hr>
                            @if($podcasts->count() > 0)
                                <h3>Podcasts</h3>
                                @foreach($podcasts as $podcast)
                                    <div class="research-posts">
                                        <div class="research-news_block">
                                            <span>{{ \Carbon\Carbon::parse($podcast->published_at)->format('F j, Y') }}</span>
                                            <a href="{{ $podcast->external_link_url}}"><p>{{ $podcast->title }}</p></a>
                                        </div>
                                    </div>
                                @endforeach

                            <!-- Pagination Links -->
                                @if($podcasts->lastPage() > 1 )
                                    <div class="d-flex justify-content-center press-post-pagination-container">
                                        {{ $podcasts->links('pagination::bootstrap-4') }}
                                    </div>
                                @endif
                            @endif
                        </div>
            <!--//END SIDEBAR SUMMARY -->
            </div>
        </div>
    </section>
    <!--//END PRESS POST -->
@endsection
