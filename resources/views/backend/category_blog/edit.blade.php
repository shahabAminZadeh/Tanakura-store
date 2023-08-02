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
                                <label for="category_name">نام</label>
                                <input name="category_name" value="{{$category->category_name}}"  type="text" class="form-group" id="tittle"  placeholder="نام را وارد کنید" >
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
