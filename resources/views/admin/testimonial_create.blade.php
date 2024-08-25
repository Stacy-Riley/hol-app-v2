@extends('layouts/admin')

@section('content')

    <section class="form-screen-transition mr-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-3">
                    <h1 class="text-center ml-4 mt-5">New Testimonial</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 offset-md-1">
                    <form action="{{ route('store.testimonial') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 offset-md-2">
                                <div class="mb-3">
                                    <label for="author_name" class="form-label">Author</label>
                                    <input type="text" class="form-control" name="author_name" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 offset-md-2">
                                <div class="mb-3">
                                    <label for="job_title" class="form-label">Job Title</label>
                                    <input type="text" class="form-control" name="job_title" placeholder="" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="my-3 col-md-10 offset-md-2 page-wrapper">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-center">
                                        <div class=" mb-3">
                                            <label for="comment" class="body-label">Comment</label>
                                            <textarea id="summernote" name="comment"  >

                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between col-md-10 offset-md-2">
                                <div class="col-md-4 p-0">
                                    <div class="form-label">Publish</div>
                                    <select class="form-select" name="is_published">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="my-5 col-md-10 offset-md-2 ">
                                <div class="d-flex justify-content-center ">
                                    <div class="mx-4">
                                        <a href="/admin/testimonial" type="button" class="btn mr-2 admin-form-button"><< Back </a>
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
@section('scripts')

    <script>
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['height', ['height']],
                ['color', ['color']],
                ['backcolor', ['backcolor']],
                ['table', ['table']],
                ['para', ['paragraph','ul', 'ol',]],
                ['undo', ['undo']],
                ['redo', ['redo']],
            ],
        });
    </script>
@endsection
