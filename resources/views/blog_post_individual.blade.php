@extends('layouts/public')
@section('content')

    <!--============================= INDIVIDUAL BLOG POST PAGE =============================-->
    <section class="blog p-0">
        <div class="container-fluid">
            <div class="row">
                <div id="search-results" class="col-md-12 text-center">
                    <h1 class="pt-5 pb-5 ">Blog Individual</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 mb-4">
                    <div class="blog-single-item">
                        <div class="blog-img_block">
                            <img src="{{env('APP_URL') . $post->cover_image }}" class="img-fluid" alt="blog-img">
                            <div class="blog-date">
                                <span>{{ \Carbon\Carbon::parse($post->published_at)->format('F j, Y') }}</span>
                            </div>
                        </div>
                        <div class="blog-title_block">
                            <h4>{{ $post->title }}</h4>
                            <h6>By: <span>{{ $post->author }}</span>  |  Category: <a href="/blog/category/{{ $post->category }}">{{ $post->category }}</a></h6>
                            <p>Hello, Hello {{ $post->body}}</p>
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
                            <a href="{{ route('blog.index') }}" class="blog-tags {{ request()->is('blog') ? 'active-tag' : '' }}">
                                <span>Return to all posts >>></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div>
                        <h3>Featured Post</h3>
                        @foreach($featuredPosts as $featuredPost)
                            <div class="featured-post-card">
                                <div class="blog-featured-post-container-img">
                                    <a href="{{ route('blog.show', $featuredPost->slug) }}">
                                        <img src="{{env('APP_URL') . $featuredPost->cover_image }}" class="img-fluid" alt="{{ $featuredPost->title }}">
                                    </a>
                                </div>
                                <div class="blog-featured-post-container-content">
                                    <a href="{{ route('blog.show', $featuredPost->slug) }}">
                                        <h5>{{ $featuredPost->title }}</h5>
                                        <p>{{ Str::limit($post->body, 60) }}</p>
                                    </a>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                {{--Side section- Tags Section--}}
                    <div class="blog-tags_wrap">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Tags</h3>
                            </div>
                            <a href="/blog/" class="blog-tags {{ request()->is('blog') ? 'active-tag' : '' }}">
                                <span>All Posts</span>
                            </a>
                            @foreach($categoryPosts as $categoryPost)
                                <a href="/blog/category/{{ $categoryPost->category }}" class="blog-tags {{ request()->is('blog/category/' . $categoryPost->category) ? 'active-tag' : '' }}">
                                    <span>{{ $categoryPost->category }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=======END INDIVIDUAL BLOG POST PAGE =========-->
@endsection
