<section class="hero-slider-area style-three ptb-24">
    <div class="container">
        <div class="row">
            @php
                $sliders=\App\Models\Slider::orderBy('tittle','ASC')->limit(6)->get();
            @endphp

            <div class="col-lg-8">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach($sliders as $slider)
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img style="border-radius: 15px;height: 60%" src="{{URL::asset('/upload/backend/slider/'.$slider->image)}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{$slider->tittle}}</h5>
                                    <p>{{$slider->short_tittle}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            @php
            $banners=\App\Models\Banner::orderBy('tittle','ASC')->limit(6)->get();
            @endphp
            @foreach($banners as $banner)
            <div class="col-lg-4">
                <div class="card" style="width:400px;border-radius: 15px">
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
    </div>
</section>
<script>
    $('.carousel').carousel({
        interval: 2000
    })</script>
