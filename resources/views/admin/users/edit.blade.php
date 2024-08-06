@extends('admin.layouts.master')

@section('title')
    Update new User
@endsection

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Update new user</h4>
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
                                <h5>User Info</h5>
                                <p class="text-muted">Fill all information below</p>
                            </div>

                            <div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" value="{{ $user->name }}" id="name" placeholder="Enter name"
                                            name="name">
                                        <div class="invalid-feedback">Please enter a first name</div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" value="{{ $user->email }}" placeholder="Enter name"
                                            name="email">
                                        <div class="invalid-feedback">Please enter a first name</div>
                                    </div>


                                    <div class="col-12">
                                        <label for="avata" class="form-label">Avata</label>
                                        <input type="file" id="avata" class="form-control" name="avata">
                                        <img src="{{ \Storage::url($user->avata) }}" width="100px">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="text" class="form-control" id="password" placeholder="Enter name"
                                            name="password">
                                        <div class="invalid-feedback">Please enter a first name</div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="type" class="form-label">Type</label>
                                        <select name="type" id="" class="form-control">
                                            <option value="">Chọn Type</option>
                                            <option value="{{ App\Models\User::TYPE_ADMIN }}" @selected($user->type == App\Models\User::TYPE_ADMIN)>Admin</option>
                                            <option value="{{ App\Models\User::TYPE_MEMBER }}" @selected($user->type == App\Models\User::TYPE_MEMBER)>Member</option>
                                        </select>
                                        <div class="invalid-feedback">Please enter a first name</div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <!-- end tab pane -->
                        <button type="submit" class="btn btn-success btn-label right mt-5"><i
                            class=" ri-save-3-line label-icon align-middle fs-16 ms-2"></i>Update</button>

                    </div>
                </div>
                <!-- end -->
            </div>
            <!-- end col -->
        </div>
        
    </form>
@endsection

@section('script')


    <!--jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--select2 cdn-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('theme/admin/assets/js/pages/select2.init.js') }}"></script>

    <!-- form wizard init -->
@endsection
