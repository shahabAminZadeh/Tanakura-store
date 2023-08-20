<?php

namespace App\Support\Payment;

use App\Models\Order;
use App\Models\Payment;
use App\Support\Basket\Basket;

use App\Support\Payment\Gateways\Pasargad;
use App\Support\Payment\Gateways\Saman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class Transaction
{
    private $request;
    private $basket;



    public function __construct(Request $request,Basket $basket)
    {
        $this->request=$request;
        $this->basket=$basket;

    }


    public function checkout()
    {
        $order = $this->makeOrder();
        $payment = $this->makePayment($order);




        if ($payment->method=='online'){
            dd('online');
            //$this->gatewayFactory()->pay($order);

        }



        $this->basket->clear();
        return $order;

    }

    private function makeOrder()
    {
        $order=Order::create([
            'user_id'=>auth()->user()->id,
            'code'=>bin2hex(Str::random(16)),
            'amount'=>$this->basket->subTotal(),

        ]);

        $order->pros()->attach($this->pros());
        return $order;
    }
    private function pros()
    {
            foreach ($this->basket->all() as $pro)
    {
        $pros[$pro->id] = ['qty'=>$pro->qty];    return $pros;
    }


   }
    private function makePayment($order)
    {
        return Payment::create([
            'order_id' => $order->id,
            'method'=>$this->request->method,
            'amount'=> $order-> amount,
        ]);
    }

    private function gatewayFactory()
    {
        $gateway  = [
            'saman' => Saman::class,
            'pasagrad' => Pasargad::class,

        ][$this->request->gateway];
        return resolve($gateway);
    }







}
