<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        App::setLocale($request->lang ?? 'en');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $items = Item::paginate(10);
        return view('home', ['items' => $items]);
    }

    public function detail($id){
        $item = Item::where('item_id', $id)->first();
        return view('detail', ['item' => $item]);
    }


}
