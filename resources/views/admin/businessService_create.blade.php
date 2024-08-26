@extends('layouts/admin')

@section('content')

    <section class="form-screen-transition mr-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-3">
                    <h1 class="text-center ml-4 mt-5">New Business Service</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 offset-md-1">
                    <form action="{{ route('store.businessService') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 offset-md-2">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-10 offset-md-2 page-wrapper">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-center">
                                        <div class=" mb-3">
                                            <label class="body">Description</label>
                                            <textarea id="summernote" name="body" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between col-md-10 offset-md-2">
                                <div class="col-md-4 p-0">
                                    <div class="form-label">Category</div>
                                    <select class="form-select" name="category" required>
                                        <option value="education">Education</option>
                                        <option value="corporate">Corporate</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="my-4 col-md-10 offset-md-2 ">
                                <div class="d-flex justify-content-center ">
                                    <div class="mx-4">
                                        <a href="/admin/businessService" type="button" class="btn mr-2 admin-form-button"><< Back </a>
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
        {{--        This is for the calendar in the form--}}
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.Litepicker && (new Litepicker({
                element: document.getElementById('datepicker-icon'),
                buttonText: {
                    previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
                    nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
                },
            }));
        });
        // @formatter:on
    </script>

    {{--// SummerNote--}}
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

