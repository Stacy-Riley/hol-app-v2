@php use Illuminate\Support\Str; @endphp
@extends('layouts/public')
@section('content')

    <!--============================= PRESS POSTS =============================-->
    <section class="book">
        <div class="container-fluid">
            <div class="row">
                <div id="search-results" class="col-md-12 text-center">
                    <h1 class="pt-5 pb-5 ">Press Posts</h1>
                </div>
            </div>
            <!--============================= ARTICLE SECTION =============================-->
            <div class="row">
                <div class="col-md-8">
                    @foreach($articles as $article)
                        @php
                            $isOldImage = Str::startsWith($article->cover_image_path, '/assets/images/press-page');
                        @endphp
                        <div>
                            <hr>
                            <h2>{{ $article->title }}</h2>
                            <div class="d-flex ">
                                <p class="mr-4 fw-bold">By: {{ $article->author }}</p>
                                <p>{{ \Carbon\Carbon::parse($article->published_at)->format('F j, Y') }}</p>
                            </div>

                            @if($isOldImage)
                                <img src="{{asset($article->cover_image_path) }}" class="img-fluid" alt="{{ $article->title }}">
                            @else
                                <img src="{{ Storage::url($article->cover_image_path) }}" class="img-fluid" alt="{{ $article->title }}">
                            @endif

                            <p class="press-post-img-caption">{{ $article->img_caption }}</p>
                            <p>{{ $article->body }}</p>
                            <br>

                            @if($article->external_link_url)
                            <div class="press-post-read-more-container">
                                <a href="{{$article->external_link_url}}">See full article >>></a>
                                <br>
                            </div>
                            @endif
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
                            <h3>Articles</h3>
                            @foreach($articlesSidebar as $articleSide)
                            <div class="research-posts">
                                <div class="research-news_block">
                                    <span>{{ \Carbon\Carbon::parse($articleSide->published_at)->format('F j, Y') }}</span>
                                    <a href="{{$articleSide->external_link_url}}"><p>{{ $articleSide->title }}</p></a>
                                </div>
                            </div>
                            @endforeach

                            <hr>
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
                        </div>
            <!--//END SIDEBAR SUMMARY -->
            </div>
        </div>
    </section>
    <!--//END PRESS POST -->
@endsection
