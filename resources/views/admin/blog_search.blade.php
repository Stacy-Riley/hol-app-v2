@extends('layouts.admin')

    @section('content')
        <section class="form-screen-transition mr-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-2" aria-hidden="true"></div>
                    <div class="col-md-10 ">
                        <h1 class="text-center ml-4 mt-5">Blog Search Results </h1>
                    </div>
                    <div class="row">
                        @if(session('success'))
                            <div class="col-md-4 offset-md-2 alert alert-success" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2" aria-hidden="true"></div>
                    <div class="col-md-10 my-4 p-0">
                        <a href="/admin/blog" type="button" class="btn admin-form-button">All Posts</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2" aria-hidden="true"></div>
                    <div class="col-md-10 card">
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-secondary">
                                    Show
                                    <div class="mx-2 d-inline-block">
                                        @php
                                            $itemsPerPage = request()->query('items', 10)
                                        @endphp
                                        <input type="number" id="itemsPerPage" class="form-control form-control-sm" value="{{ $itemsPerPage }}" min="1" max="100" size="3" aria-label="Post count" onchange="updateItemsPerPage()">
                                    </div>
                                    entries
                                </div>
                                <div class="ms-auto text-secondary">
                                    Search:
                                    <div class="ms-2 d-inline-block">
                                        <input type="text" id="searchQuery" class="form-control form-control-sm" aria-label="Search posts" placeholder="Search posts" onkeydown="handleKeyPress(event)">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="table-responsive pb-5 ">
                                <table class="table card-table table-vcenter text-nowrap datatable">
                                    <thead>
                                    <tr>
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
                                        <tr >

                                            <td>
                                                {{ Str::limit($post->title, 25, '...') }}
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
                                                <td>
                                            <span class="me-1">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#198754"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" /></svg>
                                            </span> Published</td>
                                            @else
                                                <td>
                                            <span class="me-1">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#FEC109"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                                            </svg></span> Not Published</td>
                                            @endif
                                            <td class="text-end">
                                            <span class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                                  <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{ route('edit.blog', $post->id) }}" aria-label="edit blog">
                                                      Edit
                                                    </a>

                                                    <a class="dropdown-item" href="{{ route('delete.blog', $post->id) }}" onclick="if (!confirm('Are you sure you want to delete this post?')) { return false }" aria-label="delete blog">
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

