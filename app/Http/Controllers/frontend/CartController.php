<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = \Cart::getContent();
        return view('tanakoora.cart.index',compact('cartItems'));
    }

    //////////////////////////
    public function store(Request $request)
    {
        \Cart::add($request->id,$request->name,$request->qty,$request->selling_Price,$request->color,$request->size)->associate('App\Models\Pro');
        $notification = array(
            'message' => ' افزودن به سبد خرید با موفقیت انجام شد',
            'alert-type' => 'success'
        );
        return redirect()->route('cart.index')->with($notification);
    }
}
