<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    ////////////////////////////
    public function index()
    {
        $blogs=Blog::latest()->get();
        return view('backend.blog.index',compact('blogs'));
    }
/////////////////////////////
    public function create()
    {
        $categories = BlogCategory::latest()->get();
        return view('backend.blog.store',compact('categories'));
    }
//////////////////////////////////////
    public function store(Request $request)
    {
        $request ->validate([
            'tittle'=>'required',
            'category_id'=>'required',
            'short_body'=>'required',
            'long_body'=>'required',
        ]);
        $image_name=time().$request ->file('image')->getClientOriginalName();
        $request ->file('image')->move('upload/backend/image/',$image_name);
        Blog::insert([

            'tittle'=>$request->tittle,
            'category_id'=>$request->category_id,
            'short_body'=>$request->short_body,
            'long_body'=>$request->long_body,
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
        $blog=Blog::find($id);
        return view('backend.blog.edit',compact('blog'));
    }
//////////////////////////////////
    public function update(Request $request,$id)
    {

        // دریافت اطلاعات جدید از فرم
        $request->validate([
            'name'=>'required',
            'category_id'=>'required',
            'short_body'=>'required',
            'long_body'=>'required',
        ]);
        $data = Blog::find($id);
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
            'category_id'=>$request->category_id,
            'short_body'=>$request->short_body,
            'long_body'=>$request->long_body,

        ]);
        // ارسال پیغام موفقیت آمیز به کاربر
        $notification=array(
            'message'=>'آپدیت با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }
///////////////////////////

    public function delete(Blog $blog)
    {
        $blog->delete();
        $notification=array(
            'message'=>'حدف با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }
}
