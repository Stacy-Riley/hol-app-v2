@extends('layouts/admin')
@section('content')
<section class="form-screen-transition mr-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 offset-md-2">
                <h1 class="text-center ml-4 mt-5">Blog Posts </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 offset-md-2 my-4 p-0">
                <a href="create/blog" type="button" class="btn admin-form-button">New Post</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 offset-md-2 card">
                <div class="card-body border-bottom py-3">
                    <div class="d-flex">
                        <div class="text-secondary">
                            Show
                            <div class="mx-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Post count">
                            </div>
                            entries
                        </div>
                        <div class="ms-auto text-secondary">
                            Search:
                            <div class="ms-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm" aria-label="Search posts">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                                <tr>
                                    <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 15l6 -6l6 6" /></svg>
                                    </th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Date Created</th>
                                    <th>Published</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($posts as $index=> $post)
                                    <tr>
                                        <td {{$post->id}}>
                                            <span class="text-secondary">{{$post->id}}</span>
                                        </td>
                                        <td>
                                            <a href="#" class="text-reset" tabindex="-1">{{ Str::limit($post->title, 25, '...') }}</a>
                                        </td>
                                        <td>
                                            {{$post->author}}
                                        </td>
                                        <td>
                                            {{$post->category}}
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($post->published_at)->format('m/d/Y') }}
                                        </td>
                                        @if($post->is_published == true)
                                        <td><span class="badge bg-success me-1"></span> Published</td>
                                        @else
                                        <td><span class="badge bg-warning me-1"></span> Not Published</td>
                                        @endif
                                        <td class="text-end">
                                            <span class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>

                                                  <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{ route('edit.blog', $post->id) }}" aria-label="edit blog">
                                                      Edit
                                                    </a>
                                                    <a class="dropdown-item" href="{{ route('delete.blog', $post->id) }}" aria-label="delete blog">
                                                      Delete
                                                    </a>
                                                  </div>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection

<section class="form-screen-transition mr-5">
    <div class="container">
        <div class="row">
