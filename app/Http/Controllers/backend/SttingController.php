<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Stting;
use Illuminate\Http\Request;

class SttingController extends Controller
{
    //////////////////////sting site
    public function StingSite()
    {
        $sting=Stting::find(1);
        return view('backend.sting.StingSite',compact('sting'));
    }
    /////////////////////////
    public function StingSiteUpdate(Request $request,$id)
    {
        // دریافت اطلاعات جدید از فرم
        $request->validate([
            'support_phone'=>'required',
            'phone_one'=>'required',
            'email'=>'required',
            'facebook'=>'required',
            'youtube'=>'required',
            'address'=>'required',
            'telegram'=>'required',
            'instagram'=>'required',
            'copyright'=>'required',
        ]);
        $data = Stting::find($id);
        // بررسی آیا فایل بارگذاری شده است
        if ($request->hasFile('logo')) {
            // دریافت فایل آپلود شده
            $file = $request->file('logo');

            // تغییر نام فایل به یک نام منحصر به فرد
            $img = uniqid() . '.' . $file->getClientOriginalExtension();

            // ذخیره فایل در مسیر مورد نظر
            $file->move(public_path('upload/sting/image'), $img);

            // آپدیت نام فایل در دیتابیس
            $data['logo'] = $img;
        }

        // آپدیت رکورد با استفاده از متد update
        $data->update([
            'support_phone'=>$request->support_phone,
            'phone_one'=>$request->phone_one,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'youtube'=>$request->youtube,
            'address'=>$request->youtube,
            'telegram'=>$request->telegram,
            'instagram'=>$request->instagram,
            'copyright'=>$request->copyright,

        ]);
        // ارسال پیغام موفقیت آمیز به کاربر
        $notification=array(
            'message'=>'آپدیت با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);

    }
}
