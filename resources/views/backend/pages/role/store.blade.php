@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c">ثبت نقش</h4>
                <div class="card card-primary">
                    <form id="myForm" name="myForm" method="post" action="{{route('ُStoreRole')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">نام</label>
                                <br>
                                <input name="name"  type="text" class="form-group" id="name"  placeholder="نام را وارد کنید" >
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
