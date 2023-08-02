<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    //////////////////////sting site
    public function StingSeo()
    {
        $seo=Seo::find(1);
        return view('backend.sting.StingSeo',compact('seo'));
    }
    /////////////////////////
    public function StingSeoUpdate(Request $request,$id)
    {
        // دریافت اطلاعات جدید از فرم
        $request->validate([
            'meta_title'=>'required',
            'meta_author'=>'required',
            'meta_keyword'=>'required',
            'meta_description'=>'required',
        ]);
        $data = Seo::find($id);
        $data->update([
            'meta_title'=>$request->meta_title,
            'meta_author'=>$request->meta_author,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description,
        ]);
        // ارسال پیغام موفقیت آمیز به کاربر
        $notification=array(
            'message'=>'آپدیت با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);

    }
}
