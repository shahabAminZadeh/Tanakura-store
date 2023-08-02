@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c">ویرایش برند</h4>
                <div class="card card-primary">
                    <form method="post" action="{{route('AdminBrandUpdate',$brand->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">نام</label>
                                <input name="name" value="{{$brand->name}}"  type="text" class="form-group" id="name"  placeholder="نام را وارد کنید" >
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
