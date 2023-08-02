<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use Faker\Provider\Image;
use Illuminate\Http\Request;


class BrandController extends Controller
{
////////////////////////////
    public function index()
    {
        $brands=Brand::latest()->get();
        return view('backend.brand.index',compact('brands'));
    }
/////////////////////////////
    public function create()
    {
        return view('backend.brand.store');
    }
//////////////////////////////////////
    public function store(Request $request)
    {
        $request ->validate([
            'name'=>'required',
        ]);
        $image_name=time().$request ->file('image')->getClientOriginalName();
        $request ->file('image')->move('upload/backend/image/',$image_name);
        Brand::insert([
            'slug'=>strtolower(str_replace(' ','-',$request->name)),
            'name'=>$request->name,
            'image'=>$image_name,
        ]);
         $notification=array(
             'message'=>'ثبت با موفقیت انجام شد',
             'alert-type'=>'success'
         );
         return redirect()->back()->with($notification);
    }
////////////////////////////
    public function edit($id)
    {
        $brand=Brand::find($id);
        return view('backend.brand.edit',compact('brand'));
    }
//////////////////////////////////
    public function update(Request $request,$id)
    {

        // دریافت اطلاعات جدید از فرم
        $request->validate([
            'name' => 'required|',
        ]);
        $data = Brand::find($id);
        // بررسی آیا فایل بارگذاری شده است
        if ($request->hasFile('image')) {
            // دریافت فایل آپلود شده
            $file = $request->file('image');

            // تغییر نام فایل به یک نام منحصر به فرد
            $img = uniqid() . '.' . $file->getClientOriginalExtension();

            // ذخیره فایل در مسیر مورد نظر
            $file->move(public_path('upload/backend/image'), $img);

            // آپدیت نام فایل در دیتابیس
            $data['image'] = $img;
        }

        // آپدیت رکورد با استفاده از متد update
        $data->update([
            'name'=>$request->name,
        ]);
        // ارسال پیغام موفقیت آمیز به کاربر
        $notification=array(
            'message'=>'آپدیت با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }
///////////////////////////

    public function delete(Brand $brand)
    {
        $brand->delete();
        $notification=array(
        'message'=>'حدف با موفقیت انجام شد',
        'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }

};
