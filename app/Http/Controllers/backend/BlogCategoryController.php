<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    ////////////////////////////
    public function index()
    {
        $categories=BlogCategory::latest()->get();
        return view('backend.category_blog.index',compact('categories'));
    }
/////////////////////////////
    public function create()
    {
        return view('backend.category_blog.store');
    }
//////////////////////////////////////
    public function store(Request $request)
    {
        $request ->validate([
            'category_name'=>'required',
        ]);
        BlogCategory::insert([

            'category_name'=>$request->category_name,

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
        $category=BlogCategory::find($id);
        return view('backend.category_blog.edit',compact('category'));
    }
//////////////////////////////////
    public function update(Request $request,$id)
    {

        // دریافت اطلاعات جدید از فرم
        $request->validate([
            'category_name' => 'required|',
        ]);
        $data = BlogCategory::find($id);
        // آپدیت رکورد با استفاده از متد update
        $data->update([
            'category_name'=>$request->category_name,
        ]);
        // ارسال پیغام موفقیت آمیز به کاربر
        $notification=array(
            'message'=>'آپدیت با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }
///////////////////////////

    public function delete(BlogCategory $category)
    {
        $category->delete();
        $notification=array(
            'message'=>'حدف با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }
}
