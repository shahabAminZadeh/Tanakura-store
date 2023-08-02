<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class VendorController extends Controller
{
    public function dashboard()
    {
        return view('vendor.dashboard');
    }
    ////////////////////////
    public function logOut(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    /////////////////////////////
    public function login()
    {
        return view('vendor.login');
    }
    ///////////////////////////
    public function VendorChangePass()
    {
        return view('vendor.ChangePassword');
    }
    ////////////////////////////
    public function VendorUpdatePass(Request $request)
    {
        /////validate
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
    public function VendorProfile()
    {
        $id = Auth::user()->id;
        $data=User::find($id);
        return view('vendor.profile',compact('data'));
    }
    /////////////////
    public function VendorProfileStore(Request $request)
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
            $file->move(public_path('upload/vendor/image'),$fileName);
            $data['photo']=$fileName;
        }
        $data->save();
        $notification=array(
            'message'=>'نغییرات با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    /////////////////////////
    public function VendorBecome()
    {
        return view('auth.become-vendor');
    }
    public function VendorRegister(Request $request)
    {
        $request->validate([
            'name'=>['required','string','max:250'],
            'email'=>['required','string','email','max:255','unique:users'],
            'password' => ['required', 'confirmed'],
        ]);
        User::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'join_vendor'=>$request->join_vendor,
            'password'=>Hash::make($request->password),
            'role'=>'vendor',
            'status'=>'inactive',
        ]);
        $notification=array(
            'message'=>'ثبت با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->route('login.vendor')->with($notification);

    }

}
