<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shopping;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreShopping;
use Illuminate\Database\Eloquent\Casts\Attribute;

class ShoppingController extends Controller
{
    public function list(Request $request)
    {
        $shoppings = Shopping::find($request->user_id);
        $shoppings = $request->user()->shoppings;

        // $shoppings = Shopping::select('shopping_id','mustbuy')
        // ->paginate(3);
        
        return view('shopping.list')->with(compact('shoppings'));
    }

    public function store(StoreShopping $request)
    {
        Shopping::create([
            'mustbuy' => $request->mustbuy,
            'user_id' => \Auth::id(),
        ]);

        return to_route('shopping.list');
    }

    public function destroy($shopping_id)
    {
        
        $shoppings = Shopping::find($shopping_id);
        $shoppings->delete();

        return to_route('shopping.list');

    }

}
