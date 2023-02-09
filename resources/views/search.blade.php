@extends('layouts.main')

@section('content')
    <div class="h1 text-center">
        Search Grocery!!
    </div>

    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <form action="/search">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search Here" name="search">
                        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            @foreach ($searchs as $search)
            <div style="width: 20%">
                <div class="card my-3">
                    <img src="{{ asset('img') }}/{{ $search->item_id>10 ? $search->item_id-10 : $search->item_id }}{{ '.jpg' }}"
                        class="image-fluid" style="max-height: 200px" alt="sayur">
                    <div class="card-body">
                        <h5 class="card-title">{{ $search->item_name }}</h5>
                        <a href="{{ route('detail', $search->item_id) }}" class="btn btn-primary w-100">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



@endsection
