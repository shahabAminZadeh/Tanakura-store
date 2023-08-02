


@extends('tanakoora.master.master')
@section('main_content')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li>
                        <a>
                            خانه
                        </a>
                    </li>

                    <li class="active">فهرست علاقه مندی</li>
                </ul>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="p-4 mb-3 bg-green-400 rounded">
            <p class="text-green-800">{{ $message }}</p>
        </div>
    @endif
    <div class="cart-area ptb-54">
    <div class="container">
        <form class="cart-controller wishlist-wrap mb-0">
            <div class="cart-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">حذف</th>
                        <th scope="col">محصول</th>
                        <th scope="col"></th>
                        <th scope="col">قیمت واحد</th>
                        <th scope="col">افزودن سبد خرید</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="trash">
                            <a href="{{route('favorite.remove',['id'=>$product->id])}}" class="remove">
                                <i class="ri-delete-bin-line"></i>
                            </a>
                        </td>
                        <td class="product-thumbnail">
                            <a href="product-details.html">
                                <img src="{{URL::asset('/upload/backend/product/'.$product->thambnail)}}" alt="Image">
                            </a>
                        </td>

                        <td class="product-name">
                            <a href="product-details.html">{{$product->name}}</a>
                        </td>


                        <td class="product-subtotal">
                            <span class="subtotal-amount">{{$product->selling_Price}} تومان</span>
                        </td>

                        <td>
                            <a href="shopping-cart.html" class="default-btn radius-btn">
                                <i class="ri-shopping-cart-line"></i>
                                افزودن به سبد
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
@endsection
