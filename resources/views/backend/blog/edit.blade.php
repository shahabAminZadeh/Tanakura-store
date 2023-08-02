@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c">ویرایش دسته بندی ها</h4>
                <div class="card card-primary">
                    <form method="post" action="{{route('ُCategoryBlogUpdate',$category->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="tittle">نام</label>
                                <input name="tittle" value="{{$blog->tittle}}"  type="text" class="form-group" id="tittle"  placeholder="نام را وارد کنید" >
                            </div>
                            <div  class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                    توضیحات جزئی
                                </span>
                                <input value="{{$blog->short_body}}" name="short_body" id="short_body" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group">
                                <span  class="input-group-text"> توضیحات کامل </span>
                                <textarea   name="long_body" rows="6" class="form-control" aria-label="With textarea">value="{{$blog->long_body}}"</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">عکس</label>
                                <input name="image"  type="file" class="form-control" id="image" >
                            </div>
                            <div class="text-center">
                                <img id="ShowImageAdmin" class="profile-user-img img-fluid img-circle" src="{{(!empty($brand->image)) ? url('upload/backend/image/'.$brand->image): url('upload/backend/image/no_images.png')}}" alt="User profile picture">
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
