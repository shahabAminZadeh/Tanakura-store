@extends('tanakoora.master.master')
@section('main_content')
    <title>Cart</title>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li>
                        <a href="index.html">
                            خانه
                        </a>
                    </li>

                    <li class="active">سبد خرید</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="cart-area ptb-54">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form class="cart-controller">
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">حذف</th>
                                    <th scope="col">محصول</th>
                                    <th scope="col"></th>
                                    <th scope="col">قیمت واحد</th>
                                    <th scope="col">تعداد</th>
                                    <th scope="col">مجموع</th>
                                </tr>
                                </thead>

                                <tbody>


                                <tr>
                                    <td class="trash">
                                        <a href="shopping-cart.html" class="remove">
                                            <i class="ri-delete-bin-line"></i>
                                        </a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="product-details.html">
                                            <img src="assets/images/products/product-18.jpg" alt="Image">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="product-details.html">گوشت تازه گاو</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">1100 تومان</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
													<span class="minus-btn">
														<i class="ri-subtract-line"></i>
													</span>

                                            <input type="text" value="1">

                                            <span class="plus-btn">
														<i class="ri-add-line"></i>
													</span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">1100 تومان</span>
                                    </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </form>

                    <div class="coupon-cart">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="کد تخفیف">
                                    <button class="default-btn radius-btn">
                                        اعمال کد
                                    </button>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <a href="checkout.html" class="default-btn update-cart radius-btn">
                                    بروزرسانی سبد
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="cart-totals">
                        <h3 class="cart-checkout-title">مجموع سبد خرید</h3>

                        <ul>
                            <li>زیرمجموعه <span>2100 تومان</span></li>
                            <li>کرایه حمل <span>1000 تومان</span></li>
                            <li>جمع کل <span>3100 تومان</span></li>
                            <li><b>مبلغ پرداخت</b> <span><b>3100 تومان</b></span></li>
                        </ul>

                        <a href="checkout.html" class="default-btn radius-btn">
                            ادامه و پرداخت
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
