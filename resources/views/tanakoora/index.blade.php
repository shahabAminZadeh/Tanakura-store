@extends('tanakoora.master.master')
@section('main_content')
    @php
        $hot_deals=\App\Models\Pro::where('hot_deals',1)->where('discount','!=',NULL)->orderBy('id','DESC')->limit(3)->get();
        $special_deals=\App\Models\Pro::where('special_deals',1)->orderBy('id','DESC')->limit(3)->get();
        $special_offer=\App\Models\Pro::where('special_offer',1)->orderBy('id','DESC')->limit(3)->get();
        $featured=\App\Models\Pro::where('featured',1)->orderBy('id','DESC')->limit(3)->get();
        $vendors=\App\Models\User::where('status','active')->where('role','vendor')->orderBy('id','DESC')->limit(4)->get();

    @endphp
    @section('title')
        صفحه اصلی
    @endsection
<!-- End Header Area -->

<!-- Start Cart Shit Area -->
@include('tanakoora.home.ShitArea')
<!-- End Cart Shit Area -->

<!-- Start Hero Slider Area -->
@include('tanakoora.home.SliderArea')
<!-- End Hero Slider Area -->
<!-- Start Category Area -->
@include('tanakoora.home.category-area')
<!-- End Category Area -->
<div class="gap-30"></div>
<!-- Start Best Selling Products Area -->
@include('tanakoora.home.best-selling-products')
<!-- End Best Selling Products Area -->
<!-- Start Off 50 Area -->
@include('tanakoora.home.off-50-area')
<!-- End Off 50 Area -->
<div class="gap-30"></div>

<!-- Start New Arrivals Area -->
@include('tanakoora.home.arrivals-area')

<!-- End New Arrivals Area -->
<div class="gap-30"></div>
<!-- Start Delas Area -->
@include('tanakoora.home.delas-area')

<!-- End Delas Area -->

<!-- Start Best Premium Quality Area -->

@include('tanakoora.home.best-premium-quality-area',compact('hot_deals','special_deals','special_offer','featured','vendors'))



<!-- End Best Premium Quality Area -->
<div class="gap-30"></div>
<!-- Start Special Area -->
@include('tanakoora.home.special-area style-three')<!-- End Special Area -->

<!-- Start Partner Area -->
@include('tanakoora.home.partner-area')
<!-- End Partner Area -->

<div class="gap-30"></div>

<!-- Start Our Blog Area -->
@include('tanakoora.home.our-blog-area')
<!-- End Our Blog Area -->

<!-- Start Services Area -->
@include('tanakoora.home.services-area')
<!-- End Services Area -->
<!-- End Header Area -->

@endsection
