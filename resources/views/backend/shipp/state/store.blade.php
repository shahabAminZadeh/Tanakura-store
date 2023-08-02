
@extends('admin.master.master')
@section('main_content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c">ثبت شهره ناوگان</h4>
                <div class="card card-primary">
                    <form action="{{route('StateStore')}}" method="post"  id="myForm" name="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">نام</label>
                                <br>
                                <input  name="name"  type="text" class="form-input" id="myForm"  placeholder="نام را وارد کنید" >
                            </div>
                            <div class="form-group">
                                <select name="division_id">
                                    <option  selected="">
                                        انتخاب کنبد
                                    </option>
                                    @foreach($divisions as $division)
                                    <option value="{{$division->id}}">{{$division->name_division}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div  class="text-secondary form-group">
                                <select name="district_id" class="form-select">
                                    <option></option>
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

