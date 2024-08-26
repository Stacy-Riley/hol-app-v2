@extends('layouts/admin')
@section('content')

    <section class="form-screen-transition mr-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-2" aria-hidden="true"></div>
                <div class="col-md-10 ">
                    <h1 class="text-center ml-4 mt-5">Business Services</h1>
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
                    <a href="/admin/businessService/create" type="button" class="btn admin-form-button">New Service</a>
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
                                    <input type="number" id="itemsPerPage" class="form-control form-control-sm" value="{{ $itemsPerPage }}" min="1" max="100" size="3" aria-label="business service count" onchange="updateItemsPerPage()">
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
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($businessServices as $index=> $businessService)
                                    <tr >

                                        <td>
                                            {{ Str::limit($businessService->title, 30, '...') }}
                                        </td>
                                        <td>
                                            {{ Str::limit($businessService->body, 30, '...') }}
                                        </td>
                                        <td>
                                            {{ ucfirst($businessService->category) }}
                                        </td>

                                        <td class="text-end">
                                            <span class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                                  <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{ route('edit.businessService', $businessService->id) }}" aria-label="edit business service">
                                                      Edit
                                                    </a>

                                                    <a class="dropdown-item" href="{{ route('delete.businessService', $businessService->id) }}" onclick="if (!confirm('Are you sure you want to delete this service?')) { return false }" aria-label="delete business service">
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
