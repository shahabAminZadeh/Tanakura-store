<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ShippDistrict;
use App\Models\ShippDivision;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index()
    {
        $districts=ShippDistrict::latest()->get();
        return view('backend.shipp.district.index',compact('districts'));
    }
    /////////////////////////////////
    public function create()
    {
        $divisions=ShippDivision::all();
        return view('backend.shipp.district.store',compact('divisions'));
    }
    ///////////////////////
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'division_id' => 'required',

        ]);
        ShippDistrict::insert([
            'name'=>$request->name,
            'division_id'=>$request->division_id,

        ]);
        $notification=array(
            'message'=>'ثبت   منطقه ناوگان حمل ونقل با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    ////////////////////
    public function edit(ShippDistrict $district)
    {
        $divisions=ShippDivision::all();
        return view('backend.shipp.district.edit',compact('district','divisions'));
    }
    ////////////////////
    public function update(Request $request,$id)
    {
        // دریافت اطلاعات جدید از فرم
        $request->validate([
            'name' => 'required',
            'division_id' =>'required',
        ]);
       $data = ShippDistrict::find($id);
         $data->update([
            'name'=>$request->name,
            'division_id'=>$request->division_id,
        ]);
        $notification=array(
            'message'=>'آپدیت  نطقه حمل ونقل با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);

    }

    /////////////////////////
    public function destroy(ShippDistrict $district)
    {
        $district->delete();
        $notification=array(
            'message'=>'حدف با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }
    public function GetDistrict($division_id)
    {
        $dist=ShippDistrict::where('division_id',$division_id)->orderBy('name','ASC')->get();
        return json_encode($dist);
    }
}
