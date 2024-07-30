@extends('layouts/public')
@section('content')

    <!--============================= BLOG POST HOMEPAGE =============================-->
    <section class="blog p-0">
        <div class="container-fluid">
            <div class="row">
                <div id="search-results" class="col-md-12 text-center">
                    <h1 class="pt-5 pb-5 ">Blog Home</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 mb-5">
                    @foreach($posts as $post)
                    <div class="blog-single-item">
                        <div class="blog-img_block">
                            <img src="{{env('APP_URL') . $post->cover_image }}" class="img-fluid" alt="{{ $post->title }}">
                            <div class="blog-date">
                                <span>{{ \Carbon\Carbon::parse($post->published_at)->format('F j, Y') }}</span>
                            </div>
                        </div>
                        <div class="blog-title_block">
                            <h4><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h4>
                            <h6>By: <span>{{ $post->author }}</span>  |  Category: <a href="/blog/category/{{ $post->category }}">{{ $post->category }}</a></h6>
                            <p>{{ Str::limit($post->body, 150) }}</p>
                            <a href="{{ route('blog.show', $post->slug) }}">Read More</a>

                            <div class="blog-icons">
                                <div class="blog-share_block">
                                    <ul>
                                        <li><a href="https://www.linkedin.com/company/house-of-light-llc"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/house_of_lightllc/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.facebook.com/houseoflightllc"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li> Share :</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                        <!-- Pagination Links -->
                    @if($posts->lastPage() > 1 )
                        <div class="d-flex justify-content-center press-post-pagination-container">
                            {{ $posts->links('pagination::bootstrap-4') }}
                        </div>
                    @endif
                </div>

                <div class="col-md-4">
{{--Side section- Featured Posts--}}
                    <div >
                        <h3>Featured Post</h3>
                        @foreach($featuredPosts as $featuredPost)
                            <div class="featured-post-card">
                                <div class="blog-featured-post-container-img">
                                    <a href=href="{{ route('blog.show', $featuredPost->slug) }}">
                                        <img src="{{env('APP_URL') . $featuredPost->cover_image }}" class="img-fluid" alt="{{ $featuredPost->title }}">
                                    </a>
                                </div>
                                <div class="blog-featured-post-container-content">
                                    <a href="{{ route('blog.show', $featuredPost->slug) }}">
                                        <h5>Title: {{ $featuredPost->title }}</h5>
                                        <p>{{ Str::limit($post->body, 60) }}</p>
                                    </a>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>

{{--Side section- Tags Section--}}
                    <div class="blog-tags_wrap">
                        <div class="row pb-5">
                            <div class="col-md-12 justify-content-center">
                                <h3>Tags</h3>
                            </div>
                                @foreach($categoryPosts as $categoryPost)
                                    <a href="/blog/category/{{ $categoryPost->category }}" class="blog-tags">
                                        <span>{{ $categoryPost->category }}</span>
                                    </a>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END BLOG POST HOMEPAGE -->
@endsection
