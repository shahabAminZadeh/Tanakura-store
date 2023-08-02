@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c"> ویرایش دسته بندی </h4>
                <div class="card card-primary">
                    <form id="myForm" name="myForm" method="post" action="{{route('AdminCategoryUpdate',$Category->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <input type="hidden" name="category_id" value="{{$Category->id}}">
                            <input type="hidden" name="old_image" value="{{$Category->image}}">
                            <div class="form-group">
                                <label for="name">نام</label>
                                <input name="name" value="{{$Category->name}}"  type="text" class="form-group" id="name"  placeholder="نام را وارد کنید" >
                            </div>
                            <div class="form-group">
                                <label for="image">عکس</label>
                                <input name="image"  type="file" class="form-control" id="image" >
                            </div>
                            <div class="text-center">
                                <img id="ShowImageAdmin" class="profile-user-img img-fluid img-circle" src="{{(!empty($Category->image)) ? url('upload/backend/image/'.$Category->image): url('upload/backend/image/no_images.png')}}" alt="User profile picture">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> ویرایش </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
