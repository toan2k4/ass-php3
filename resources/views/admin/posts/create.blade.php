@extends('admin.layouts.master')

@section('title')
    Add new Tag
@endsection

@section('style')
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Add new post</h4>
                    </div><!-- end card header -->
                    <div class="card-body form-steps">
                        @if ($errors->any())
                            <div class="alert alert-danger" style="width: 100%;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div>
                            <div>
                                <h5>Post Info</h5>
                                <p class="text-muted">Fill all information below</p>
                            </div>

                            <div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter title"
                                            name="title">
                                        <div class="invalid-feedback">Please enter a first name</div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label">Category</label>
                                        <select class="form-select mb-3" aria-label="Default select example"
                                            name="category_id">
                                            <option selected hidden></option>
                                            @foreach ($categories as $id => $item)
                                                <option value="{{ $id }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="m-2 col-12">
                                        <table class="w-100">
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch form-switch-secondary">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            name="is_trending" value="1" id="is_trending">
                                                        <label class="form-check-label" for="is_trending">Is
                                                            Trending</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch form-switch-success">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            name="is_featured" value="1" id="is_featured">
                                                        <label class="form-check-label" for="is_featured">Is
                                                            Featured</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch form-switch-danger">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            name="is_hot" value="1" id="is_hot">
                                                        <label class="form-check-label" for="is_hot">Is
                                                            Hot</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch form-switch-warning">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            name="is_most_watched" value="1" id="is_most_watched">
                                                        <label class="form-check-label" for="is_most_watched">Is Most
                                                            Watched</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch form-switch-info">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            name="is_banner" value="1" id="is_banner">
                                                        <label class="form-check-label" for="is_banner">Is
                                                            Banner</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch form-switch-dark">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            name="is_status" value="1" id="is_status" checked>
                                                        <label class="form-check-label" for="is_status">Is
                                                            Status</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    {{-- <div class="card-body">
                                        <p class="text-muted">Choose image your post</p>

                                        <div class="dropzone">
                                            <div class="fallback">
                                                <input type="file" name="thumbnail" >

                                            </div>
                                            <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                </div>

                                                <h4>Drop files here or click to upload.</h4>
                                            </div>

                                        </div>

                                        <ul class="list-unstyled mb-0" id="dropzone-preview">
                                            <li class="mt-2" id="dropzone-preview-list">
                                                <!-- This is used as the file preview template -->
                                                <div class="border rounded">
                                                    <div class="d-flex p-2">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-sm bg-light rounded">
                                                                <img data-dz-thumbnail class="img-fluid rounded d-block"
                                                                    src="assets/images/new-document.png"
                                                                    alt="Dropzone-Image" />
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div class="pt-1">
                                                                <h5 class="fs-14 mb-1" data-dz-name>&nbsp;
                                                                </h5>
                                                                <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                <strong class="error text-danger"
                                                                    data-dz-errormessage></strong>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <button data-dz-remove
                                                                class="btn btn-sm btn-danger">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- end dropzon-preview -->
                                    </div> --}}
                                    <div class="col-12">
                                        <label for="thumbnail" class="form-label">Thumbnail</label>
                                        <input type="file" id="thumbnail" class="form-control" name="thumbnail">
                                    </div>
                                    <div class="col-12">
                                        <label for="content" class="form-label">Content</label>
                                        <textarea class="form-control" name="content" id="content"></textarea>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <!-- end tab pane -->


                    </div>
                </div>
                <!-- end -->
            </div>
            <!-- end col -->
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Add Post Tag</h4>
                    </div><!-- end card header -->
                    <div class="card-body form-steps">


                        <div>
                            <div>
                                <h5>Post tags</h5>
                                <p class="text-muted">You can multi select</p>
                            </div>

                            <div>
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <h6 class="fw-semibold">Select Tag</h6>
                                        <select class="js-example-basic-multiple" name="tags[]" multiple="multiple">
                                            @foreach ($tags as $id => $item)
                                                <option value="{{ $id }}">{{ $item }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <hr class="my-4 text-muted">



                            </div>
                            <div class="d-flex align-items-start gap-3 mt-4">


                                <button type="submit" class="btn btn-success btn-label right "><i
                                        class=" ri-save-3-line label-icon align-middle fs-16 ms-2"></i>Add</button>
                            </div>
                        </div>
                        <!-- end tab pane -->

                    </div>
                </div>
                <!-- end -->
            </div>
            <!-- end col -->
        </div>
    </form>
@endsection

@section('script')
    

    <script src="https:////cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>

    <!--jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--select2 cdn-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('theme/admin/assets/js/pages/select2.init.js') }}"></script>

    <!-- form wizard init -->
@endsection
