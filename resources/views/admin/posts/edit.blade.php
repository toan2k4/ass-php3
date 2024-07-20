@extends('admin.layouts.master')

@section('title')
    Update Post
@endsection

@section('style')
    <!-- dropzone css -->
    <link rel="stylesheet" href="{{ asset('theme/admin/assets/libs/dropzone/dropzone.css') }}" type="text/css" />

    <!-- Filepond css -->
    <link rel="stylesheet" href="{{ asset('theme/admin/assets/libs/filepond/filepond.min.css') }}" type="text/css" />
    <link rel="stylesheet"
        href="{{ asset('theme/admin/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Update post</h4>
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
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
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
                                        <input type="text" class="form-control" id="title" value="{{ $post->title }}" placeholder="Enter title"
                                            name="title">
                                        <div class="invalid-feedback">Please enter a first name</div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label">Category</label>
                                        <select class="form-select mb-3" aria-label="Default select example"
                                            name="category_id">
                                            <option selected hidden></option>
                                            @foreach ($categories as $id => $item)
                                                <option value="{{ $id }}"
                                                    {{ $id == $post->category_id ? 'selected':null}}
                                                >{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="m-2 col-12">
                                        <table class="w-100">
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch form-switch-secondary">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            name="is_trending" value="1" {{ $post->is_trending == true ? 'checked': null}} id="is_trending" >
                                                        <label class="form-check-label" for="is_trending">Is
                                                            Trending</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch form-switch-success">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            name="is_featured" value="1" {{ $post->is_featured == true ? 'checked': null}} id="is_featured">
                                                        <label class="form-check-label" for="is_featured">Is
                                                            Featured</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch form-switch-danger">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            name="is_hot" value="1" {{ $post->is_hot == true ? 'checked': null}} id="is_hot">
                                                        <label class="form-check-label" for="is_hot">Is
                                                            Hot</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch form-switch-warning">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            name="is_most_watched" value="1" {{ $post->is_most_watched == true ? 'checked': null}} id="is_most_watched">
                                                        <label class="form-check-label" for="is_most_watched">Is Most
                                                            Watched</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch form-switch-info">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            name="is_banner" value="1" {{ $post->is_banner == true ? 'checked': null}} id="is_banner">
                                                        <label class="form-check-label" for="is_banner">Is
                                                            Banner</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch form-switch-dark">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            name="is_status" value="1" {{ $post->is_status == true ? 'checked': null}} id="is_status">
                                                        <label class="form-check-label" for="is_status">Is
                                                            Status</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <label for="thumbnail" class="form-label">Thumbnail</label>
                                        <input type="file" id="thumbnail" class="form-control" name="thumbnail">
                                        <img src="{{ \Storage::url($post->thumbnail)}}" class="mt-4" width="100px">
                                    </div>
                                    <div class="col-12">
                                        <label for="content" class="form-label">Content</label>
                                        <textarea class="form-control" name="content" id="content">{{ $post->content }}</textarea>
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
                                            @php($postTags = $post->tags->pluck('id')->all())
                                            @foreach ($tags as $id => $item)
                                                <option value="{{ $id }}" @selected(in_array($id, $postTags))>{{ $item }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <hr class="my-4 text-muted">



                            </div>
                            <div class="d-flex align-items-start gap-3 mt-4">


                                <button type="submit" class="btn btn-success btn-label right "><i
                                        class=" ri-save-3-line label-icon align-middle fs-16 ms-2"></i>Update</button>
                                <a href="{{ route('admin.posts.index')}}" class="btn btn-primary">Quay lại</a>
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

@endsection
