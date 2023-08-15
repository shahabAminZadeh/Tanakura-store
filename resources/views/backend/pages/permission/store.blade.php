@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c">ثبت اجازه</h4>
                <div class="card card-primary">
                    <form id="myForm" name="myForm" method="post" action="{{route('ُStorePermission')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">نام</label>
                                <br>
                                <input name="name"  type="text" class="form-group" id="name"  placeholder="نام را وارد کنید" >
                            </div>
                        </div>
                        <div s class="form-group">
                            <label tyle="text-align: center" for="group_name">گروه اجازه</label>
                            <br>
                            <select name="group_name" class="form-control select2 select2-hidden-accessible" style="width: 95%;text-align: center" tabindex="-1" aria-hidden="true">
                                <option selected="">دسته را انتخاب کنید</option>
                                <option value="category">دسته بندی</option>
                                <option value="brand">برند ها</option>
                                <option value="sub_category">زیر دسته محصولات </option>
                                <option value="product">محصولات</option>
                                <option value="slide">اسلاید ها</option>
                                <option value="ads">Ads</option>
                                <option value="coupon">تخفیف ها</option>
                                <option value="area">محدوده</option>
                                <option value="vendor">فروشنده ها</option>
                                <option value="order">سفارشات</option>
                                <option value="return">return</option>
                                <option value="report">گذارشات</option>
                                <option value="user">کاربران</option>
                                <option value="review">بررسی ها(کامنت ها)</option>
                                <option value="sting">تنظیمات</option>
                                <option value="blog">بلاگ ها</option>
                                <option value="role">role</option>
                                <option value="admin">ادمین ها</option>
                            </select>
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
