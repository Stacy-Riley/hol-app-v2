@extends('layouts/admin')

@section('content')

    <section class="form-screen-transition mr-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-3">
                    <h1 class="text-center ml-4 mt-5">New Book Entry </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 offset-md-1">
                    <form action="{{ route('store.book') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 offset-md-2">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Author</label>
                                    <input type="text" class="form-control" name="author" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between col-md-10 offset-md-2">
                                <div class="col-md-3">
                                    <div class="form-label">Grade Level</div>
                                    <select class="form-select" name="grade_level">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Cost</label>
                                    <input type="number" class="form-control" name="cost" placeholder="ex: 10.00" required>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Page Count</label>
                                    <input type="number" class="form-control" name="num_pages" placeholder="ex: 5" required>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="my-5 col-md-10 offset-md-2 ">
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
