@extends('layouts/admin')

@section('custom_styles')
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
@endsection

@section('content')

<section class="form-screen-transition mr-5 ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 offset-md-2-5">
                <h1 class="text-center ml-4 mt-5">Blog Posts </h1>
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
            <div class="col-12 col-lg-10 offset-md-2-5 p-0">
                <a href="create/blog" type="button" class="btn admin-form-button">New Post</a>
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
                                    <th>Category</th>
                                    <th>Date Created</th>
                                    <th>Published</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="border-2">
                            @foreach($posts as $index=> $post)
                                <tr >

                                    <td>
                                        {{ Str::limit($post->title, 20, '...') }}
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

                                                  <form action="{{route('delete.blog',[$post->id])}}" method="POST">
                                                      @method('DELETE')
                                                      @csrf
                                                         <button class="dropdown-item" type="submit" onclick="if (!confirm('Are you sure you want to delete this post?')) { return false }" aria-label="delete blog">
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
            //This disables the table from overriding the controller
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


