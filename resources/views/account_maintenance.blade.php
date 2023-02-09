@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="min-height: 550px">
            <div class="col-md-8">
                <table class="table table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Account</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $key => $value)
                            <tr>
                                <td><img src="{{ asset('img') }}/{{ $value->display_picture_link }}" height="80px" width="80px" alt="" srcset=""></td>
                                <td>{{ $value->first_name.'-'.$value->role->role_name }}</td>
                                <td><a href="{{ route('account_role',$value->account_id) }}" class="btn btn-info">Update Role</a><a href="{{ route('account_del',$value->account_id) }}" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
