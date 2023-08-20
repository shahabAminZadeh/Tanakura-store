

@extends('tanakoora.master.master')
@section('main_content')


<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li>
                    <a href="index.html">
                        فروشنده
                    </a>
                </li>

                <li class="active">جزئیات فروشنده</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Product Details Area -->
<section class="product-details-area ptb-54">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="product-details-image pr-15">
                    <img style="height: 450px;width: 450px" src="{{URL::asset('/upload/user/image/'.$vendor->photo)}}"alt="Image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="product-details-desc pl-15">
                    <h3></h3>

                    <div class="price">


                    </div>

                    <div class="product-review">
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <a href="#" class="rating-count">(15 نظر مشتری)</a>
                    </div>
<p></p>


                    <a href="wishlist.html" class="default-btn radius-btn wishlist-btn">
                        <i class="ri-heart-line"></i>
                        علاقه مندی
                    </a>

                    <ul class="sku">
                        <li>
                            نام فروشگاه:
                            <span>{{$vendor->name}}</span>
                        </li>
                        <li>
                            ایمیل فروشنده:
                            <span>{{$vendor->email}}</span>


                        </li>
                        <li>
                            تلفن فروشنده :
                            <span>{{$vendor->phone}}</span>
                        </li>
                        <li>
                            آدرس فروشگاه :
                            <span>{{$vendor->address}}</span>
                        </li>
                        <li>
                            الحاق فروشگاه در سال :
                            <span>{{$vendor->join_vendor}}</span>
                        </li>
                        <li>
                            تلفن فروشنده :
                            <span>{{$vendor->phone}}</span>
                        </li>


                    </ul>





                    <ul class="social-wrap">
                        <li>
                            <span>اشتراک گذاری:</span>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Details Area -->

<!-- Start Related Products Area -->
<section class="related-products-area pb-30">
    <div class="container">
        <div class="section-title">
            <h2> محصولات فروشگاه </h2>
        </div>

        <div class="best-product-slider owl-carousel owl-theme">
            @foreach($Vproduct as $product)
            <div class="single-products style-box">
                <div class="product-img">
                    <a href="product-details.html">
                        <img src="{{URL::asset('/upload/backend/product/'.$product->thambnail)}}"  alt="Image">
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
                @php
                    $amount=( $product->selling_Price - $product->discount);
                @endphp
                <div class="product-content">
                    <a href="product-details.html" class="title">
                    {{$product->name}}
                    </a>
                    <ul class="products-price">
                                <li>
                                    {{$amount}}
                                    @if($product->qty>0)
                                        <span class="available">موجود</span>
                                    @else
                                        <span class="available out">اتمام موجودی</span>
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
                @endforeach
        </div>
    </div>
</section>
@endsection
