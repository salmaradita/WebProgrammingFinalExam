@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="min-height: 550px">
            <div class="col-md-8">
                <table class="table table-hover table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $key => $value)
                            <tr>
                                <td><img src="{{ asset('img') }}/{{ $value->item_id > 10 ? $value->item_id - 10  : $value->item_id  }}{{ '.jpg' }}" height="80px" width="80px" alt="" srcset=""></td>
                                <td>{{ $value->item->item_name }}</td>
                                <td>Rp.{{ number_format($value->price) }}</td>
                                <td><a href="{{ route('cart-del',$value->order_id) }}" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="text-center"><strong>Total</strong>  </td>
                            <td>Rp. {{ number_format($order->sum('price')) }}</td>
                            <td><a href="{{ route('cart-checkout') }}" class="btn btn-primary">Checkout</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
