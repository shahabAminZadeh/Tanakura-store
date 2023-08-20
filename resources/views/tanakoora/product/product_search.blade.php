
@extends('tanakoora.master.master')
@section('main_content')

    @section('title')
       در حال جستوجوی {{$item}}
    @endsection


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
                <div class="col-lg-4">
                    <div class="widget-sidebar">
                        <div class="sidebar-widget categories">
                            <ul>
                                <li>
                                    <h3>زیر دسته ها</h3>
                                </li>

                            </ul>
                        </div>

                        <div class="sidebar-widget filter">
                            <h3>فیلتر قیمت گذاری</h3>
                            <form class="price-range-content">
                                <div class="price-range-bar" id="range-slider"></div>
                                <div class="price-range-filter">
                                    <div class="price-range-filter-item">
                                        <input type="text" id="price-amount" readonly>
                                    </div>
                                </div>
                                <button class="filter-btn">فیلتر</button>
                            </form>
                        </div>

                        <div class="sidebar-widget brand">
                            <ul>
                                <li>
                                    <h3>برندهای محبوب</h3>
                                </li>
                                <li>
                                    <div class="form-group checkboxs">
                                        <input type="checkbox" class="chb2">
                                        دپان
                                        <span>(21)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group checkboxs">
                                        <input type="checkbox" class="chb2">
                                        ژنوز
                                        <span>(10)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group checkboxs">
                                        <input type="checkbox" class="chb2">
                                        پوفو
                                        <span>(15)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group checkboxs">
                                        <input type="checkbox" class="chb2">
                                        نائون
                                        <span>(05)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group checkboxs">
                                        <input type="checkbox" class="chb2">
                                        آنوا
                                        <span>(13)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group checkboxs">
                                        <input type="checkbox" class="chb2">
                                        کانستیک
                                        <span>(17)</span>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <div class="special-wrap seller-sidebar">
                            <div class="section-title">
                                <h2>جدیدترین محصولات</h2>
                            </div>

                            <ul class="trending-product-list special-product-list m-0">
                                @foreach($new_product as $item) @endforeach
                                <li class="single-list">
                                    <a href="">
                                        <img src="{{URL::asset('/upload/backend/product/'.$item->thambnail)}}" alt="Image">
                                    </a>
                                    @php

                                        $amount=( $item->selling_Price - $item->discount);
                                        $discount_price=($item->discount/$item->selling_Price) *100;

                                    @endphp
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
                                            @php
                                                $reviewArg=\App\Models\Review::where('product_id',$item->id)->where('status',1)->avg('rating');
                                            @endphp
                                            @if($reviewArg == 0)
                                                ستاره ای داده نشده
                                            @elseif($reviewArg == 1)
                                                <i class="ri-star-fill"></i>
                                            @elseif($reviewArg == 2)
                                                <i class="ri-star-fill" ></i>
                                                <i class="ri-star-fill" ></i>

                                            @elseif($reviewArg == 3 )
                                                <i class="ri-star-fill" ></i>
                                                <i class="ri-star-fill" ></i>
                                                <i class="ri-star-fill" ></i>

                                            @elseif($reviewArg == 4 )
                                                <i class="ri-star-fill" ></i>
                                                <i class="ri-star-fill" ></i>
                                                <i class="ri-star-fill" ></i>
                                                <i class="ri-star-fill" ></i>

                                            @elseif($reviewArg == 5 )
                                                <i class="ri-star-fill" ></i>
                                                <i class="ri-star-fill" ></i>
                                                <i class="ri-star-fill" ></i>
                                                <i class="ri-star-fill" ></i>
                                                <i class="ri-star-fill" ></i>

                                            @endif
                                        </ul>
                                    </div>
                                </li>


                            </ul>
                        </div>

                        <div class="sidebars-ad">
                            <a href="products.html">
                                <img src="assets/images/sidebar-ad.jpg" alt="Image">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
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
                                                <a href="{{route('addToWishList',$product->id)}}" class="wish-btn">
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
