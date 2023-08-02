<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    ///////////////////////
    public function login()
    {
        return view('admin.login');
    }

    ////////////////////////
    public function logOut(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    //////////////////////
    public function profile()
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        return view('admin.profile', compact('data'));
    }

    /////////////////
    public function Store(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->name = $request->name;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/vendor/image'), $fileName);
            $data['photo'] = $fileName;
        }
        $data->save();
        $notification = array(
            'message' => 'نغییرات با موفقیت انجام شد',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    //////////////////////////////////
    public function AdminChangePassword()
    {
        return view('admin.ChangePassword');
    }

    //////////////
    public function AdminUpdatePassword(Request $request)
    {
        /////validate
        $request->validate
        ([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
        /////old password not mache
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with("error", "رمز درست نیست!!!");
        }
        //////change password
        User::whereId(auth()->user()->id)->update
        ([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("status", "پسورد با موفقیت تغییر کرد  (: ");
    }

    ///////////////////////
    public function InActive()
    {
        $inActiveVendors = User::where('status', 'inactive')->where('role', 'vendor')->latest()->get();
        return view('backend.vendor.inactive', compact('inActiveVendors'));
    }

    ////////////////////////////4
    public function Active()
    {
        $ActiveVendors = User::where('status', 'active')->where('role', 'vendor')->latest()->get();
        return view('backend.vendor.active', compact('ActiveVendors'));
    }

    /////////////////////
    public function InActiveDetails($id)
    {
        $InActiveDetails = User::findOrFail($id);
        return view('backend.vendor.inactiveDetails', compact('InActiveDetails'));
    }
    /////////////////////////
    public function ActiveDetails($id)
    {
        $ActiveDetails = User::findOrFail($id);
        return view('backend.vendor.activeDetails', compact('ActiveDetails'));
    }

    ///////////////
    public function ActiveApprove(Request $request)
    {
        $active=$request->id;
        User::findOrFail($active)->update([
            'status'=>$request->status,
        ]);
        $notification = array(
            'message' => 'آپدیت با موفقیت انجام شد',
            'alert-type' => 'danger'
        );
        return redirect()->route('AdminVendorActive')->with($notification);
    }
    public function InActiveApprove(Request $request)
    {
        $vendor=$request->id;
        User::findOrFail($vendor)->update
        (
            [
                'name'=>'wwwwwwwwww',
            ]
        );
        $notification = array(
            'message' => 'آپدیت با موفقیت انجام شد',
            'alert-type' => 'danger'
        );
        return redirect()->route('AdminVendorINActive')->with($notification);
    }
}
