@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c"> ویرایش ناوگان </h4>
                <div class="card card-primary">
                    <form action="{{route('DivisionUpdate',$division->id)}}" id="myForm" name="myForm" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name_division">نام</label>
                                <input name="name_division" value="{{$division->name_division}}"  type="text" class="form-group" id="tittle"  placeholder="نام را وارد کنید" >
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> ویرایش </button>
                            <a href="" class="btn btn-info  ">بازگشت به صفحه اصلی</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
