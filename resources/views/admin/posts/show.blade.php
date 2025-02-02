@extends('admin.layouts.master')

@section('title')
    Show detail post: {{ $post->name }}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Detail post name: {{ $post->name }} </h4>
                </div><!-- end card header -->
                <div class="card-body">

                    <table class="table table-hover">
                        <thead>
                            <th>Key</th>
                            <th>Value</th>
                        </thead>
                        <tbody>
                            @foreach ($post->toArray() as $col => $value)
                                <tr>
                                    <td>{{ $col }}</td>

                                    <td>
                                        @php
                                            if ($col == 'content') {
                                                echo '<div class="overflow-scroll" style="height: 400px;;">' .
                                                    $value .
                                                    '</div>';
                                            } elseif ($col == 'thumbnail') {
                                                echo '<img src="' . \Storage::url($value) . '" width="100px">';
                                            } elseif (\Str::contains($col, 'is_')) {
                                                echo $value
                                                    ? '<span class="badge bg-primary">YES</span>'
                                                    : '<span class="badge bg-danger">NO</span>';
                                            }else {
                                                echo $value;
                                            }
                                        @endphp
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{ route('admin.posts.index') }}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
@endsection
