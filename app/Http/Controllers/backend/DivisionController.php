<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ShippDivision;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions=ShippDivision::latest()->get();
        return view('backend.shipp.division.index',compact('divisions'));
    }
    /////////////////////////////////
    public function create()
    {
        $division=ShippDivision::all();
        return view('backend.shipp.division.store',compact('division'));
    }
    ///////////////////////
    public function store(Request $request)
    {
        $request->validate([
            'name_division' => 'required',

        ]);
        ShippDivision::insert([
            'name_division'=>$request->name_division,

        ]);
        $notification=array(
            'message'=>'ثبت با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    ////////////////////
    public function edit(ShippDivision $division)
    {
        return view('backend.shipp.division.edit',compact('division'));
    }
    ////////////////////
    public function update(Request $request,$id)
    {
        // دریافت اطلاعات جدید از فرم
        $request->validate([
            'name_division' => 'required',
        ]);
        $data = ShippDivision::find($id);
        $data->update([
            'name_division'=>$request->name_division,
        ]);
        $notification=array(
            'message'=>'آپدیت  ناوگان با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);

    }

    /////////////////////////
    public function destroy(ShippDivision $division)
    {
        $division->delete();
        $notification=array(
            'message'=>'حدف با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }
    ////////////////////////////


}
