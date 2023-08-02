

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

                <li class="active">جزئیات محصول</li>
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
                    <img style="height: 450px;width: 450px" src="{{URL::asset('/upload/backend/product/'.$product->thambnail)}}"alt="Image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="product-details-desc pl-15">
                    <h3>{{$product->name}}</h3>

                    <div class="price">
                        @php

                            $amount=( $product->selling_Price - $product->discount)
                        @endphp

                        @if($product->discount > 0)

                            <span class="new-price">{{$amount}} تومان <del>{{$product->selling_Price}} تومان</del></span>
                        @else
                            <span class="new-price">{{$product->selling_Price}} تومان </span>

                        @endif

                    </div>

                    <div class="product-review">
                        <div class="rating">
                            @php

                                $reviewArg=\App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
                                $review_count=\App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();

                            @endphp
                            @if($reviewArg == 0)
                                ستاره ای داده نشده
                            @elseif($reviewArg == 1 || $reviewArg < 2)
                                <i class="ri-star-fill"></i>

                            @elseif($reviewArg == 2 || $reviewArg < 3)
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>

                            @elseif($reviewArg == 3 || $reviewArg < 4)
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>

                            @elseif($reviewArg == 4 || $reviewArg < 5)
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>

                            @elseif($reviewArg == 5 || $reviewArg < 5)
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>

                            @endif
                        </div>
                        <a href="#" class="rating-count">{{count($review_count)}} (نظر مشتری)</a>
                    </div>
