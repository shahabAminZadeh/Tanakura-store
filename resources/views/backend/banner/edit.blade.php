@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c"> ویرایش بنر </h4>
                <div class="card card-primary">
                    <form id="myForm" name="myForm" method="post" action="{{route('ُBannerUpdate',$banner->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <input type="hidden" name="category_id" value="{{$banner->id}}">
                            <input type="hidden" name="old_image" value="{{$banner->image}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="tittle">نام</label>
                                <input name="tittle" value="{{$banner->tittle}}"  type="text" class="form-group" id="tittle"  placeholder="نام را وارد کنید" >
                            </div>
                            <div  class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                    آدرس بنر
                                </span>
                                <input value="{{$banner->url}}" name="url" id="url" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="form-group">
                                <label for="image">عکس</label>
                                <input name="image"  type="file" class="form-control" id="image" >
                            </div>
                            <div class="text-center">
                                <img id="ShowImageAdmin" class="profile-user-img img-fluid img-circle" src="{{(!empty($banner->image)) ? url('upload/backend/banner/'.$banner->image): url('upload/backend/banner/banner.jpg')}}" alt="User profile picture">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> ویرایش </button>
                            <a href="{{route('ُBannerIndex')}}" class="btn btn-info  ">بازگشت به صفحه اصلی</a>

                        </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
