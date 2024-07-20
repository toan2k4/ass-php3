@extends('admin.layouts.master')

@section('title')
    Add new category
@endsection

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Add Category</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{ route('admin.categories.store') }}" method="post">
                            <div class="row gy-4 justify-content-center ">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="w-50">
                                    <div>
                                        <label for="name" class="form-label">Name Category</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class=" btn btn-primary">Add</button>
                                </div>
                            </div>
                        </form>
                        <!--end row-->
                    </div>
                    <a href="{{ route('admin.categories.index')}}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
@endsection

@section('script')
@endsection
