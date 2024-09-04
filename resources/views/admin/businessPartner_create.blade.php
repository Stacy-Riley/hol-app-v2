@extends('layouts/admin')

@section('content')

    <section class="form-screen-transition mr-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <h1 class="text-center ml-4 mt-5">New Business Partner</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <form action="{{ route('store.businessPartner') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class="mb-4">
                                    <label class="form-label">Partner's Url</label>
                                    <input type="text" class="form-control" name="business_url" placeholder="https://www.example.com" required>
                                </div>
                            </div>
                            <div>
                                <div class="mb-4">
                                    <label class="form-label">Upload Partner's Logo</label>
                                    <input type="file" class="form-control" name="logo_path" placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="col-md-5 p-0">
                                    <div class="form-label">Category</div>
                                    <select class="form-select" name="category" required>
                                        <option value="education">Education</option>
                                        <option value="corporate">Corporate</option>
                                    </select>
                                </div>

                                <div class="col-md-5 p-0">
                                    <div class="form-label">Active</div>
                                    <select class="form-select" name="is_active">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="my-5">
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

