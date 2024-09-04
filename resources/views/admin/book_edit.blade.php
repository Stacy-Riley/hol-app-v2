@extends('layouts/admin')

@section('content')

    <section class="form-screen-transition mr-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <h1 class="text-center ml-4 mt-5">Edit Book Entry </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <form action="{{ route('update.book', $book->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div>
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="" value="{{ $book->title }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Author</label>
                                    <input type="text" class="form-control" name="author" placeholder="" value="{{ $book->author }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="col-md-3">
                                    <label for="grad_level" class="form-label">Grade Level</label>
                                    <select name="grade_level" class="form-select">
                                        <option value="1" {{ $book->grade_level == 1 ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ $book->grade_level == 2 ? 'selected' : '' }}>2</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Cost</label>
                                    <input type="number" class="form-control" name="cost" placeholder="" value="{{ $book->cost }}" required>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Page Count</label>
                                    <input type="number" class="form-control" name="num_pages" placeholder="" value="{{ $book->num_pages }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="my-5">
                                <div class="d-flex justify-content-center ">
                                    <div class="mx-4">
                                        <a href="/admin/book" type="button" class="btn mr-2 admin-form-button"><< Back </a>
                                    </div>
                                    <div class="mx-4">
                                        <input type="submit" value="Save" class="btn ml-2 admin-form-button"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
