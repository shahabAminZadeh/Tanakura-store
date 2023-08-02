<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Slider;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners=Banner::latest()->get();
        return view('backend.banner.index',compact('banners'));
    }
    ////////////////////////////////
    ///
    public function create()
    {
        return view('backend.banner.store');
    }
    ///////////////////////
    public function store(Request $request)
    {

        $request ->validate([
            'tittle'=>'required',
            'url'=>'required',
        ]);
        $image_name=time().$request ->file('image')->getClientOriginalName();
        $request ->file('image')->move('upload/backend/banner/',$image_name);
        Banner::insert([
            'tittle'=>$request->tittle,
            'url'=>$request->url,
            'image'=>$image_name,
        ]);
        $notification=array(
            'message'=>'ثبت با موفقیت انجام شد',
            'alert-type'=>'info'
        );
        return redirect()->back()->with($notification);
    }
    ///////////////////////
    public function edit(Banner $banner)
    {
        return view('backend.banner.edit',compact('banner'));
    }
    ////////////////////
    public function update(Request $request,$id)
    {
        // دریافت اطلاعات جدید از فرم
        $request->validate([
            'tittle' => 'required',
            'url' => 'required',
        ]);
        $data = Banner::find($id);
        // بررسی آیا فایل بارگذاری شده است
        if ($request->hasFile('image')) {
            // دریافت فایل آپلود شده
            $file = $request->file('image');

            // تغییر نام فایل به یک نام منحصر به فرد
            $img = uniqid() . '.' . $file->getClientOriginalExtension();

            // ذخیره فایل در مسیر مورد نظر
            $file->move(public_path('upload/backend/banner'), $img);

            // آپدیت نام فایل در دیتابیس
            $data['image'] = $img;
        }

        // آپدیت رکورد با استفاده از متد update
        $data->update([
            'tittle'=>$request->tittle,
            'url'=>$request->url,
        ]);
        // ارسال پیغام موفقیت آمیز به کاربر
        $notification=array(
            'message'=>'آپدیت با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);

    }
    ///////////////////////////
    public function destroy(Banner $banner)
    {
        $banner->delete();
        $notification=array(
            'message'=>'حدف با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }
}
