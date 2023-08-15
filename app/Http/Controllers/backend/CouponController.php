<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupons=Coupon::latest()->get();
        return view('backend.coupon.index',compact('coupons'));
    }
    /////////////////////////////////
    public function create()
    {
        $coupon=Coupon::orderBy('name','ASC')->get();
        return view('backend.coupon.store',compact('coupon'));
    }
    ///////////////////////
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'type' => 'required',
        ]);
        Coupon::insert([
            'code'=>$request->code,
            'type'=>$request->type,
             'value'=>$request->value,
             'percent_off'=>$request->percent_off,
        ]);
        $notification=array(
            'message'=>'ثبت با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    ////////////////////
    public function edit(Coupon $coupon)
    {
        return view('backend.coupon.edit',compact('coupon'));
    }
    ////////////////////
    public function update(Request $request,$id)
    {
        // دریافت اطلاعات جدید از فرم
        $request->validate([
            'code' => 'required',
            'type' => 'required',
        ]);
        $data = Coupon::find($id);
        $data->update([
            'code'=>$request->code,
            'type'=>$request->type,
            'value'=>$request->value,
            'percent_off'=>$request->percent_off,
        ]);
        $notification=array(
            'message'=>'آپدیت  کوپون با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);

    }

    /////////////////////////
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        $notification=array(
            'message'=>'حدف با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }
    ////////////////////////////



}
