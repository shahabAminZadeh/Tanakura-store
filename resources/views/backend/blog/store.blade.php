@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c">ثبت بلاگ</h4>
                <div class="card card-primary">
                    <form id="myForm" name="myForm" method="post" action="{{route('BlogStore')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="tittle">نام</label>
                                <br>
                                <input name="tittle"  type="text" class="form-group" id="tittle"  placeholder="نام را وارد کنید" >
                            </div>
                            <div  class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                    توضیحات جزئی
                                </span>
                                <input name="short_body" id="short_body" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="input-group">
                                <span  class="input-group-text"> توضیحات کامل </span>
                                <textarea name="long_body" rows="6" class="form-control" aria-label="With textarea"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">عکس</label>
                                <input name="image"  type="file" class="form-control" id="image" >
                            </div>
                            <div class="text-center">
                                <img id="ShowImageAdmin" class="profile-user-img img-fluid img-circle" src="{{url('upload/backend/image/b.png')}}"  alt="User profile picture">
                            </div>
                            <div class="form-group">
                                <label for="category_id">دسته محصول</label>
                                <select name="category_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option></option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" >{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> افزودن </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
