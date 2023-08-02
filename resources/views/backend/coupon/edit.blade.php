@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c">ویرایش کوپون</h4>
                <div class="card card-primary">
                    <form method="post" action="{{route('ُCouponUpdate',$coupon->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">نام</label>
                                <input name="name" value="{{$coupon->name}}"  type="text" class="form-group" id="name"  placeholder="نام را وارد کنید" >
                            </div>
                            <div class="form-group">
                                <label for="discount">مقدار کوپون</label>
                                <br>
                                <input name="discount" value="{{$coupon->discount}}"  type="number" class="form-group" id="discount"  placeholder="نام را وارد کنید" >
                            </div>
                            <div class="form-group col-sm-9 text-secondary">
                                <label for="validate">تاریخ تخفیف</label>
                                <br>
                                <input type="date" value="{{$coupon->validity}}" name="validity" class="form-control" min="{{Carbon\Carbon::now()->format('Y-m-d')}}">
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
