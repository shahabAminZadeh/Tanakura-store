<?php

namespace App\Http\Controllers\frontend;

use App\Exceptions\QuantityExceededException;
use App\Http\Controllers\Controller;
use App\Models\Pro;
use App\Support\Basket\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    private $basket;

    public function __construct(Basket $basket)
    {
        $this-> basket = $basket;

    }
    ////////////////////////////
    public function add(Pro $pro)
    {

         try {
             $this->basket->add($pro , 1);

             $notification=array(
                 'message'=>'افزودن مخضول با موفقیت انجام شد',
                 'alert-type'=>'success'
             );
             return redirect()->back()->with($notification);
             }
         catch(QuantityExceededException $e){
             $notification=array(
                 'message'=>'حدف با موفقیت انجام شد',
                 'alert-type'=>'danger'
             );
             return redirect()->back()->with($notification);
         }

    }
    /////////////////////////////
    public function index()
    {
        $item=$this->basket->all();
        return view('tanakoora.cart.index',compact('item'));

    }

}
