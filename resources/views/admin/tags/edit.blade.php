@extends('admin.layouts.master')

@section('title')
    Update tag Name: {{ $tag->name }}
@endsection

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Update tag Name: {{ $tag->name }}</h4>
                </div><!-- end card header -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{ route('admin.tags.update', $tag->id ) }}" method="post">
                            <div class="row gy-4 justify-content-center ">
                                @csrf
                                @method('PUT')
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
                                        <label for="name" class="form-label">Name tag</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $tag->name }}">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class=" btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                        <!--end row-->
                    </div>
                    <a href="{{ route('admin.tags.index') }}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
@endsection

@section('script')
@endsection
