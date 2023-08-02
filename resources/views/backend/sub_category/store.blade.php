@extends('admin.master.master')
@section('main_content')
    <div class="container">
        <div class="rol m-2" >
            <div class="col-md-6"><div class="card">
                    <h4 style="margin: 15px;color: #4d4d4c">ثبت زیر دسته بندی</h4>
                    <div class="card card-primary">
                        <form id="myForm" name="myForm" method="post" action="{{route('AdminSubCategoryStore')}}" >
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="category">انتخاب کنید</label>
                                    <select name="category_id" class="form-control">
                                        <option>انتخاب دسته بندی</option>
                                        @foreach($category as $cat)
                                            <option name="category_id" value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">نام</label>
                                    <br>
                                    <input  name="name"  type="text" class="form-group" id="myForm"  placeholder="نام زیر دسته را وارد کنید" >
                                </div>
                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"> افزودن </button>
                                <a href="{{route('AdminSubCategoryIndex')}}" style="margin-left: 10px;margin-right: 25px"  class="btn btn-info"> زیردسته ها </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection

