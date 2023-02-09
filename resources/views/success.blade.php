@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex align-items-center" style="height: 600px;">
                    @if ($info == 1)
                        <div class="mx-auto">
                            <div class="d-flex justify-content-center align-items-center text-center"
                                style="width: 450px; height: 450px; border: 8px solid orange; border-radius: 50%;">

                                <div class="row flex">
                                    <h1 style="text-align: center">
                                        Success!!
                                    </h1>
                                    <h4 style="text-align: center">We will contact you 1x24 hours</h4>
                                    <a style="text-align: center" href="{{ route('home') }}">Click here to "Home"</a>
                                </div>
                            </div>
                        </div>
                    @elseif ($info == 2)
                        <div class="mx-auto">
                            <div class="d-flex justify-content-center align-items-center text-center"
                                style="width: 450px; height: 450px; border: 8px solid orange; border-radius: 50%;">

                                <div class="row flex">
                                    <h1 style="text-align: center">
                                        Saved!!
                                    </h1>
                                    <a style="text-align: center" href="{{ route('home') }}">Click here to "Home"</a>
                                </div>
                            </div>
                        </div>
                    @elseif($info == 3)
                        <div class="mx-auto">
                            <div class="d-flex justify-content-center align-items-center text-center"
                                style="width: 450px; height: 450px; border: 8px solid orange; border-radius: 50%;">
                                <h1 style="text-align: center">
                                    @lang('greeting.LogOutSuccess')!
                                </h1>
                            </div>
                        </div>
                    @elseif ($info == 4)
                        <div class="mx-auto">
                            <div class="d-flex justify-content-center align-items-center text-center"
                                style="width: 450px; height: 450px; border: 8px solid orange; border-radius: 50%;">

                                <div class="row flex">
                                    <h1 style="text-align: center">
                                        @lang('greeting.hey')!!
                                    </h1>
                                    <a style="text-align: center" href="{{ route('login') }}">@lang('greeting.login')</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
