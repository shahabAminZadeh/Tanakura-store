@extends('tanakoora.master.master')
@section('main_content')
<section class="user-area ptb-54">
    <div class="container">
        <div class="user-wrap">
            <div class="row">
                <div class="col-lg-8">
                    <div class="user-form-content">
                        <h3>فروشنده شو!</h3>
                        <form method="POST" action="{{ route('VendorRegister') }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name">نام فروشگاه</label>
                                        <input id="name" class="form-control" type="text" name="name">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">ایمیل</label>
                                        <input id="email" class="form-control" type="email" name="email">
                                    </div>
                                </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="phone">تلفن</label>
                                                <input id="phone" class="form-control" type="text" name="phone">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="category">انتخاب کنید</label>
                                            <select name="join_vendor" class="form-control">
                                                <option>سال عضویت</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                            </select>
                                        </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password">گذرواژه</label>
                                        <input id="password" class="form-control" type="password" name="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password_confirmation">تکرار گذرواژه</label>
                                        <input  class="form-control" type="password" id="password_confirmation" name="password_confirmation">
                                    </div>
                                </div>
                                <br>
                                <div class="col-12">
                                    <div class="login-action">
												<span class="log-rem">
													<input id="remember-2" type="checkbox">
													<label>موافق هستم با <a href="trending-products.html">قوانین</a> و <a href="privacy-policy.html">حریم خصوصی</a></label>
												</span>
                                    </div>
                                </div>
                                <br>
                                <div class="col-12">
                                    <button class="default-btn radius-btn" type="submit">
                                        {{ __('ثبت نام') }}
                                    </button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
