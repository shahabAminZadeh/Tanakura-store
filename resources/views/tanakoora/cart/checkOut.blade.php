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

                <li class="active">بررسی محصول</li>
            </ul>
        </div>
    </div>
</div>
<section class="checkout-area ptb-54">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="log-in-coupon-code">
                    <p>بازگشت مشتری؟ اینجا کلیک کنید
                        <a href="my-account.html">
                            ورود کاربران
                        </a>
                    </p>
                </div>

                <form >
                    <div class="billing-details">
                        <h3 class="title">جزئیات صورتحساب</h3>

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>نام <span class="required">*</span></label>
                                    <input type="text" value="{{Auth::user()->name}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>آدرس<span class="required">*</span></label>
                                    <input type="text" value="{{Auth::user()->address}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>ایمیل <span class="required">*</span></label>
                                    <input type="email" value="{{Auth::user()->email}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>تلفن <span class="required">*</span></label>
                                    <input type="text" value="{{Auth::user()->phone}}" class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>
                </form>

            </div>

            <div class="col-lg-4 col-md-12">
                <form action="{{route('checkOut.basket')}} " method="post">
                    @csrf
                                <div class="order-details ml-15">
                                    <div class="cart-totals mb-0">
                                        <h3>مجموع سبد خرید</h3>
                                        @inject('basket','App\Support\Basket\Basket')
                                        <ul>
                                            <li>کرایه حمل <span>{{number_format(100)}} تومان</span></li>
                                            <li>جمع کل <span>{{number_format($basket->subTotal())}} تومان</span></li>
                                            <li><b>مبلغ پرداخت</b> <span><b>{{number_format($basket->subTotal() + 100)}} تومان</b></span></li>
                                        </ul>
                                    </div>

                                </div>

                    <div class="faq-accordion">
                        <h3>روش پرداخت</h3>

                        <ul class="list-group-item">
                            <li class="accordion-item ">
                                <input type="radio" id="online" value="online" name="method">
                                <label for="online" class="accordion-title" >
                                    انتقال مستقیم بانکی
                                </label>
                                <select name="gateway" class="form-control">
                                    <option>درگاه مورد نشر خود را انتخاب کنید</option>
                                    <option name="saman">بانک سامان</option>
                                    <option name="Pasargad">بانک پاسارگاد</option>
                                </select>

                                <p class="accordion-content">
                                    پرداخت خود را مستقیما به حساب بانکی ما انجام دهید. لطفا از شناسه سفارش خود به عنوان مرجع پرداخت استفاده کنید. سفارش شما تا زمانی که وجوه به حساب ما واریز نشود ارسال نخواهد شد.
                                </p>
                            </li>

                            <li class="accordion-item">
                                <input type="radio" id="cache" value="cache" name="method">
                                <label for="cache" class="accordion-title" href="javascript:void(0)">
                                    پرداخت هنگام تحویل
                                </label>

                                <p class="accordion-content">
                                    لطفا چک خود را به نام فروشگاه، خیابان، فروشگاه، شهرستان فروشگاه، کدپستی فروشگاه ارسال کنید.
                                </p>
                            </li>

                            <li class="accordion-item">
                                <input type="radio" id="card" value="card" name="method" >
                                <label for="card" class="accordion-title" href="javascript:void(0)">
                                    پرداخت کارت به کارت
                                </label>

                                <p class="accordion-content">
                                    می توانید از 6104 3373 0636 8026 به نام اقای شهاب محمد امین زاده صورت حستی خود را پرداخت کنید و از طریق ارتباط با پشتیبان از خزید هود مطلع شوید
                                </p>
                            </li>

                            <li class="accordion-item">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="ship-differents-address">
                                    <label class="form-check-label" for="ship-different-address">موافق هستم با <a href="terms-conditions.html">شرایط و ضوابط</a>*</label>
                                </div>
                            </li>

                            <li class="place-order">
                                <button type="submit" class="default-btn radius-btn">
                                    ثبت سفارش
                                </button>
                            </li>
                        </ul>
                    </div>
                </form>
           </div>
        </div>
    </div>
</section>
@endsection
