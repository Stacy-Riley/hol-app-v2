@extends('layouts/admin')

@section('content')

    <section class="form-screen-transition mr-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-3">
                    <h1 class="text-center ml-4 mt-5">Edit Frequently Asked Question </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 offset-md-1">
                    <form action="{{ route('update.faq', $faq->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-10 offset-md-2">
                                <div class="mb-3">
                                    <label class="form-label">Question</label>
                                    <input type="text" class="form-control" name="question" value="{{ $faq->question }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="my-3 col-md-10 offset-md-2 page-wrapper">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-center">
                                        <div class=" mb-3">
                                            <label for="answer" class="body-label">Answer</label>
                                            <textarea id="summernote" name="answer"  >
                                                {!! $faq->answer !!}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between col-md-10 offset-md-2">
                                <div class="col-md-4 p-0">
                                    <label for="is_published" class="form-label">Publish</label>
                                    <select class="form-select" name="is_published" required>
                                        <option value="1" {{$faq->is_published == 1 ? 'selected' : ''}}>Yes</option>
                                        <option value="0" {{$faq->is_published == 0 ? 'selected' : ''}}>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="my-5 col-md-10 offset-md-2 ">
                                <div class="d-flex justify-content-center ">
                                    <div class="mx-4">
                                        <a href="/admin/faq" type="button" class="btn mr-2 admin-form-button"><< Back </a>
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
