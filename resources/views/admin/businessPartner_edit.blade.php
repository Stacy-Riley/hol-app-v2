@extends('layouts/admin')

@section('content')

    <section class="form-screen-transition mr-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <h1 class="text-center ml-4 mt-5">Edit Business Partner </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <form action="{{ route('update.businessPartner', $businessPartner->id) }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="row">
                                <div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="" value="{{$businessPartner->name}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <div class="mb-4">
                                        <label class="form-label">Partner's Url</label>
                                        <input type="text" class="form-control" name="business_url" placeholder="" value="{{$businessPartner->business_url}}" required>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label class="form-label">Current Image</label>
                                        <div>
                                            @if($businessPartner->logo_path)
                                                {{ basename($businessPartner->logo_path) }}
                                            @else
                                                No image uploaded.
                                            @endif
                                        </div>
                                        <br>
                                        <label for="logo_path" class="form-label">Upload New Image (optional)</label>
                                        <input type="file" class="form-control" name="logo_path">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="col-md-5 p-0">
                                    <div class="form-label">Category</div>
                                    <select class="form-select" name="category" required>
                                        <option value="education" {{ $businessPartner->category == 'education' ? 'selected' : '' }}>Education</option>
                                        <option value="corporate" {{ $businessPartner->category == 'corporate' ? 'selected' : '' }}>Corporate</option>
                                    </select>
                                </div>

                                <div class="col-md-5 p-0">
                                    <div class="form-label">Active</div>
                                    <select class="form-select" name="is_active">
                                        <option value="1" {{ $businessPartner->is_active == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ $businessPartner->is_active == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="my-4">
                                <div class="d-flex justify-content-center ">
                                    <div class="mx-4">
                                        <a href="/admin/businessPartner" type="button" class="btn mr-2 admin-form-button"><< Back </a>
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

