@extends('layouts/admin')

@section('custom_styles')
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
@endsection

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
                    <div>
                        <div class="table-responsive pb-0 mb-2">
                        <table id="holDataTable" class="table card-table table-vcenter text-nowrap datatable">
                            <thead class="border-2">
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="border-2">
                                @foreach($businessServices as $index=> $businessService)
                                    <tr >

                                        <td>
                                            {{ Str::limit($businessService->title, 30, '...') }}
                                        </td>
                                        <td>
                                            {{   Str::limit(strip_tags($businessService->body), 30, '...') }}
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
                                                    <form action="{{route('delete.businessService',[$businessService->id])}}" method="POST">
                                                      @method('DELETE')
                                                      @csrf
                                                         <button class="dropdown-item" type="submit" onclick="if (!confirm('Are you sure you want to delete this service?')) { return false }" aria-label="delete service">
                                                             Delete
                                                         </button>
                                                    </form>
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
    <script src="//cdn.datatables.net/2.1.4/js/dataTables.min.js">

    </script>

    <script>
        let table = new DataTable('#holDataTable');
    </script>

@endsection
