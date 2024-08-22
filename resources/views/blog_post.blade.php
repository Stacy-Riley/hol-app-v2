@php use Illuminate\Support\Str; @endphp
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
                <div class="col-md-8 mb-5 px-4">
                    @foreach($posts as $post)
                    <div class="blog-single-item">
                        @php
                            $isOldImage = Str::startsWith($post->cover_image, 'assets/images/blog');
                        @endphp
                        <div class="blog-img_block">
                            @if($isOldImage)
                                <img src="{{asset($post->cover_image) }}" class="img-fluid" alt="{{ $post->title }}">
                            @else
                                <img src="{{ Storage::url($post->cover_image) }}" class="img-fluid" alt="{{ $post->title }}">
                           @endif
                            <div class="blog-date">
                                <span>{{ \Carbon\Carbon::parse($post->published_at)->format('F j, Y') }}</span>
                            </div>
                        </div>
                        <div class="blog-title_block">
                            <h4><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h4>
                            <h6>By: <span>{{ $post->author }}</span>  |  Category: <a href="/blog/category/{{ $post->category }}">{{ $post->category }}</a></h6>
                            <p>{!! Str::limit($post->body, 150) !!}</p>
                            <a href="{{ route('blog.show', $post->slug) }}">Read More</a>

                            <div class="blog-icons">
                                <div class="blog-share_block">
                                    <ul>
                                        <li><a href="https://www.linkedin.com/company/house-of-light-llc"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.tiktok.com/@house_of_lightllc">
                                                <svg class="pt-1" fill="#3f74af" width="18" height="18" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M412.19,118.66a109.27,109.27,0,0,1-9.45-5.5,132.87,132.87,0,0,1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14,23.9,350,16,350.13,16H267.69V334.78c0,4.28,0,8.51-.18,12.69,0,.52-.05,1-.08,1.56,0,.23,0,.47-.05.71,0,.06,0,.12,0,.18a70,70,0,0,1-35.22,55.56,68.8,68.8,0,0,1-34.11,9c-38.41,0-69.54-31.32-69.54-70s31.13-70,69.54-70a68.9,68.9,0,0,1,21.41,3.39l.1-83.94a153.14,153.14,0,0,0-118,34.52,161.79,161.79,0,0,0-35.3,43.53c-3.48,6-16.61,30.11-18.2,69.24-1,22.21,5.67,45.22,8.85,54.73v.2c2,5.6,9.75,24.71,22.38,40.82A167.53,167.53,0,0,0,115,470.66v-.2l.2.2C155.11,497.78,199.36,496,199.36,496c7.66-.31,33.32,0,62.46-13.81,32.32-15.31,50.72-38.12,50.72-38.12a158.46,158.46,0,0,0,27.64-45.93c7.46-19.61,9.95-43.13,9.95-52.53V176.49c1,.6,14.32,9.41,14.32,9.41s19.19,12.3,49.13,20.31c21.48,5.7,50.42,6.9,50.42,6.9V131.27C453.86,132.37,433.27,129.17,412.19,118.66Z"></path>
                                                </svg>
                                            </a></li>
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
                                @php
                                    $isOldImage = Str::startsWith($featuredPost->cover_image, 'assets/images/blog');
                                @endphp
                                <div class="blog-featured-post-container-img">
                                    @if($isOldImage)
                                        <a href="{{ route('blog.show', $featuredPost->slug) }}">
                                            <img src="{{asset($featuredPost->cover_image) }}" class="img-fluid" alt="{{ $featuredPost->title }}">
                                        </a>
                                    @else
                                        <a href="{{ route('blog.show', $featuredPost->slug) }}">
                                            <img src="{{ Storage::url($featuredPost->cover_image) }}" class="img-fluid" alt="{{ $featuredPost->title }}">
                                        </a>
                                    @endif
                                </div>
                                <div class="blog-featured-post-container-content">
                                    <a href="{{ route('blog.show', $featuredPost->slug) }}">
                                        <h5>{{ $featuredPost->title }}</h5>
                                        <p>{!! Str::limit($featuredPost->body, 60) !!}</p>
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
