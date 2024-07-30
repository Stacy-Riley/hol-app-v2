@extends('layouts/public')
@section('content')

    <!--============================= BLOG POST CATEGORY PAGE =============================-->
    <section class="blog p-0">
        <div class="container-fluid">
            <div class="row">
                <div id="search-results" class="col-md-12 text-center">
                    <h1 class="pt-5 pb-5 ">Blog Category Page</h1>
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
                                <h6>By: <span>{{ $post->author }}</span>  |  Category: {{ $post->category }}</h6>
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
            {{--Pagination code--}}
                    @if($posts->lastPage() > 1 )
                        <div class="d-flex justify-content-center press-post-pagination-container">
                            {{ $posts->links('pagination::bootstrap-4') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-4">
            {{--Side section- Tags/Category Section--}}
                    <div class="blog-tags_wrap">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Tags</h3>
                            </div>
                            <a href="{{ route('blog.index') }}" class="blog-tags {{ request()->is('blog') ? 'active-tag' : '' }}">
                                <span>All Posts</span>
                            </a>
                            @foreach($categoryPosts as $categoryPost)
                                <a href="{{ route('blog.category', $categoryPost->category) }}" class="blog-tags {{ request()->is('blog/category/' . $categoryPost->category) ? 'active-tag' : '' }}">
                                    <span>{{ $categoryPost->category }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--//END BLOG POST CATEGORY PAGE -->
@endsection
