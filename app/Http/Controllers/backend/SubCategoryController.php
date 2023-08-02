<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Controller;
use App\Http\Livewire\User;
use App\Models\Category;
use App\Models\SubCategory;

use Illuminate\Http\Request;
class SubCategoryController extends Controller
{
    public function index()
    {
        $sub_categories=SubCategory::latest()->get();
        return view('backend.sub_category.index',compact('sub_categories'));
    }
    /////////////////////////////////
    public function create()
    {
        $category=Category::orderBy('name','ASC')->get();
        return view('backend.sub_category.store',compact('category'));
    }
    ///////////////////////
    public function store(Request $request)
    {
        SubCategory::insert([
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'slug'=>strtolower(str_replace(' ','-',$request->name)),
        ]);
        $notification=array(
            'message'=>'ثبت با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    ////////////////////
    public function edit($id)
    {
        $category=Category::orderBy('name','ASC')->get();
        $sub_category=SubCategory::findOrFail($id);
        return view('backend.sub_category.edit',compact('category','sub_category'));
    }
    ////////////////////
    public function update(Request $request)
    {
        $sub_cat=$request->id;
        SubCategory::findOrFail($sub_cat)->update([
            'category'=>$request->category,
            'name'=>$request->name,
            'slug'=>strtolower(str_replace(' ','-',$request->name)),
        ]);
        $notification=array(
            'message'=>'ویرایش با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect('admin.sub_category/index')->with($notification);
    }
    /////////////////////////
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
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
