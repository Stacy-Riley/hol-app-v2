@extends('layouts/admin')
@section('content')

    <section class="form-screen-transition mr-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-2" aria-hidden="true"></div>
                <div class="col-md-10 ">
                    <h1 class="text-center ml-4 mt-5">Book Products </h1>
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
                    <a href="/admin/book/create" type="button" class="btn admin-form-button">New Book</a>
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
                                    <th>Grade Level</th>
                                    <th>Cost</th>
                                    <th>Page Count</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($books as $index=> $book)
                                    <tr >

                                        <td>
                                            {{ Str::limit($book->title, 25, '...') }}
                                        </td>
                                        <td>
                                            {{$book->author}}
                                        </td>
                                        <td>
                                            {{$book->grade_level}}
                                        </td>
                                        <td>
                                            ${{$book->cost}}
                                        </td>
                                        <td>
                                            {{$book->num_pages}}
                                        </td>
                                        <td class="text-end">
                                            <span class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                                  <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{ route('edit.book', $book->id) }}" aria-label="edit book">
                                                      Edit
                                                    </a>

                                                    <a class="dropdown-item" href="{{ route('delete.book', $book->id) }}" onclick="if (!confirm('Are you sure you want to delete this book?')) { return false }" aria-label="delete book">
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
