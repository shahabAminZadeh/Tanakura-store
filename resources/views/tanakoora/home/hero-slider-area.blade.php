<section class="hero-slider-area style-three ptb-24">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-slider-two owl-carousel owl-theme">

                    @php
                        $sliders=\App\Models\Slider::orderBy('tittle','ASC')->limit(6)->get();
                    @endphp
                    @foreach($sliders as $slider)
                        <div class="slider-item bg-7">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <div class="hero-slider-content style-three">
                                        <span>پیشنهاد ویژه</span>
                                        <h1>{{$slider->tittle}}</h1>
                                        <p>{{$slider->short_tittle}}</p>

                                        <div class="hero-slider-btn">
                                            <a href="products.html" class="default-btn">
                                                <i class="ri-shopping-cart-line"></i>
                                                اکنون بخرید
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach






            <div class="col-lg-4">
                <div class="offer-tools">
                    <span>فروش تابستانی</span>
                    <h3>فقط این هفته</h3>
                    <p>مجموعه ادویه جات </p>

                    <a href="products.html" class="read-more">
                        اکنون بخرید
                    </a>
                </div>

                <div class="offer-tools bg-2">
                    <span>فروش تابستانی</span>
                    <h3>فقط این هفته</h3>
                    <p>تا 60% تخفیف </p>

                    <a href="products.html" class="read-more">
                        اکنون بخرید
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

