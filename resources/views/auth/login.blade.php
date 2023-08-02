
@extends('tanakoora.master.master')
@section('main_content')
    <section class="user-area ptb-54">
<div class="container">
    <div class="user-wrap">
        <div class="row">
            <div class="col-lg-8">
                <div class="user-form-content log-in-50">
                    <h3>ورود کاربران</h3>

                     <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>ایمیل</label>
                                    <input class="form-control" type="text" id="email" name="email">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>گذرواژه</label>
                                    <input class="form-control" type="password" name="password">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="login-action">
                                    <br>
												<span class="log-rem">
													<input id="remember-2" type="checkbox">
													<label>مرا بخاطر بسپار</label>
												</span>
<br>
                                    <p class="forgot-login">            @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                                {{ __('فراموشی گذرواژه؟') }}
                                            </a>
                                        @endif
												</p>
                                </div>
                            </div>
<br>
                            <div class="col-12">
                                <br>
                                <button class="default-btn radius-btn" type="submit">
                                    {{ __('ورود') }}
                                </button>
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
