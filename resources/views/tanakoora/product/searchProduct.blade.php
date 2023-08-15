@if($productsSearch -> isEmpty())
    <h5 class="text-center text-danger">
        محصول یافت نشد
    </h5>
@else

    <div class="content mt-5" >
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @foreach($productsSearch as $item)

                        <a href="">
                            <div class="list border-bottom">
                                <img src="{{asset($item->thambnail)}} "style="width:40px;height: 40px; ">
                                <div class="d-flex flex-column ml-5">
                                    <span>{{$item->name}}</span><small>{{$item->selling_Price}}</small>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endif
<script src="{{asset('tanakoora/assets/js/search.js')}}"></script>