<p>{{$product->long_description}}</p>
                    <div class="quantities-wrap">
                        <span class="quantities">تعداد:</span>

                        <div class="product-quantity">
                            <div class="input-counter">
										<span class="minus-btn">
											<i class="ri-subtract-line"></i>
										</span>

                                <input type="text" value="1">

                                <span class="plus-btn">
											<i class="ri-add-line"></i>
										</span>
                            </div>
                        </div>

                        <a href="shopping-cart.html" class="default-btn radius-btn">
                            <i class="ri-shopping-cart-line"></i>
                            افزودن به سبد
                        </a>
                    </div>

                    <a href="wishlist.html" class="default-btn radius-btn wishlist-btn">
                        <i class="ri-heart-line"></i>
                        علاقه مندی
                    </a>

                    <ul class="sku">
                        <li>
                            شناسه:
                            <span>{{$product->code}}</span>
                        </li>
                        <li>
                            موجودی:

                            @if($product->qty > 0)
                                <span style="color: green">در انبار</span>
                            @else
                                <span style="color: red"> ناموجود </span>
                            @endif



                        </li>
                        <li>
                            دسته بندی :
                            <span>{{$product['category']['name']}}</span>
                        </li>
                        <li>
                            زیر دسته  :

                        </li>
                        <li>
                            برند:
                            <span>{{$product['brand']['name']}}</span>
                        </li>



                        @if($product->vendor_id == NULL)
                        <li>
                            فروشنده:
                            <span>مدیریت</span>
                        </li>
                        @else

                            <li>
                                فروشنده:
                                <span>{{$product['vendor']['name']}}</span>
                            </li>
                        @endif


                    </ul>

                    @if($product->color == NULL)

                    @else

                        <div class="attr-detail attr-size mb-30">
                           <strong class="mr-10" style="width: 50px">رنگ:</strong>
                            <select class="form-control " id="color">
                                <option selected="" disabled=""> انتخاب کنید </option>
                                @foreach($product_color as $color)
                                    <option value="{{$color}}">{{ucwords($color)}}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif


                    @if($product->size == NULL)

                    @else

                        <div class="attr-detail attr-size mb-30">
                            <strong class="mr-10" style="width: 50px">سایز:</strong>
                            <select class="form-control " id="color">
                                <option selected="" disabled=""> انتخاب کنید </option>
                                @foreach($product_size as $size)
                                    <option value="{{$size}}">{{ucwords($size)}}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif



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

            <div class="col-lg-12 col-md-12">
                <div id="reviews" class="tab products-details-tab">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <ul class="tabs">
                                <li>
                                    شرح
                                </li>
                                <li>
                                    اطلاعات تکمیلی
                                </li>
                                <li>
                                    نظرات
                                </li>
                                <li>
                                    فروشنده
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="tab_content">
                                <div class="tabs_item">
                                    <div class="products-details-tab-content">
                                        <h3>بررسی اجمالی</h3>
                                       <p><strong>
                                               {{$product->short_description}}
                                           </strong></p>
                                        <p>  {{$product->long_description}}</p>
                                    </div>
                                </div>

                                <div class="tabs_item">
                                    <div class="products-details-tab-content">
                                        <ul class="additional-information">
                                            <li><span>برند:</span> گرو</li>
                                            <li><span>رنگ:</span> {{$product->color}}</li>
                                            <li><span>سایز:</span> {{$product->size}}</li>
                                            <li><span>دسته بندی:</span>{{$product['category']['name']}}</li>
                                            <li><span>برند:</span>{{$product['brand']['name']}}</li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="tabs_item">
                                    <div class="products-details-tab-content">
                                        <div class="product-review-form">
                                            <h3>نظرات کاربران</h3>
                                            @php
                                                $reviews=\App\Models\Review::where('product_id',$product->id)->latest()->limit(3)->get();
                                                $reviewArg=\App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
                                            @endphp
                                            <div class="review-title">
                                                <div class="rating">
                                                    @php
                                                        $reviewArg=\App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
                                                    @endphp
                                                    @if($reviewArg == 0)
                                                        ستاره ای داده نشده
                                                    @elseif($reviewArg == 1 || $reviewArg < 2)
                                                        <i class="ri-star-fill"></i>

                                                    @elseif($reviewArg == 2 || $reviewArg < 3)
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>

                                                    @elseif($reviewArg == 3 || $reviewArg < 4)
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>

                                                    @elseif($reviewArg == 4 || $reviewArg < 5)
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>

                                                    @elseif($reviewArg == 5 || $reviewArg < 5)
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>

                                                    @endif
                                                </div>
                                                <a href="product-details.html" class="btn default-btn">نظر بدهید</a>
                                            </div>



                                        @foreach($reviews as $item)

                                                @if($item->status == 0 )

                                                    @else

                                            <div class="review-comments">
                                                <div class="review-item">
                                                    <div class="rating">

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



                                                    </div>

                                                    <span><strong>{{$item->user->name}}</strong> در <strong>{{\Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</strong></span>
                                                    <p>{{$item->comment}}</p>

                                                    <a href="product-details.html" class="review-report-link">گزارش کاربر</a>
                                                </div>
                                            </div>
                                                @endif
                                            @endforeach
                                            <div class="review-form">
                                                <h3>نظر بدهید</h3>


                                                @guest
                                                    <p><b>برای اعلام نظر در مورد محصول اول ورود کنید به سایت <a href="{{route('login')}}"  >اینجا کلیک کنید</a> </b></p>
                                                @else


                                                <form action="{{route('add_review')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                                    @if($product->vendor_id == NULL)
                                                        <input type="hidden" name="hidden_vendor" value="">
                                                    @else
                                                        <input type="hidden" name="hidden_vendor" value="{{$product->id}}">
                                                    @endif


                                                    <div class="row">
                                                        <table>
                                                            <thead>
                                                            <tr>
                                                                <th class="cell-level">به کیفیت محصول امتیاز دهید</th>
                                                                <th>1 ستاره </th>
                                                                <th>2 ستاره </th>
                                                                <th>3 ستاره </th>
                                                                <th>4 ستاره </th>
                                                                <th>5 ستاره </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="cell-level"></td>
                                                                <td><input type="radio" name="qty" class="radius-btn" value="1"></td>
                                                                <td><input type="radio" name="qty" class="radius-btn" value="2"></td>
                                                                <td><input type="radio" name="qty" class="radius-btn" value="3"></td>
                                                                <td><input type="radio" name="qty" class="radius-btn" value="4"></td>
                                                                <td><input type="radio" name="qty" class="radius-btn" value="5"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>نظر شما (1500)</label>
                                                                <textarea name="comment" id="review-body" cols="30" rows="8" class="form-control"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12">
                                                            <button type="submit" class="btn default-btn">ارسال</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                @endguest


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if($product->vendor_id == NULL)
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <ul class="additional-information">
                                                <li><span>فروشنده:</span> گروه میریت </li>

                                            </ul>
                                        </div>
                                    </div>

                                @else
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <img style="margin:35px;width: 150px;height: 150px;border-radius: 100px"  src="{{(!empty($data->photo)) ? url('upload/vendor/image/'.$data->photo): url('upload/vendor/image/R.png')}}" >

                                            <ul class="additional-information">
                                                <li><span>نام فروشنده:</span>{{$product['vendor']['name']}} </li>
                                                <li><span>آدرس فروشنده:</span>{{$product['vendor']['address']}}</li>
                                                <li><span>تلفن فروشنده:</span>{{$product['vendor']['phone']}}</li>

                                            </ul>
                                        </div>
                                    </div>
                                @endif








                            </div>
                        </div>
                    </div>
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
            <h2>محصولات مرتبط</h2>
        </div>

        <div class="best-product-slider owl-carousel owl-theme">
            @foreach($relatedProduct as $item)
            <div class="single-products style-box">
                <div class="product-img">
                    <a href="product-details.html">
                        <img   src="{{URL::asset('/upload/backend/product/'.$item->thambnail)}}" alt="Image">
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


                        @if($item->qty > 0)
                                <li>

                                    @if($item->discount > 0)
                                        {{$amount}} تومان
                                        <span class="available">در دسترس</span>
                                    @else
                                        {{$item->selling_Price}} تومان
                                        <span class="available">در دسترس</span>
                                    @endif

                                </li>
                            @else
                                <li>

                                    @if($item->discount > 0)

                                        {{$amount}} تومان


                                        <span class="available out">اتمام موجودی</span>
                                    @else
                                        {{$item->selling_Price}} تومان
                                        <span class="available out">اتمام موجودی</span>
                                    @endif

                                </li>
                            @endif

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
