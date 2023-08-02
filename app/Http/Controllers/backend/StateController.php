<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ShippDistrict;
use App\Models\ShippDivision;
use App\Models\ShippState;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class StateController extends Controller
{
    public function index()
    {
        $districts=ShippDistrict::latest()->get();
        $divisions=ShippDivision::latest()->get();
        $states=ShippState::latest()->get();
        return view('backend.shipp.state.index',compact('districts','divisions','states'));
    }
    /////////////////////////////////
    public function create()
    {
        $districts=ShippDistrict::all();
        $divisions=ShippDivision::all();
        return view('backend.shipp.state.store',compact('divisions','districts'));
    }
    ///////////////////////
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'division_id' => 'required',
        ]);
        ShippState::insert([
            'name'=>$request->name,
            'division_id'=>$request->division_id,
            'district_id'=>'1',
        ]);
        $notification=array(
            'message'=>'ثبت   شهر  ناوگان حمل ونقل با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    ////////////////////

    public function edit(ShippDistrict $district)
    {
        $divisions=ShippDivision::all();
        return view('backend.shipp.state.edit',compact('district','divisions'));
    }
    ////////////////////
    public function update(Request $request,$id)
    {
        // دریافت اطلاعات جدید از فرم
        $request->validate([
            'name' => 'required',
            'division_id' =>'required',
        ]);
        $data = ShippState::find($id);
        $data->update([
            'name'=>$request->name,
            'division_id'=>$request->division_id,
            'district_id'=>'1',
        ]);
        $notification=array(
            'message'=>'آپدیت  نطقه حمل ونقل با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);

    }


    /////////////////////////
    public function destroy(ShippState $state)
    {
        $state->delete();
        $notification=array(
            'message'=>'حدف با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }
}
