@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card rounded" style="height: 600px;">
                    <div class="card-header bg-warning text-center h2">Update</div>
                    <div class="card-body text-center">
                        <h1>
                            {{ $user->first_name }}
                        </h1>
                        <form action="{{ route('account_update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="account_id" value="{{ $user->account_id }}">
                            <div class="col-md-4 mx-auto">
                                <select class="form-select mx-auto mb-3" name="role" required
                                    aria-label="Default select example">
                                    <option>Pilih role</option>
                                    @foreach (App\Models\Role::get() as $key => $value)
                                        <option value="{{ $value->role_id }}"
                                            @if ($user->role_id == $value->role_id) selected @endif>{{ $value->role_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mx-auto">
                                <input type="submit" class="btn btn-primary w-100" value="Update">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-warning">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
