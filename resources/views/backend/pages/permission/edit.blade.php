@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c">ویرایش اجازه </h4>
                <div class="card card-primary">
                    <form method="post" action="{{route('ُUpdatePermission',$permission->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">نام</label>
                                <br>
                                <input name="name" value="{{$permission->name}}"  type="text" class="form-group" id="name"  placeholder="نام را وارد کنید" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label tyle="text-align: center" for="group_name">گروه اجازه</label>
                            <br>
                            <select name="group_name" class="form-control select2 select2-hidden-accessible" style="width: 95%;text-align: center" tabindex="-1" aria-hidden="true">
                                <option selected="">دسته را انتخاب کنید</option>
                                <option value="category"{{$permission->group_name == 'category' ? 'selected':''}}>دسته بندی</option>
                                <option value="brand"{{$permission->group_name == 'brand' ? 'selected':''}}>برند ها</option>
                                <option value="sub_category"{{$permission->group_name == 'sub_category' ? 'selected':''}}>زیر دسته محصولات </option>
                                <option value="product"{{$permission->group_name == 'product' ? 'selected':''}}>محصولات</option>
                                <option value="slide"{{$permission->group_name == 'slide' ? 'selected':''}}>اسلاید ها</option>
                                <option value="ads"{{$permission->group_name == 'ads' ? 'selected':''}}>Ads</option>
                                <option value="coupon"{{$permission->group_name == 'coupon' ? 'selected':''}}>تخفیف ها</option>
                                <option value="area"{{$permission->group_name == 'area' ? 'selected':''}}>محدوده</option>
                                <option value="vendor"{{$permission->group_name == 'vendor' ? 'selected':''}}>فروشنده ها</option>
                                <option value="order"{{$permission->group_name == 'order' ? 'selected':''}}>سفارشات</option>
                                <option value="return"{{$permission->group_name == 'return' ? 'selected':''}}>return</option>
                                <option value="report"{{$permission->group_name == 'report' ? 'selected':''}}>گذارشات</option>
                                <option value="user"{{$permission->group_name == 'user' ? 'selected':''}}>کاربران</option>
                                <option value="review"{{$permission->group_name == 'review' ? 'selected':''}}>بررسی ها(کامنت ها)</option>
                                <option value="sting"{{$permission->group_name == 'sting' ? 'selected':''}}>تنظیمات</option>
                                <option value="blog"{{$permission->group_name == 'blog' ? 'selected':''}}>بلاگ ها</option>
                                <option value="role"{{$permission->group_name == 'role' ? 'selected':''}}>role</option>
                                <option value="admin"{{$permission->group_name == 'admin' ? 'selected':''}}>ادمین ها</option>
                            </select>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> بروزرسانی </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
