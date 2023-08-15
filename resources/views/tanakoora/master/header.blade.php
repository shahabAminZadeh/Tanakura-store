<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <!-- Required meta tags -->
    @php
    $seo=\App\Models\Seo::find(1);

    @endphp
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="{{$seo->keywords}}" >
    <meta name="description" content="{{$seo->description}}">
    <meta name="author" content="{{$seo->author}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{asset('tanakoora/assets/css/bootstrap.rtl.min.css')}}">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="{{asset('tanakoora/assets/css/owl.theme.default.min.css')}}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{asset('tanakoora/assets/css/owl.carousel.min.css')}}">
    <!-- Remixicon CSS -->
    <link rel="stylesheet" href="{{asset('tanakoora/assets/css/remixicon.css')}}">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="{{asset('tanakoora/assets/css/meanmenu.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{asset('tanakoora/assets/css/animate.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('tanakoora/assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('tanakoora/assets/css/responsive.css')}}">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{asset('tanakoora/assets/css/rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('tanakoora/assets/images/favicon.png')}}">
    <!-- Title -->

    <title>@yield('title')</title>
</head>

<body>
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="content">
        <div class="box"></div>
    </div>
</div>
<!-- End Preloader Area -->
@php
$sting=\App\Models\Stting::all();
@endphp
<!-- Start Header Area -->
<header class="header-area">
    <!-- Start Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <ul class="header-left-content">
                        <li>
                            به فروشگاه موبی تانا آمدید!
                        </li>
                        <li>
                            پشتیبانی؟ تماس بگیرید:
                            <a href="tel:09144422441">
                                <span></span>
                            </a>
                        </li>
                        <li>
                            <a href="store-location.html">
                                موقعیت فروشگاه
                            </a>
                        </li>
                        <li>
                            <a href="{{route('VendorBecome')}}">
                                فروشنده شوید!
                            </a>
                        </li>
                        <li>
                            <a href="order-tracking.html">
                                رهگیری سفارش
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <div class="header-right-content">
                        <ul>
                            <li>
                                @auth
                                <a href="{{route('dashboard')}}">
                                    <i class="ri-account-pin-circle-line"></i>
                                    حساب کاربری
                                </a>
                                @else
                                    <a href="{{route('login')}}"><span class="table m1-0">Login</span></a>
                                <span>|||</span>
                                    <a href="{{route('register')}}"><span class="table m1-0">Register</span></a>
                                @endauth

                            </li>


                            <li>
                                <div class="navbar-option-item navbar-option-language dropdown language-option">
                                    <button class="dropdown-toggle" type="button" id="language2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-global-line"></i>
                                        <span class="lang-name">انگلیسی</span>
                                    </button>

                                    <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language2">
                                        <a class="dropdown-item" href="#">
                                            <img src="assets/images/language/english.png" alt="Image">
                                            انگلیسی
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <img src="assets/images/language/deutsch.png" alt="Image">
                                            Deutsch
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <img src="assets/images/language/china.png" alt="Image">
                                            简体中文
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <img src="assets/images/language/arbic.png" alt="Image">
                                            العربيّة
                                        </a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Top Header -->

    <!-- Start Middle Header -->
    <div class="middle-header bg-e4e9ed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo.png" alt="Image">
                        </a>
                    </div>
                </div>

                <div class="col-lg-7 col-md-8">
                    <form class="search-box" ACTION="{{route('product_search')}}" method="post">
                        @csrf
                        <input onfocus="search_result_show()" onblur="search_result_hide()" id="search"  name="search" placeholder="جستجو محصولات..." class="form-control">
                        <div style="height: 50px"   id="searchProducts">

                        </div>
                    </form>
                </div>

                <div class="col-lg-2 col-md-4">
                    <ul class="wish-cart">
                        <li>
                            <a href="wishlist.html">
										<span class="wish-icon">
											<i class="ri-heart-line"></i>
											<span class="count">0</span>
										</span>
                            </a>
                        </li>
@inject('basket','App\Support\Basket\Basket')
                        <li class="cart-btn">
									<span class="cart" data-bs-toggle="modal" data-bs-target="#exampleModal-cart">
										<span class="wish-icon">
											<i class="ri-shopping-cart-line"></i>


											<span class="count">{{$basket->itemCount()}}</span>

										</span>
									</span>

                            <span class="amount"> تومان</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Middle Header -->

    <!-- Start Navbar Area -->
    <div class="navbar-area style-three">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="navbar-category">
                        <button type="button" id="categoryButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-menu-line"></i>
                        </button>

                        @php
                        $categories=\App\Models\Category::orderBy('name','ASC')->limit(6)->get();

                        @endphp
                        <div class="navbar-category-dropdown dropdown-menu" aria-labelledby="categoryButton">
                            <ul>
                                @foreach($categories as $category)
                                    <li>
                                    <a>
                                        <img style="width: 10px;height: 30px" src="{{(!empty($category->image)) ? url('upload/backend/image/'.$category->image): url('upload/backend/image/i.png')}}">
                                        {{$category->name}}
                                    </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('tanakoora/assets/images/logo.png')}}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="navbar-category">
                        <button type="button" id="categoryButton-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-menu-line"></i>
                            دسته بندی ها
                            <i class="arrow-down ri-arrow-down-s-line"></i>
                        </button>

                        <div class="navbar-category-dropdown dropdown-menu" aria-labelledby="categoryButton">
                            <ul>
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{route('ProductByCategory',$category->id)}}">
                                        <img src="{{asset($category->image)}}" alt="Image">
                                        {{$category->name}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item float-end">
                                <a href="#" class="nav-link active">
                                    خانه
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                            </li>
                            <li class="nav-item mega-menu">
                                <a href="#" class="nav-link">
                                    فروشگاه
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="sub-menu-title">فروشگاه</h6>

                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="products.html">محصولات</a>
                                                    </li>
                                                    <li>
                                                        <a href="best-sellers.html">محصولات پرفروش</a>
                                                    </li>
                                                    <li>
                                                        <a href="featured-products.html">محصولات ویژه</a>
                                                    </li>

                                                    <li>
                                                        <a href="new-arrivals.html">محصولات جدید</a>
                                                    </li>
                                                    <li>
                                                        <a href="categories.html">دسته بندی ها</a>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="sub-menu-title">صفحات</h6>

                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="offer-products.html">تخفیف محصولات</a>
                                                    </li>
                                                    <li>
                                                        <a href="shopping-cart.html">سبد خرید</a>

                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">فهرست علاقه مندی</a>
                                                    </li>
                                                    <li>
                                                        <a href="success-order.html">پرداخت موفق</a>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="sub-menu-title">صفحه مدیریت</h6>

                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="dashboard.html">داشبورد</a>
                                                    </li>
                                                    <li>
                                                        <a href="edit-profile.html">ویرایش پروفایل</a>
                                                    </li>
                                                    <li>
                                                        <a href="edit-address.html">ویرایش موقعیت</a>
                                                    </li>
                                                    <li>
                                                        <a href="address.html">افزودن موقعیت</a>
                                                    </li>
                                                    <li>
                                                        <a href="password.html">بازیابی گذرواژه</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <a href="products.html" class="menu-img">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    صفحات
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link">درباره ما</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="customer-comments.html" class="nav-link">بازخورد مشتریان</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">سوالات متداول</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="store-location.html" class="nav-link">موقعیت فروشگاه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">حریم خصوصی</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-conditions.html" class="nav-link">شرایط و ضوابط</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">به زودی</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('blogs')}}" class="nav-link">
                                    وبلاگ
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">وبلاگ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-left-sidebar.html" class="nav-link">وبلاگ سایدبار</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">جزئیات وبلاگ</a>
                                    </li>
                                </ul>
                            </li>

                            @foreach($categories as $category)
                            @php
                            $subCategories=\App\Models\SubCategory::where('category_id',$category->id)->orderBy('name','ASC')->get();
                            @endphp

                            <li class="nav-item">
                                <a href="{{route('ProductByCategory',$category->id)}}" class="nav-link">
                                    {{$category->name}}
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    @foreach($subCategories as $SC)
                                        <li class="nav-item">
                                            <a href="{{route('ProductBySubCategory',$SC->id)}}" class="nav-link">{{$SC->name}}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                            @endforeach
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">تماس با ما</a>
                            </li>
                        </ul>


                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>

<!-- Start Cart Shit Area -->

<div class="modal fade cart-shit" id="exampleModal-cart" tabindex="-2" aria-hidden="true">
    <div class="cart-shit-wrap">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close-btn" data-bs-dismiss="modal">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <ul class="cart-list">
                        <li>
                            <i class="ri-delete-bin-line"></i>
                            <img src="assets/images/products/product-18.jpg" alt="Image">
                            <a href="shopping-cart.html">
                                گوشت تازه
                            </a>
                            <span>1100 تومان</span>
                        </li>

                        <li>
                            <i class="ri-delete-bin-line"></i>
                            <img src="assets/images/products/product-6.jpg" alt="Image">
                            <a href="shopping-cart.html">
                                خرچنگ تازه
                            </a>
                            <span>1100 تومان</span>
                        </li>

                        <li>
                            <i class="ri-delete-bin-line"></i>
                            <img src="assets/images/products/product-40.jpg" alt="Image">
                            <a href="shopping-cart.html">
                                سبد نان مخلوط
                            </a>
                            <span>1100 تومان</span>
                        </li>

                        <li>
                            <i class="ri-delete-bin-line"></i>
                            <img src="assets/images/products/product-42.jpg" alt="Image">
                            <a href="shopping-cart.html">
                                سبد کامل سبزیجات
                            </a>
                            <span>1100 تومان</span>
                        </li>
                    </ul>

                    <ul class="payable">
                        <li>
                            هزینه پرداخت
                        </li>
                        <li class="total">
                            <span>6100 تومان</span>
                        </li>
                    </ul>

                    <ul class="cart-check-btn">
                        <li>
                            <a href="shopping-cart.html" class="default-btn radius-btn">
                                سبد خرید
                            </a>
                        </li>
                        <li class="checkout">
                            <a href="checkout.html" class="default-btn radius-btn">
                                بررسی محصول
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart Shit Area -->
<script>
    function search_result_show(){
        $("#searchProducts").slideDown();
    }
    function search_result_hide(){
        $("#searchProducts").slideUp();
    }
</script>
