@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c">ثبت اسلاید</h4>
                <div class="card card-primary">
                    <form action="{{route('SliderStore')}}" method="post"  id="myForm" name="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="tittle">موضوع</label>
                                <input  name="tittle"  type="text" class="form-input" id="myForm"  placeholder="موضوع را وارد کنید" >
                            </div>

                            <div  class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                توضیحات اسلاید
                                </span>
                                <input name="short_tittle" id="short_tittle" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="form-group">
                                <label for="image">عکس</label>
                                <input name="image"  type="file" class="form-control" id="image" >
                            </div>
                            <div class="text-center">
                                <img id="ShowImageAdmin" class="profile-user-img img-fluid img-circle"   src="{{url('upload/backend/slider/slider.jpg')}}" alt="User category picture">
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

