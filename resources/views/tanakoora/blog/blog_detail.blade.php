
@extends('tanakoora.master.master')
@section('main_content')
    @section('title')
        {{$blog->tittle}}
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

                <li class="active">جزئیات وبلاگ</li>
            </ul>
        </div>
    </div>
</div>

<section class="blog-post-area ptb-54">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-content">
                    <div class="blog-details-img">
                        <img  src="{{URL::asset('upload/backend/image/'.$blog->image)}}" alt="Image">

                        <div class="date">
                            <span>{{\Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</span>
                        </div>
                    </div>

                    <div class="blog-top-content">
                        <div class="blog-content">
                            <h3>{{$blog->tittle}}</h3>
                            <h4>{{$blog->short_body}}</h4>
                            <p>{{$blog->long_body}}</p>
                        </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-sidebar">
                    <div class="sidebar-widget search">
                        <form class="search-form">
                            <input class="form-control" name="search" placeholder="جستجو..." type="text">
                            <button class="search-button" type="submit">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>
                    </div>
                    <div class="sidebar-widget categories">
                        <ul>
                            <li>
                                <h3>دسته بندی بلاگ</h3>
                            </li>
                            <li>
                                <a href="categories.html">
                                    <img src="assets/images/icon/fruits.png" alt="Image">
                                    {{$category['category']['category_name']}}
                                </a>
                        </ul>
                    </div>

                    <div class="sidebar-widget recent-post">
                        <ul>
                            <li class="pl-0">
                                <h3>پست های اخیر</h3>
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    راهنمای نهایی و کامل <br> برای خرید میوه
                                    <img src="assets/images/blog/recent-1.jpg" alt="Image">
                                </a>
                                <span>21 دی 1401</span>
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    راهنمای نهایی و کامل <br> برای خرید میوه
                                    <img src="assets/images/blog/recent-2.jpg" alt="Image">
                                </a>
                                <span>21 دی 1401</span>
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    راهنمای نهایی و کامل <br> برای خرید میوه
                                    <img src="assets/images/blog/recent-3.jpg" alt="Image">
                                </a>
                                <span>21 دی 1401</span>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-widget tags">
                        <ul>
                            <li class="p-0">
                                <h3>برچسب ها</h3>
                            </li>
                            <li>
                                <a href="tags.html">مواد غذایی</a>
                            </li>
                            <li>
                                <a href="tags.html">سبزیجات</a>
                            </li>
                            <li>
                                <a href="tags.html">ماهی</a>
                            </li>
                            <li>
                                <a href="tags.html">فروشگاه</a>
                            </li>
                            <li>
                                <a href="tags.html">نان و شیرینی</a>
                            </li>
                            <li>
                                <a href="tags.html">میوه</a>
                            </li>
                            <li>
                                <a href="tags.html">خوراک منجمد</a>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebars-ad mb-0">
                        <a href="products.html">
                            <img src="assets/images/sidebar-ad.jpg" alt="Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
