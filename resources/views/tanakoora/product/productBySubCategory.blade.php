

@extends('tanakoora.master.master')
@section('main_content')
    @section('title')
        {{$product->name}}
    @endsection


    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li>
                        <a href="index.html">
                            خانه
                        </a>
                    </li>

                    <li class="active">محصولات</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Product Area -->
    <section class="products-area ptb-54">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="showing-result">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="showing-result-count">
                                    <p>نمایش {{count($products)}} محصول از 60 محصول</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="products-filter-options">
                                    <div class="view-list-row">
                                        <div class="view-column">
                                            <a href="#" class="icon-view-three active">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>
                                            <a href="#" class="view-grid-switch">
                                                <span></span>
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="showing-top-bar-ordering">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>مرتب سازی پیش فرض</option>
                                        <option value="1">ارگانیک</option>
                                        <option value="2">میوه و سبزیجات</option>
                                        <option value="3">شکلات</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="products-filter" class="products-collections-listing row justify-content-center">



                        @foreach($products as $item)
                            @php

                                $amount=( $item->selling_Price - $item->discount);
                                $discount_price=($item->discount/$item->selling_Price) *100;

                            @endphp

                            <div class="col-lg-4 col-sm-6">
                                <div class="single-products style-box">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="{{URL::asset('/upload/backend/product/'.$item->thambnail)}}"  alt="Image">
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
                                            {{$item->name}}
                                        </a>

                                        <ul class="products-price">
                                            <li>

                                                @if($item->discount > 0 )

                                                    {{$amount}}تومان
                                                    <del>{{$item->selling_Price}} تومان</del>
                                                    <span class="available">در دسترس</span>

                                                @else
                                                    {{$item->selling_Price}}تومان
                                                    <span CLASS="hot">$discount_price</span>
                                                    <span class="available">در دسترس</span>

                                                @endif
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
                        <div class="col-12">
                            <div class="pagination-area">
                                <span class="page-numbers current" aria-current="page">1</span>
                                <a href="products.html" class="page-numbers">2</a>
                                <a href="products.html" class="page-numbers">3</a>

                                <a href="products.html" class="next page-numbers">
                                    <i class="ri-arrow-left-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
