<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders=Slider::latest()->get();
        return view('backend.slider.index',compact('sliders'));
    }
    ////////////////////////////////
    ///
    public function create()
    {
        return view('backend.slider.store');
    }
    ///////////////////////
    public function store(Request $request)
    {

        $request ->validate([
            'tittle'=>'required',
            'short_tittle'=>'required',
        ]);
        $image_name=time().$request ->file('image')->getClientOriginalName();
        $request ->file('image')->move('upload/backend/slider/',$image_name);
        Slider::insert([
            'tittle'=>$request->tittle,
            'short_tittle'=>$request->short_tittle,
            'image'=>$image_name,
        ]);
        $notification=array(
            'message'=>'ثبت با موفقیت انجام شد',
            'alert-type'=>'info'
        );
        return redirect()->back()->with($notification);
    }
    ///////////////////////
    public function edit(Slider $slider)
    {
        return view('backend.slider.edit',compact('slider'));
    }
    ////////////////////
    public function update(Request $request,$id)
    {
        // دریافت اطلاعات جدید از فرم
        $request->validate([
            'tittle' => 'required',
            'short_tittle' => 'required',
        ]);
        $data = Slider::find($id);
        // بررسی آیا فایل بارگذاری شده است
        if ($request->hasFile('image')) {
            // دریافت فایل آپلود شده
            $file = $request->file('image');

            // تغییر نام فایل به یک نام منحصر به فرد
            $img = uniqid() . '.' . $file->getClientOriginalExtension();

            // ذخیره فایل در مسیر مورد نظر
            $file->move(public_path('upload/backend/slider'), $img);

            // آپدیت نام فایل در دیتابیس
            $data['image'] = $img;
        }

        // آپدیت رکورد با استفاده از متد update
        $data->update([
            'tittle'=>$request->tittle,
            'short_tittle'=>$request->short_tittle,
        ]);
        // ارسال پیغام موفقیت آمیز به کاربر
        $notification=array(
            'message'=>'آپدیت با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);

    }
    ///////////////////////////
    public function destroy(Slider $slider)
    {
        $slider->delete();
        $notification=array(
            'message'=>'حدف با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }
}
