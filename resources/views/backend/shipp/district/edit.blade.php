@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c"> ویرایش مناطق ناوگان </h4>
                <div class="card card-primary">
                    <form id="myForm" name="myForm" method="post"  action="{{route('DistrictUpdate',$district->id)}}">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">نام</label>
                                <input name="name" value="{{$district->name}}"  type="text" class="form-group" id="name"  placeholder="نام را وارد کنید" >
                            </div>
                            <div class="form-group">
                                <select name="division_id">
                                    <option value="">
                                        انتخاب کنبد
                                    </option>
                                    @foreach($divisions as $division)
                                        <option name="division_id" value="{{$division->id}}" {{$division->id == $district->division_id?'selected':''}} >{{$division->name_division}}</option>
                                    @endforeach
                                </select>
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
