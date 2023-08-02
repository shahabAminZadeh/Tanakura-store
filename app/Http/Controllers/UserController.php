<?php

namespace App\Http\Controllers;

use App\Models\Pro;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    ///////////////////////////////
    public function dashboard()
    {
        $id = Auth::user()->id;
        $data=User::find($id);
        return view('dashboard',compact('data'));
    }
    ///////////////////////////////
    public function UserProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data=User::find($id);
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->name=$request->name;

        if ($request->file('photo'))
        {
            $file=$request->file('photo');
            $fileName=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user/image'),$fileName);
            $data['photo']=$fileName;
        }
        $data->save();
        $notification=array(
            'message'=>'نغییرات با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    //////////////////////////
    public function logoutUser(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $notification=array(
            'message'=>'خروج با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect('/')->with($notification);

    }
    ////////////////////
    public function UserChangePass()
    {
        return view('tanakoora.changePassword');
    }
    public function UserUpdatePassword(Request $request)
    {
        $request->validate
        ([
            'old_password'=>'required',
            'new_password'=>'required|confirmed',
        ]);
        /////old password not mache
        if ( !Hash::check($request->old_password,auth::user()->password))
        {
            return back()->with("error","رمز درست نیست!!!");
        }
        //////change password
        User::whereId(auth()->user()->id)->update
        ([
            'password'=>Hash::make($request->new_password)
        ]);
        return back()->with("status","پسورد با موفقیت تغییر کرد  (: ");
    }
    //////////////////////

    public function vendor_detail($id)
    {
        $vendor=User::findOrFail($id);
        $Vproduct=Pro::where('vendor_id',$id)->get();
        return view('tanakoora.vendor.vendor_detail',compact('Vproduct','vendor'));
    }

    public function AllVendor()
    {
        $vendors=\App\Models\User::where('status','active')->where('role','vendor')->orderBy('id','DESC')->get();
        return view('tanakoora.vendor.AllVendor',compact('vendors'));
    }
}
