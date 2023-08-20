
@extends('tanakoora.master.master')
@section('main_content')

    @section('title')
        صفحه وبلاگ ها
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

                    <li class="active">وبلاگ</li>
                </ul>
            </div>
        </div>
    </div>
<section class="blog-post-area ptb-54">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row justify-content-center">
                    @foreach($blogs as $item)
                    <div class="col-lg-12 col-md-6">
                        <div class="single-blog blog-post">
                            <a href="blog-details.html">
                                <img  src="{{URL::asset('upload/backend/image/'.$item->image)}}" alt="Image">
                            </a>

                            <div class="blog-content">
                                <div class="date">
                                    <span>{{\Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</span>
                                </div>


                                <h3>
                                    <a href="blog-details.html">
                                       {{$item->tittle}}
                                    </a>
                                </h3>

<p> {{$item->short_body}}</p>
                                <a href="{{route('blog_detail',$item->id)}}" class="default-btn radius-btn">
                                    بیشتر بدانید
                                </a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    <div class="col-12">
                        <div class="pagination-area">
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="blog.html" class="page-numbers">2</a>
                            <a href="blog.html" class="page-numbers">3</a>

                            <a href="blog.html" class="next page-numbers">
                                <i class="ri-arrow-left-line"></i>
                            </a>
                        </div>
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
                                <h3>دسته بندی محصولات</h3>
                            </li>
                            @foreach($categories as $item)
                                <li>
                                    <a href="categories.html">
                                        {{$item->category_name}}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
@foreach($blogs as $item)

                        <div class="sidebar-widget recent-post">
                            <ul>
                                <li class="pl-0">
                                    <h3>پست های اخیر</h3>
                                </li>
                                @foreach($lastBlogs as $item)
                                <li>
                                    <a href="blog-details.html">
                                        <strong>{{$item->tittle}}</strong>
                                        <img src="{{URL::asset('upload/backend/image/'.$item->image)}}" alt="Image">
                                    </a>
                                    <span>{{\Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
@endforeach




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
