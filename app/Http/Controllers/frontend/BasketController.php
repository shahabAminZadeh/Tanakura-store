<?php

namespace App\Http\Controllers\frontend;

use App\Exceptions\QuantityExceededException;
use App\Http\Controllers\Controller;

use App\Models\Pro;
use App\Support\Basket\Basket;
use App\Support\Payment\Transaction;
use Illuminate\Http\Request;


class BasketController extends Controller
{
    private $basket;
    private $transaction;

    public function __construct(Basket $basket ,Transaction $transaction )
    {
        $this-> basket = $basket;
        $this->transaction=$transaction;

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
        $items=$this->basket->all();
        return view('tanakoora.cart.index',compact('items'));

    }

    ///////////////
    public function update(Request $request, Pro $pro)
    {

       $this->basket->update($pro,$request->qty);
        return back();
    }
    /////////
    public function checkOutForm()
    {
        return view('tanakoora.cart.checkOut');
    }
    //////////////////
    public function checkOut(Request $request)
    {
        $this->validateForm($request);
        $order =  $this->transaction->checkout();
        $notification = array(
            'message' => 'خرید با موفقیت انجام شد',
            'alert-type' => 'success'
        );
        return redirect()->route('index.basket')->with($notification);
    }

    private function validateForm(Request $request)
    {
        $request->validate([
            'method'=>['required'],
            'gateway'=>['required_if:method,online']
        ]);
    }

}
