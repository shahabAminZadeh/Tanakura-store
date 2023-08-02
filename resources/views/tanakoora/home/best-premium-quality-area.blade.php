<section class="best-premium-quality-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="customer-slider style-three owl-carousel owl-theme">
                    <div class="single-customer">
                        <div class="avatar">
                            <img src="assets/images/customer/customer-1.png" class="customer" alt="Image">

                            <div class="avatar-name">
                                <h3>جرالد ادسون</h3>
                                <span>طراح وب</span>
                            </div>
                        </div>

                        <p>"لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم 40 سال استاندارد صنعت بوده است."</p>
                    </div>

                    <div class="single-customer">
                        <div class="avatar">
                            <img src="assets/images/customer/customer-2.png" class="customer" alt="Image">

                            <div class="avatar-name">
                                <h3>تام اندرو</h3>
                                <span>طراح وب</span>
                            </div>
                        </div>

                        <p>"لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم 40 سال استاندارد صنعت بوده است."</p>
                    </div>
                    <div class="single-customer">
                        <div class="avatar">
                            <img src="assets/images/customer/customer-3.png" class="customer" alt="Image">

                            <div class="avatar-name">
                                <h3>سارا تیلور</h3>
                                <span>طراح وب</span>
                            </div>
                        </div>

                        <p>"لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم 40 سال استاندارد صنعت بوده است."</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                @php
                    $banners=\App\Models\Banner::orderBy('tittle','ASC')->latest()->limit(1)->get();
                @endphp
                @foreach($banners as $banner)
                        <div class="card" style="border-radius: 15px">
                            <img style="border-radius: 15px" class="card-img-top" src="{{URL::asset('/upload/backend/banner/'.$banner->image)}}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">{{$banner->tittle}}</h4>
                                <p class="card-text">Some example text.</p>
                                <a style="color: white" href="{{$banner->url}}" class="read-more">
                                    اکنون بخرید
                                </a>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
<section style="margin-top: 45px;border-radius: 15px" class="best-selling-products-area pb-24">
    <div class="container">
        <div class="delas-bg">
            <div class="section-title">
                <h2> فروشندگان </h2>

                <a href="{{route('AllVendor')}}" class="read-more">
                    مشاهده بیشتر
                </a>
            </div>
            @php
                $vendors=\App\Models\User::where('status','active')->where('role','vendor')->orderBy('id','DESC')->limit(4)->get();
            @endphp
            <div class="row justify-content-center">
                @foreach($vendors as $item)
                    <div class="col">
                        <div class="single-products">
                            <div class="product-img">
                                <a href="{{route('vendor_detail',$item->id)}}">
                                    <img src="{{URL::asset('upload/user/image/'.$item->photo)}}" alt="Image">
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
                                <a href="{{route('vendor_detail',$item->id)}}" class="title">
                                    {{$item->name}}
                                </a>
                                <ul class="products-price">
                                    <li>
                                        وضعیت فروشگاه
                                        <span class="available">در دسترس</span>
                                    </li>
                                </ul>
                                <ul class="products-rating">
                                    @php
                                        $reviewArg=\App\Models\Review::where('product_id',$item->id)->where('status',1)->get();
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
                                <a  href="{{route('vendor_detail',$item->id)}}"  class="default-btn">
                                    <i class="fa-flash"></i>
                                    دیدن فروشگاه
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
