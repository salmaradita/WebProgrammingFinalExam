<?php

namespace App\Http\Controllers;


use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{

    public function cart(){
        $order = Order::where('account_id', Auth::user()->account_id)->get();
        return view('cart', ['order' => $order]);
    }

    public function cart_add($id){
        Order::create([
            'account_id' => Auth::user()->account_id,
            'item_id' => $id,
            'price' => Item::where('item_id', $id)->first()->price
        ]);
        return redirect()->route('cart');
    }

    public function cart_del($id){
        Order::where('order_id', $id)->delete();
        return back();
    }

    public function checkout(){
        Order::where('account_id', Auth::user()->account_id)->delete();
        return view('success', ['info' => 1]);
    }
}
