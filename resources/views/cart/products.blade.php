@extends('cart.layout')

@section('content')

    <div class="row">
        @foreach($products as $product)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ $product->thambnail }}" alt="">
                    <div class="caption">
                        <h4>{{ $product->name }}</h4>
                        <p>{{ $product->short_description }}</p>

                        <p><strong>Price: </strong> {{ $product->selling_Price }}$</p>
                        <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
