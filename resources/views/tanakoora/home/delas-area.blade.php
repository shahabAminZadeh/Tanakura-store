<section  class="delas-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-title">
                    <h2>فروش ویژه</h2>

                    <a href="products.html" class="read-more">
                        مشاهده بیشتر
                    </a>
                </div>

                <div class="row justify-content-center">
                    @foreach($special_deals as $product)
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-products style-box">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('/upload/backend/product/'.$product->thambnail)}}" alt="Image">
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
                                    $discount_price=($product->discount/$product->selling_Price) *100;

                                @endphp

                                <div class="product-content">
                                    <a href="product-details.html" class="title">
                                        {{$product->name}}
                                    </a>

                                    <ul class="products-price">
                                        <li>
                                            {{ $amount }} تومان

                                            @if($product-> qty > 0)
                                                <span class="hot">%{{$discount_price}}-</span>
                                                <span class="available">در دسترس</span>
                                            @else
                                                <span class="hot">%{{$discount_price}}-</span>
                                                <span class ="available" style="color: #e71717"> ناموجود </span>
                                            @endif


                                        </li>
                                    </ul>

                                    <ul class="products-rating">

                                        @php
                                            $reviewArg=\App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
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

                                    <a href="{{ route('add.basket', $product->id) }}" class="default-btn radius-btn">
                                        <i class="ri-shopping-cart-line"></i>
                                        افزودن به سبد
                                    </a>
                                </div>
                            </div>
                        </div>


                    @endforeach

                </div>
            </div>















            <div class="col-lg-3">
                <div class="deals-products-wrap style-three">
                    <div class="section-title">
                        <h2>پیشنهاد ویژه</h2>

                        <a href="products.html" class="read-more">
                            مشاهده همه
                        </a>
                    </div>

                    <div class="deals-products-slider owl-carousel owl-theme">
                        <div class="single-products deals-products">
                            <div class="product-img">
                                <div id="timer">
                                    <div id="days"></div>
                                    <div id="hours"></div>
                                    <div id="minutes"></div>
                                    <div id="seconds"></div>
                                </div>

                                <a href="product-details.html">
                                    <img src="{{asset('tanakoora/assets/images/products/product-53.jpg')}}" alt="Image">
                                </a>
                            </div>

                            <div class="product-content">
                                <a href="product-details.html" class="title">
                                    مجموعه ادویه جات
                                </a>

                                <ul class="products-price">
                                    <li>
                                        1100 تومان
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
                            </div>
                        </div>

                        <div class="single-products deals-products">
                            <div class="product-img">
                                <div id="timers">
                                    <div id="days-p"></div>
                                    <div id="hours-p"></div>
                                    <div id="minutes-p"></div>
                                    <div id="seconds-p"></div>
                                </div>

                                <a href="product-details.html">
                                    <img src="{{asset('tanakoora/assets/images/products/product-54.jpg')}}" alt="Image">
                                </a>
                            </div>

                            <div class="product-content">
                                <a href="product-details.html" class="title">
                                    حبوبات تازه
                                </a>

                                <ul class="products-price">
                                    <li>
                                        3100 تومان
                                        <del>5200 تومان</del>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
