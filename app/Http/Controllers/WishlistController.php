<?php

namespace App\Http\Controllers;

use App\Models\Pro;
use Illuminate\Http\Request;
use Maize\Markable\Models\Favorite;

class WishlistController extends Controller
{
    public function wishlist()
    {
        $products = Pro::whereHasFavorite(
            auth()->user()
        )->get();
        // dd($products);
        return view('tanakoora.wishList.WishList',compact('products'));
    }

    public function favoriteAdd($id)
    {

        $product = Pro::find($id);
        $user = auth()->user();
        Favorite::add($product, $user);
        session()->flash('success', 'Product is Added to Favorite Successfully !');
        return redirect()->route('wishlist');
    }

    public function favoriteRemove($id)
    {
        $product = Pro::find($id);
        $user = auth()->user();
        Favorite::remove($product, $user);

        session()->flash('success', 'Product is Remove to Favorite Successfully !');

        return redirect()->route('wishlist');
    }
}
