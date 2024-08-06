@extends('admin.layouts.master')

@section('title')
    Show detail user: {{ $user->name }}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Detail user name: {{ $user->name }} </h4>
                </div><!-- end card header -->
                <div class="card-body">

                    <table class="table table-hover">
                        <thead>
                            <th>Key</th>
                            <th>Value</th>
                        </thead>
                        <tbody>
                            @foreach ($user->toArray() as $col => $value)
                                <tr>
                                    <td>{{ $col }}</td>

                                    <td>
                                        @php
                                            if ($col == 'avata') {
                                                echo '<img src="' . \Storage::url($value) . '" width="100px">';
                                            } else {
                                                echo $value;
                                            }
                                        @endphp
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{ route('admin.users.index') }}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
@endsection
