<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function addItem(Request $request)
    {
        $request->validate([
            'product_id' => ['required', 'exists:products,id'], 
        ]);
        $product = Product::where('id', $request->product_id)->first();
        if (!$product)
        {
            abort(403);
        }
        $orderItems = [];
        if (Session::has('cart')){
            $orderItems = Session::get('cart', []);
        }
        array_push($orderItems,['product_id' => $request->product_id]);

        Session::put('cart',$orderItems);
        if (Session::has('count')){
            $count = Session::get('count');
            $count++;
        } else{
            $count = 1;
        }
        Session::put('count', $count);
        return response()->json([
            'count' => $count,
        ]);
    }
}
