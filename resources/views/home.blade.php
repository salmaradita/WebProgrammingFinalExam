@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    @foreach ($items as $key => $value)
                        <div style="width: 20%">
                            <div class="card my-3">
                                <img src="{{ asset('img') }}/{{ $value->item_id>10 ? $value->item_id-10 : $value->item_id }}{{ '.jpg' }}"
                                    class="image-fluid" style="max-height: 200px" alt="sayur">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $value->item_name }}</h5>
                                    <a href="{{ route('detail', $value->item_id) }}" class="btn btn-primary w-100">Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <nav>
                    <ul class="pagination justify-content-center mt-4">
                        <li class="page-item">
                            <a class="page-link" href="{{ route('home') }}?page=1"><<</a>
                        </li>
                        <li class="page-item ">
                            <a class="page-link" href="{{ route('home') }}?page=1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="{{ route('home') }}?page=2">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="{{ route('home') }}?page=2">>></a>
                        </li>
                    </ul>
                </nav>


            </div>
        </div>
    </div>
@endsection
