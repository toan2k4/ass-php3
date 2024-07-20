@extends('admin.layouts.master')

@section('title')
    Show detail tag: {{ $tag->name }}
@endsection

@section('content')
   

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Detail tag name: {{ $tag->name }} </h4>
                </div><!-- end card header -->
                <div class="card-body">
                    
                    <table class="table table-hover">
                        <thead>
                            <th>Key</th>
                            <th>Value</th>
                        </thead>
                        <tbody>
                            @foreach ($tag->toArray() as $col => $value)
                                <tr>
                                    <td>{{ $col }}</td>
                                    <td>{{ $value }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{ route('admin.tags.index')}}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
@endsection
