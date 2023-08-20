<section class="best-selling-products-area">
    <div class="container">
        <div class="section-title">
            <h2>پرفروش ترین محصولات</h2>

            <a href="products.html" class="read-more">
                مشاهده بیشتر
            </a>
        </div>

        <div class="row justify-content-center">
            @php
                $products=\App\Models\Pro::where('status',1)->latest()->orderBy('name','ASC')->limit(12)->get();

            @endphp
            @foreach($products as $product)
                @php

                    $amount=( $product->selling_Price - $product->discount)
                @endphp
            <div class="col-lg-3 col-sm-6">
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

                    <div class="product-content">
                        <a href="product-details.html" class="title">
                            {{$product->name}}
                        </a>

                        <ul class="products-price">
                            <li>
                                @if($product->discount == NULL)
                                    {{$product->selling_Price}}
                                    <span class="available">در دسترس</span>
                                @else
                                    {{$amount}}
                                    <del>{{$product->selling_Price}}</del>
                                    <span class="available out"></span>
                                    <span class="available">در دسترس</span>
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
                                <li>
                                <i class="ri-star-fill"></i>
                                </li>
                            @elseif($reviewArg == 2)
                                <li>
                                <i class="ri-star-fill" ></i>
                                <i class="ri-star-fill" ></i>
                                </li>
                            @elseif($reviewArg == 3 )
                                <li>
                                <i class="ri-star-fill" ></i>
                                <i class="ri-star-fill" ></i>
                                <i class="ri-star-fill" ></i>
                                </li>
                            @elseif($reviewArg == 4 )
                                <li>
                                <i class="ri-star-fill" ></i>
                                <i class="ri-star-fill" ></i>
                                <i class="ri-star-fill" ></i>
                                <i class="ri-star-fill" ></i>
                                </li>
                            @elseif($reviewArg == 5 )
                                <li>
                                <i class="ri-star-fill" ></i>
                                <i class="ri-star-fill" ></i>
                                <i class="ri-star-fill" ></i>
                                <i class="ri-star-fill" ></i>
                                <i class="ri-star-fill" ></i>
                                </li>
                            @endif

                        </ul>

                        <a href="" class="default-btn radius-btn">
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
