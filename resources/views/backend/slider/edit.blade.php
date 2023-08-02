@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c"> ویرایش اسلاید </h4>
                <div class="card card-primary">
                    <form id="myForm" name="myForm" method="post" action="{{route('SliderUpdate',$slider->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <input type="hidden" name="category_id" value="{{$slider->id}}">
                            <input type="hidden" name="old_image" value="{{$slider->image}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="tittle">نام</label>
                                <input name="tittle" value="{{$slider->tittle}}"  type="text" class="form-group" id="tittle"  placeholder="نام را وارد کنید" >
                            </div>
                            <div  class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                توضیحات اسلاید
                                </span>
                                <input value="{{$slider->short_tittle}}" name="short_tittle" id="short_tittle" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="form-group">
                                <label for="image">عکس</label>
                                <input name="image"  type="file" class="form-control" id="image" >
                            </div>
                            <div class="text-center">
                                <img id="ShowImageAdmin" class="profile-user-img img-fluid img-circle" src="{{(!empty($slider->image)) ? url('upload/backend/slider/'.$slider->image): url('upload/backend/slider/slider.jpg')}}" alt="User profile picture">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> ویرایش </button>
                            <a href="{{route('ُSliderIndex')}}" class="btn btn-info  ">بازگشت به صفحه اصلی</a>

                        </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
