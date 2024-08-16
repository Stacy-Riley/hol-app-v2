@extends('layouts/admin')
@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-10 offset-md-2">
                <h1 class="text-center ml-4 mt-5">Welcome to the BlogPosts </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-2">
                <a href="#" type="button" class="btn">New Post</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-2">
                <div class="d-flex justify-content-center">
                <ul class="list-inline">
                    @foreach($posts as $index=> $post)
                        <li class="admin-blog-list-item">
                            <div class="d-flex align-items-center">
                                <div class="mx-2">
                                    <a href="#" class="admin-delete-icon" aria-details="delete post">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                        </span>
                                    </a>
                                </div>
                                <div>
                                    <a class="" href="#"  role="button" aria-expanded="false" >
                                        <div class="d-flex flex-wrap nav-link-container">
                                            <p>
                                                <span class="admin-blog-span-1">Title: {{ Str::limit($post->title, 50, '...') }}</span> <span class="admin-blog-span-divider">|</span> <span class="admin-blog-span-2">Author: {{$post->author}}</span> <span class="admin-blog-span-divider">|</span> <span class="admin-blog-span-3">Publish Date: {{ \Carbon\Carbon::parse($post->published_at)->format('m/d/Y') }}</span>
                                            </p>
{{--                                            Idea here is make responsive and hide dividers at different scr
screen sizes and block for data--}}
                                        </div>
                                    </a>
                                </div>
                            </div>


                        </li>
                    @endforeach
                </ul>
                </div>
            </div>
        </div>

    </section>

@endsection
