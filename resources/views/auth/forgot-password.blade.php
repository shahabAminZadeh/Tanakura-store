@extends('tanakoora.master.master')
@section('main_content')
<!-- Start Forget Password Area -->
<div class="order-tracking-area ptb-54">
    <div class="container">
        <div class="order-tracking forgot-password">
            <h3>فراموشی رمز</h3>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="email">ایمیل</label>
                            <input name="email" id="email" type="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="default-btn radius-btn">
                            {{ __('فراموشی رمز عبور') }}
                        </button>
                    </div>
                    <div class="col-lg-12">
                        <p>مشاهده <a href="privacy-policy.html">حریم خصوصی</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
