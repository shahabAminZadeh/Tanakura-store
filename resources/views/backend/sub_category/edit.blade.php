@extends('admin.master.master')
@section('main_content')
    <div class="container">
        <div class="rol m-2" >
            <div class="col-md-6"><div class="card">
                    <h4 style="margin: 15px;color: #4d4d4c"> ویرایش زیر دسته بندی </h4>
                    <div class="card card-primary">
                        <form  method="post" action="{{route('AdminSubCategoryUpdate')}}">
                            @csrf
                            <div class="card-body">
                                <input type="hidden" name="id" value="{{$sub_category->id}}" }}>
                                <div class="form-group">
                                    <label for="category">انتخاب کنید</label>
                                    <select name="category" class="form-control">
                                        <option>انتخاب دسته بندی</option>
                                        @foreach($category as $cat)
                                            <option name="category" value="{{$cat->id}}"{{$cat->id == $sub_category-> category?'selected':''}}>{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">نام</label>
                                    <br>
                                    <input name="name" value="{{$sub_category->name}}"  type="text" class="form-group" id="name"  placeholder="نام را وارد کنید" >
                                </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"> ویرایش </button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
