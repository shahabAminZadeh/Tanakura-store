<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function add_review(Request $request)
    {
        $product=$request->product_id;
        $vendor=$request->hidden_vendor;

        $request->validate([
            'comment'=>'required',
        ]);
        Review::insert([
            'product_id'=>$product,
            'user_id'=>Auth::id(),
            'comment'=>$request->comment,
            'rating'=>$request->qty,
            'vendor_id'=>$vendor,
            'created_at'=>Carbon::now(),
        ]);
        $notification=array(
            'message'=>'ثبت نظر با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }
    ////////////////////
    public function Pending()
    {
        $review=Review::where('status',0)->orderBy('id','DESC')->get();
        return view('backend.review.pending',compact('review'));
    }
    ////////////////////
    public function ApprovePending($id)
    {
        Review::where('id',$id)->update(['status'=>1]);
        $notification=array(
            'message'=>'کامنت با موفقیت فعال شد',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    ////////////////////
    public function Publish()
    {
        $review=Review::where('status',1)->orderBy('id','DESC')->get();
        return view('backend.review.publish',compact('review'));
    }
    ////////////////////
    public function delete($id)
    {
        Review::findOrFail($id)->delete();
        $notification=array(
            'message'=>'حذف کامنت با موفقیت  شد',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }
}
