<?php

namespace App\Support\Payment\Gateways;

use App\Models\Order;
use Illuminate\Http\Request;

class Saman implements Gatewayinterface
{
    private $merchantID;
    private $callback;
    public function __construct()
    {
        $this->merchantID='165864616';
        $this->callback=route('payment.verify',$this->getName());
    }

    public function pay(Order $order)
    {
        $this->redirectToBank($order);
    }
    private function redirectToBank($order)
    {
        $amount=$order->amount + 10000;
        echo "<form id='samanpayment' action='https://sep.shaparak.ir/payment.aspx' method='post'>
        <input type='hidden' name='Amount' value='{$amount}'/>
        <input type='hidden' name='ResNum' value='{$order->code}'>
        <input type='hidden' name='RedirectURL' value='{$this->callback}'/>
        <input type='hidden' name='MID' value='{$this->merchantID}'/>
        </form><script>document.forms['samanpayment'].submit()</script>";

    }
    public function verify(Request $request)
    {

    }
    public function getName():string
    {
        return 'saman';
    }

}
