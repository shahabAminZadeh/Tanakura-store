
<section class="special-area style-three">
    <div class="container">
        <div class="row justify-content-center">




            <div class="col-lg-3 col-sm-6">
                <div class="special-wrap seller-sidebar">
                    <div class="section-title">
                        <h2>فروش ویژه</h2>
                    </div>

                    <ul class="trending-product-list special-product-list">
                        @foreach($hot_deals as $product)
                            @php

                                $amount=( $product->selling_Price - $product->discount);
                                $discount_price=($product->discount/$product->selling_Price) *100;

                            @endphp

                            <li class="single-list">
                                <a href="products.html">
                                    <img src="{{URL::asset('/upload/backend/product/'.$product->thambnail)}}" alt="Image">
                                </a>

                                <div class="product-content">
                                    <a href="product-details.html" class="title">
                                        {{$product->name}}
                                    </a>

                                    <ul class="products-price">
                                        <li>
                                            {{$amount}}
                                            @if($product->qty > 0 )
                                                <span class="available">در دسترس</span>
                                                <span class="hot">%{{$discount_price}}</span>
                                            @else
                                                <span class="available" style="color: red">ناموجود</span>
                                                <span class="hot">%{{$discount_price}}-</span>
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
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="special-wrap seller-sidebar">
                    <div class="section-title">
                        <h2>پیشنهاد ویژه</h2>
                    </div>

                    <ul class="trending-product-list special-product-list">
                        @foreach( $special_deals as $product)
                            @php

                                $amount=( $product->selling_Price - $product->discount);
                                $discount_price=($product->discount/$product->selling_Price) *100;

                            @endphp

                            <li class="single-list">
                                <a href="">
                                    <img src="{{URL::asset('/upload/backend/product/'.$product->thambnail)}}" alt="Image">
                                </a>

                                <div class="product-content">
                                    <a href="product-details.html" class="title">
                                        {{$product->name}}
                                    </a>

                                    <ul class="products-price">
                                        <li>
                                            @if($product->qty > 0)

                                                <span class="new-price">{{$amount}} تومان</span>
                                                <span class="available">در دسترس</span>
                                                <span style="width: 50px; height: 75px" class="hot">پیشنهاد ویژه</span>
                                            @else
                                                <span class="new-price">{{$amount}} تومان</span>
                                                <span class ="available" style="color: red">ناموجود </span>
                                                <span style="width: 50px; height: 75px" class="hot">پیشنهاد ویژه</span>
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
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="special-wrap seller-sidebar">
                    <div class="section-title">
                        <h2>محصولات پرفروش</h2>
                    </div>

                    <ul class="trending-product-list special-product-list">
                        @foreach( $special_offer as $product)
                            @php

                                $amount=( $product->selling_Price - $product->discount);
                                $discount_price=($product->discount/$product->selling_Price) *100;

                            @endphp

                            <li class="single-list">
                                <a href="products.html">
                                    <img src="{{URL::asset('/upload/backend/product/'.$product->thambnail)}}" alt="Image">
                                </a>

                                <div class="product-content">
                                    <a href="product-details.html" class="title">
                                        {{$product->name}}
                                    </a>

                                    <ul class="products-price">
                                        <li>
                                            @if($product->qty > 0)

                                                <span class="new-price">{{$amount}} تومان</span>
                                                <span class="available">در دسترس</span>
                                                <span style=";background-color: #0a53be" class="hot">پرفروش</span>
                                            @else
                                                <span class="new-price">{{$amount}} تومان</span>
                                                <span class ="available" style="color: red">ناموجود </span>
                                                <span style=";background-color: #0a53be" class="hot">پرفروش </span>
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
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="special-wrap seller-sidebar">
                    <div class="section-title">
                        <h2>محصولات محبوب</h2>
                    </div>

                    <ul class="trending-product-list special-product-list">
                        @foreach( $featured as $product)
                            @php

                                $amount=( $product->selling_Price - $product->discount);
                                $discount_price=($product->discount/$product->selling_Price) *100;

                            @endphp

                            <li class="single-list">
                                <a href="products.html">
                                    <img src="{{URL::asset('/upload/backend/product/'.$product->thambnail)}}" alt="Image">
                                </a>

                                <div class="product-content">
                                    <a href="product-details.html" class="title">
                                        {{$product->name}}
                                    </a>

                                    <ul class="products-price">
                                        <li>
                                            @if($product->qty > 0)

                                                <span class="new-price">{{$amount}} تومان</span>
                                                <span class="available">در دسترس</span>
                                                <span style=";background-color: #e0a800" class="hot">محبوب</span>
                                            @else
                                                <span class="new-price">{{$amount}} تومان</span>
                                                <span class ="available" style="color: red">ناموجود </span>
                                                <span style=";background-color: #e0a800" class="hot">محبوب </span>
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
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
