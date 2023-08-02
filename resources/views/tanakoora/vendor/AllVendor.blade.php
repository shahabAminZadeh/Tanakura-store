
@extends('tanakoora.master.master')
@section('main_content')
<section class="best-selling-products-area">
    <div class="container" style="margin: 45px">
        <div class="section-title">
            <h2>لیست فروشتده ها</h2>

            <a href="products.html" class="read-more">
                مشاهده بیشتر
            </a>
        </div>

        <div class="row justify-content-center">
            @foreach($vendors as $vendor)

                <div class="col-lg-3 col-sm-6">
                    <div class="single-products style-box">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img src="{{URL::asset('upload/user/image/'.$vendor->photo)}}" alt="Image">
                            </a>

                            <ul class="products-cart-wish-view">
                                <li>
                                    <a href="wishlist.html" class="wish-btn">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="ri-eye-line"></i>
                                    </button>
                                </li>
                                <li>
                                    <a href="product-quality.html" class="quality-btn">
                                        <i class="ri-link"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-content">
                            <a href="product-details.html" class="title">
                               {{$vendor->name}}
                            </a>

                            <ul class="products-price">
                                <li>
                                    1100 تومان
                                    <span class="hot">(1 کیلوگرم)</span>
                                    <span class="available">در دسترس</span>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>

                            <a href="shopping-cart.html" class="default-btn radius-btn">
                                <i class="ri-shopping-cart-line"></i>
                                افزودن به سبد
                            </a>
                        </div>
                    </div>
                </div>

            @endforeach


        </div>
    </div>
</section>
@endsection
