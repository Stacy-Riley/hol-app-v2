@extends('layouts/admin')

@section('custom_styles')
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
@endsection

@section('content')

    <section class="form-screen-transition mr-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <h1 class="text-center ml-4 mt-5">Book Products </h1>
                </div>
                <div class="row">
                    @if(session('success'))
                        <div class="col-12 col-lg-4 offset-md-2-5 alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5 my-4 p-0">
                    <a href="/admin/book/create" type="button" class="btn admin-form-button">New Book</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5 card">
                    <div>
                        <div class="table-responsive pb-0 mb-2">
                            <table id="holDataTable" class="table card-table table-vcenter text-nowrap datatable">
                                <thead class="border-2">
                                <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Grade Level</th>
                                    <th>Cost</th>
                                    <th>Page Count</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody class="border-2">
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

                                                      <form action="{{route('delete.book',[$book->id])}}" method="POST">
                                                          @method('DELETE')
                                                          @csrf
                                                             <button class="dropdown-item" type="submit" onclick="if (!confirm('Are you sure you want to delete this book?')) { return false }" aria-label="delete book">
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
        let table = new DataTable('#holDataTable', {
            pageLength: 10,
            order: false
        });

    </script>

    {{--    Function to fade out the login message--}}
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            setTimeout(function() {
                let alert = document.querySelector('.alert-success');
                if(alert) {
                    alert.style.transition = 'opacity 1s ease';
                    alert.style.opacity = '0';
                    setTimeout(function() {
                        alert.remove();
                    }, 1000);
                }
            },3000);
        })
    </script>
@endsection
