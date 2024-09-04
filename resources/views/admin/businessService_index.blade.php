@extends('layouts/admin')

@section('custom_styles')
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
    <!-- jQuery UI CSS (for drag-and-drop visuals) -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('content')

    <section class="form-screen-transition mr-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <h1 class="text-center ml-4 mt-5">Business Services</h1>
                </div>
                <div class="row">
                    @if(session('success'))
                        <div class="col-12 col-lg-4 offset-md-2-5 alert alert-success" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
                <div class="row" id="message-row"></div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5 my-4 p-0">
                    <a href="/admin/businessService/create" type="button" class="btn admin-form-button">New Service</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5 card">
                    <div>
                        <div class="table-responsive pb-0 mb-2">
                        <table id="holDataTable" class="table card-table table-vcenter text-nowrap datatable">
                            <thead class="border-2">
                                <tr>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="sortable" class="border-2">
                                @foreach($businessServices as $businessService)
                                    <tr data-id="{{ $businessService->id }}">
                                        <td>
                                            {{ ucfirst($businessService->category) }}
                                        </td>
                                        <td>
                                            {{ Str::limit($businessService->title, 30, '...') }}
                                        </td>
                                        <td>
                                            {{   Str::limit(strip_tags($businessService->body), 30, '...') }}
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
        let table = new DataTable('#holDataTable',{
            //This disables the table from overriding the controller displaying the 'priority' field
            order: false
        });
    </script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <script>
        function displayMessage(message, type) {
            var alertClass = (type === 'success') ? 'alert-success' : 'alert-danger';
            var alertHtml = `
            <div class="col-md-5 offset-md-2 alert ${alertClass}" role="alert">
                ${message}
            </div>`;
            $("#message-row").prepend(alertHtml);

            $(".alert").fadeTo(5000, 500).slideUp(500, function(){
                $(this).slideUp(500);
            });
        }

        $(function() {
            $("#sortable").sortable({

                update: function(event, ui) {
                    var sortedIDs = $("#sortable").sortable("toArray", { attribute: "data-id" });
                    $.ajax({
                        url: "{{ route('reorder.businessService') }}",
                        method: "POST",
                        data: {
                            sortedIDs: sortedIDs,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            displayMessage(response.success, 'success');
                        },
                        error: function(xhr) {
                            displayMessage('There was a problem with the reorder.', 'error');
                        }
                    });
                }
            });
        });
    </script>
@endsection
