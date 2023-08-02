<section class="category-area">
    <div class="container">
        @php


            $categories=\App\Models\Category::orderBy('name','ASC')->limit(6)->get();
        @endphp
        <div class="row justify-content-center">
            @foreach($categories as $category)
                @php

                    $products=\App\Models\Pro::where('category_id',$category->id)->get();
                @endphp
            <div class="col-lg-2 col-sm-6">
                <a href="products.html">
                    <div class="single-category style-three">
                        <img style="height: 100px;width: 100px" src="{{URL::asset('/upload/backend/image/'.$category->image)}}" alt="Image">
                        <h3>
                            {{$category->name}}
                        </h3>
                        <span>{{count($products)}} مورد</span>
                    </div>
                </a>
            </div>
                @endforeach
        </div>
    </div>
</section>

