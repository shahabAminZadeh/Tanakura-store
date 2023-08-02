@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c">ویرایش سایت</h4>
                <div class="card card-primary">
                    <form method="post" action="{{route('StingSiteUpdate',$sting->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="support_phone">شماره پشتیبان</label>
                                <input name="support_phone" value="{{$sting->support_phone}}"  type="text" class="form-group" id="support_phone"  placeholder="شماره را وارد کنید" >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="phone_one">شماره مدیر</label>
                                <input name="phone_one" value="{{$sting->phone_one}}"  type="text" class="form-group" id="phone_one"  placeholder="شماره را وارد کنید" >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email">ایمیل</label>
                                <input name="email" value="{{$sting->email}}"  type="email" class="form-group" id="email"  placeholder="ایمیل را وارد کنید" >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="facebook">فیسبووک</label>
                                <input name="facebook" value="{{$sting->facebook}}"  type="text" class="form-group" id="facebook"  placeholder="فیسبووک را وارد کنید" >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="youtube">یوتیوب</label>
                                <input name="youtube" value="{{$sting->youtube}}"  type="text" class="form-group" id="youtube"  placeholder="یوتیوب را وارد کنید" >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="telegram">تلگرام</label>
                                <input name="telegram" value="{{$sting->telegram}}"  type="text" class="form-group" id="telegram"  placeholder="تلگرام را وارد کنید" >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="instagram">انستاگرام</label>
                                <input name="instagram" value="{{$sting->instagram}}"  type="text" class="form-group" id="instagram"  placeholder="انستاگرام را وارد کنید" >
                            </div>
                            <br>
                            <div  class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                    توضیحات جزئی
                                </span>
                                <input value="{{$sting->address}}" name="address" id="address" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="copyright">کپی رایت</label>
                                <input name="copyright" value="{{$sting->copyright}}"  type="text" class="form-group" id="copyright"  placeholder="کپی رایت را وارد کنید" >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="logo">عکس</label>
                                <input name="logo"  type="file" class="form-control" id="logo" >
                            </div>
                            <br>
                            <div class="text-center">
                                <img id="ShowImageAdmin" class="profile-user-img img-fluid img-circle" src="{{(!empty($sting->logo)) ? url('upload/sting/image/'.$sting->logo): url('upload/backend/image/no_images.png')}}" alt="User profile picture">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> update </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
