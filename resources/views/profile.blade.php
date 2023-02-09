@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="min-height: 550px;">
            <div class="col-md-4">
                <div class="row text-center">
                    <img src="{{ asset('img') }}/{{ Auth::user()->display_picture_link }}" height="400px" alt=""
                        srcset="">
                </div>
            </div>
            <div class="col-md-8">
                <form method="POST" action="{{ route('profile-update') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="first_name" class="col-md-2 col-form-label text-md-end">{{ __('First Name') }}</label>

                        <div class="col-md-4">
                            <input id="first_name" type="text"
                                class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                value="{{ Auth::user()->first_name }}" required autocomplete="first_name" autofocus>

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="last_name" class="col-md-2 col-form-label text-md-end">{{ __('Last Name') }}</label>

                        <div class="col-md-4">
                            <input id="last_name" type="text"
                                class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                value="{{ Auth::user()->last_name }}" required autocomplete="last_name" autofocus>

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-md-2 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ Auth::user()->email }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="last_name" class="col-md-2 col-form-label text-md-end">{{ __('Role') }}</label>

                        <div class="col-md-4">
                            <select disabled class="form-select" name="role" required
                                aria-label="Default select example">
                                <option>Pilih role</option>
                                @foreach (App\Models\Role::get() as $key => $value)
                                    <option value="{{ $value->role_id }}"
                                        @if (Auth::user()->role_id == $value->role_id) selected @endif>{{ $value->role_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="last_name" class="col-md-2 col-form-label text-md-end">{{ __('gender') }}</label>

                        <div class="col-md-4 d-flex">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender"
                                    @if (Auth::user()->gender_id == 1) checked @endif value="1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki-laki &nbsp;
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender"
                                    @if (Auth::user()->gender_id == 2) checked @endif value="2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <label for="last_name"
                            class="col-md-2 col-form-label text-md-end">{{ __('Display Picture') }}</label>

                        <div class="col-md-4">
                            <input name="display_picture_link" type="file" class="form-control" required autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-md-2 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-4">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="password-confirm"
                            class="col-md-2 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-4">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary w-100">
                                {{ __('update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
