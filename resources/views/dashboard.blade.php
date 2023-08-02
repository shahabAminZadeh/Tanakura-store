@extends('tanakoora.master.master')
@section('main_content')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li>
                        <a href="index.html">
                            خانه
                        </a>
                    </li>

                    <li class="active">داشبورد</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="dashboard-area ptb-54">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="dashboard-navigation">
                        <li>
                            <h3>جهت یابی</h3>
                        </li>
                        <li>
                            <a href="dashboard.html" class="active">داشبورد</a>
                        </li>
                        <li>
                            <a href="edit-profile.html">ویرایش پروفایل</a>
                        </li>
                        <li>
                            <a href="edit-address.html">ویرایش موقعیت</a>
                        </li>
                        <li>
                            <a href="order-history.html">تاریخچه سفارش ها</a>
                        </li>
                        <li>
                            <a href="order-details.html">جزئیات سفارش</a>
                        </li>
                        <li>
                            <a href="address.html">افزودن موقعیت</a>
                        </li>
                        <li>
                            <a href="{{route('UserChangePass')}}">بازیابی گذرواژه</a>
                        </li>
                        <li>
                            <a href="{{route('logoutUser')}}">خروج</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="profile-bar">
                                <div class="profile-info">
                                    <img style="height: 150px" src="{{(!empty($data->photo)) ? url('upload/user/image/'.$data->photo): url('upload/user/image/b.png')}}" alt="Image">

                                    <h3>
                                        <a href="edit-profile.html">{{$data->name}}</a>
                                    </h3>
                                    <a href="mailto:{{$data->email}}">{{$data->email}}</a>
                                    <a href="tel:973-635-8147">{{$data->phone}}</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="edit-profile">
                                <h3>ویرایش پروفایل</h3>


                                <form method="post" action="{{route('UserProfileStore')}}" class="submit-property-form " enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name">نام</label>
                                                <input name="name" value=" {{$data->name}}" type="text" class="form-control" id="name"  placeholder="نام را وارد کنید" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="email">آدرس ایمیل</label>
                                                <input value=" {{$data->email}}" name="email" type="email" class="form-control" id="email"  placeholder="ایمیل را وارد کنید" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="phone">تلفن</label>
                                                <input value=" {{$data->phone}}" type="text" class="form-control" name="phone" id="phone"  placeholder="تلفن را وارد کنید" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="address">آدرس</label>
                                                <input value=" {{$data->address}}" type="text" class="form-control" name="address" id="address"  placeholder="تلفن را وارد کنید" >
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>تصویر خود را تغییر دهید</label>
                                                <div class="file-upload">
                                                    <input type="file" name="photo" id="photo" class="inputfile">
                                                    <label class="upload" for="photo">
                                                        <i class="ri-image-2-fill"></i>
                                                        اینجا کلیک کنید
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <img  style="height: 50px;display: inline" id="ShowImageAdmin" class="profile-user-img img-fluid img-circle" src="{{(!empty($data->photo)) ? url('upload/user/image/'.$data->photo): url('upload/user/image/b.png')}}" alt="User profile picture">
<br>
                                        </div>
                                        <div class="col-lg-6">
                                            <div  class="text-center">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="edit-profiles">
                                            <button type="submit"  class="default-btn radius-btn">ویرایش پروفایل</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>


@endsection
