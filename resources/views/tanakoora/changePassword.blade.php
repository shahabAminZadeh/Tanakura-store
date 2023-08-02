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
                            <a href="password.html">بازیابی گذرواژه</a>
                        </li>
                        <li>
                            <a href="{{route('logoutUser')}}">خروج</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="address-list">
                        <h3>تغییر گذرواژه</h3>
                        <p> می توانید گذرواژه خود را تغییر دهید لطفا فرم را پر کنید.</p>

                        <form method="post" action="{{route('UserUpdatePassword')}}" >
                            @csrf
                            @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{session('status')}}
                                </div>
                            @elseif(session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{session('error')}}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="old_password"  type="password" class="form-control @error('old_password') is-invalid @enderror" id="old_password"  placeholder="پسورد را وارد کنید" >
                                        @error('old_password')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="new_password"  type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password"  placeholder="پسورد جدید را وارد کنید" >
                                        @error('new_password')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="new_password_confirmation"   type="password" class="form-control" id="new_password_confirmation"  placeholder="پسورد جدید را وارد کنید" >
                                        @error('new_password_confirmation')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="default-btn radius-btn">
                                        ذخیره تغییرات
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
