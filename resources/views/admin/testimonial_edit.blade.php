@extends('layouts/admin')

@section('content')

    <section class="form-screen-transition mr-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <h1 class="text-center ml-4 mt-5">Edit Testimonial</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <form action="{{ route('update.testimonial', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div>
                                <div class="mb-3">
                                    <label for="author_name" class="form-label">Author</label>
                                    <input type="text" class="form-control" name="author_name" placeholder="" value="{{ $testimonial->author_name }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class="mb-3">
                                    <label for="job_title" class="form-label">Job Title</label>
                                    <input type="text" class="form-control" name="job_title" placeholder="" value="{{ $testimonial->job_title }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="my-3 page-wrapper">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-center">
                                        <div class=" mb-3">
                                            <label for="comment" class="body-label">Comment</label>
                                            <textarea id="summernote" name="comment"  >
                                                {!! $testimonial->comment !!}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="col-md-4 p-0">
                                    <label for="is_published" class="form-label">Publish</label>
                                    <select class="form-select" name="is_published" required>
                                        <option value="1" {{$testimonial->is_published == 1 ? 'selected' : ''}}>Yes</option>
                                        <option value="0" {{$testimonial->is_published == 0 ? 'selected' : ''}}>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="my-5">
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
