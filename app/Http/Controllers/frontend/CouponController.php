<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function apply(Request $request)
    {
        $coupon=Coupon::where('code',$request->coupon_code)->first();
        if (!$coupon)
        {
            $notification=array(
                'message'=>'کوپون یافن نشد . دوباره امتحان کنید لطفا!',
                'alert-type'=>'danger'
            );
            return redirect()->back()->withErrors($notification);
        }
        session()->put('coupon',[
            'name'=>$coupon->code,
            'discount'=>$coupon->discount(cart::Subtotal()),

            ]);
        $notification=array(
            'message'=>'افزودن کوپون با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
