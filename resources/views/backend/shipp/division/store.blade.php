@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c">ثبت ناوگان</h4>
                <div class="card card-primary">
                    <form action="{{route('ُDivisionStore')}}" method="post"  id="myForm" name="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name_division">نام</label>
                                <br>
                                <input  name="name_division"  type="text" class="form-input" id="myForm"  placeholder="نام را وارد کنید" >
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

