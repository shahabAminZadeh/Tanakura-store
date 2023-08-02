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
            'name' => 'required',
            'discount' => 'required',
            'validity' => 'required',
        ]);
        Coupon::insert([
            'name'=>$request->name,
            'discount'=>$request->discount,
             'validity'=>$request->validity,
            'created_at'=>Carbon::now(),
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
            'name' => 'required',
            'discount' => 'required',
            'validity' => 'required',
        ]);
        $data = Coupon::find($id);
        $data->update([
            'name'=>$request->name,
            'discount'=>$request->discount,
            'validity'=>$request->validity,

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

    public function GetSubCategory($category_id)
    {
        $subcat=SubCategory::where('category_id',$category_id)->orderBy('name','ASC')->get();
        return json_encode($subcat);
    }

}
