@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="row text-center">
                    <h1 class="mb-4">{{ $item->item_name }}</h1>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-7">
            </div>
        </div>
        <div class="row justify-content-center"  style="height: 400px;">
            <div class="col-md-4">
                <div class="row text-center">
                    <img src="{{ asset('img') }}/{{ $item->item_id>10 ? $item->item_id-10 : $item->item_id }}.jpg" height="350px" alt="" srcset="">
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-7">
                <div class="row">
                    <h2><strong>Price : Rp. {{ $item->price }}</strong></h2>
                    <h4 class="my-3">{{ $item->item_desc }}</h4>
                    <div class="col-md-12 mr-3 d-flex justify-content-center">
                        <a class="btn btn-primary px-5 h4 text-white "  href="{{ route('cart-add',$item->item_id) }}">Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
