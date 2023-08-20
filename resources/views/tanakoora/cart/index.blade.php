@extends('tanakoora.master.master')
@section('main_content')
    <title>Cart</title>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li>
                        <a href="index.html">
                            خانه
                        </a>
                    </li>

                    <li class="active">سبد خرید</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="cart-area ptb-54">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if($items->isEmpty())
                        <h5> <strong>سبد خرید خالی است </strong>  </h5>
                    @else
                    <form class="cart-controller">
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">حذف</th>
                                    <th scope="col">محصول</th>
                                    <th scope="col">نام محصول</th>
                                    <th scope="col">قیمت واحد</th>
                                    <th scope="col">تعداد</th>
                                    <th scope="col">مجموع</th>
                                </tr>
                                </thead>

                                <tbody>



                                    @foreach($items  as $item)
                                    <tr>
                                        <td class="trash">
                                            <a href="shopping-cart.html" class="remove">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="{{URL::asset('/upload/backend/product/'.$product->thambnail)}}" alt="Image">
                                            </a>
                                        </td>

                                        <td class="product-name">
                                            <a href="product-details.html">{{$item->name}}</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="unit-amount">{{$item->selling_Price}} تومان</span>
                                        </td>

                                        <td>

                                         <form action="{{route('updateBasket',$item->id)}}" method="post" class="form-inline">
                                             @csrf
                                             @method('put')
                                             <select name="qty" id="qty" class="form-control input-sm mr-sm-2">
                                                 @for($i = 0 ;$i <= $item->qty ; $i++)
                                                 <option  name="qty" id="qty" {{$item->qty == $i ? 'selected':''}} value="{{$i}}">{{$i}}</option>
                                                 @endfor
                                             </select>

                                             <button style="margin: 7px;" type="submit" class="btn btn-sm btn-info">بروزرسانی</button>
                                         </form>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">1100 تومان</span>
                                        </td>
                                    </tr>
                                    @endforeach




                                </tbody>
                            </table>
                        </div>
                    </form>
                    @endif
                    <div class="coupon-cart">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="کد تخفیف">
                                    <button class="default-btn radius-btn">
                                        اعمال کد
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @inject('cost','App\Support\Cost\Contracts\CostInterface')
                <div class="col-lg-4">
                    <div class="cart-totals">
                        <h3 class="cart-checkout-title">مجموع سبد خرید</h3>

                        <ul>
                            @foreach($cost->getSummary() as $description=>$selling_Price)

                                <li>{{$description}} <span>{{number_format($selling_Price)}} تومان</span></li>

                            @endforeach
                            <li><b>مبلغ پرداخت</b> <span><b>{{number_format($cost->getTotalCosts())}} تومان</b></span></li>
                        </ul>

                        <a href="{{route('checkOut.basket.form')}}" class="default-btn radius-btn">
                            ادامه و پرداخت
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
