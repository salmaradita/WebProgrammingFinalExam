<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request){
        if($request->has('search')){
            $searchs = Item::where('item_name', 'LIKE', '%'.$request->search.'%')->get();
        } else{
            $searchs = Item::all();
        }
        return view('search', compact('searchs'));

    }
}
