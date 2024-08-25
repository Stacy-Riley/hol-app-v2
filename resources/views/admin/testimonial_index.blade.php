@extends('layouts/admin')
@section('content')

    <section class="form-screen-transition mr-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-2" aria-hidden="true"></div>
                <div class="col-md-10 ">
                    <h1 class="text-center ml-4 mt-5">Testimonials </h1>
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
                    <a href="/admin/testimonial/create" type="button" class="btn admin-form-button">New Testimonial</a>
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
                                        $itemsPerPage = request()->query('items', 5)
                                    @endphp
                                    <input type="number" id="itemsPerPage" class="form-control form-control-sm" value="{{ $itemsPerPage }}" min="1" max="100" size="3" aria-label="FAQ count" onchange="updateItemsPerPage()">
                                </div>
                                entries
                            </div>
                            <div class="ms-auto text-secondary">
                                Search:
                                <div class="ms-2 d-inline-block">
                                    <input type="text" id="searchQuery" class="form-control form-control-sm" aria-label="Search" placeholder="Search" onkeydown="handleKeyPress(event)">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="table-responsive pb-5 ">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                <tr>
                                    <th>Author</th>
                                    <th>Job Title</th>
                                    <th>Comment</th>
                                    <th>Published</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($testimonials as $index=> $testimonial)
                                    <tr >

                                        <td>
                                            {{ Str::limit($testimonial->author_name, 25, '...') }}
                                        </td>
                                        <td>
                                            {{ Str::limit($testimonial->job_title, 25, '...') }}
                                        </td>
                                        <td>
                                            {{ Str::limit($testimonial->comment, 30, '...') }}
                                        </td>
                                        @if($testimonial->is_published == true)
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
                                                    <a class="dropdown-item" href="{{ route('edit.testimonial', $testimonial->id) }}" aria-label="edit testimonial">
                                                      Edit
                                                    </a>

                                                    <a class="dropdown-item" href="{{ route('delete.testimonial', $testimonial->id) }}" onclick="if (!confirm('Are you sure you want to delete this testimonial?')) { return false }" aria-label="delete testimonial">
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
@section('scripts')
    <script>
        function updateItemsPerPage(){
            const itemsPerPage = document.getElementById('itemsPerPage').value;

            window.location.href = `?items=${itemsPerPage}`;
        }


    </script>
@endsection
