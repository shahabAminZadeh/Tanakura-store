
@extends('tanakoora.master.master')
@section('main_content')
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
                    <form class="cart-controller">
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">حذف</th>
                                    <th scope="col">تصویر محصول</th>
                                    <th scope="col">محصول</th>

                                    <th scope="col">قیمت واحد</th>
                                    <th scope="col">تعداد</th>
                                    <th scope="col">مجموع</th>
                                </tr>
                                </thead>

                                <tbody>
                                @php $total = 0 @endphp
                                @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)

                                <tr>
                                    <td class="trash">
                                       <button type="button" class="btn trash btn-danger" onclick="BtnDel(this)">حذف</button>
                                    </td>
                                    <td></td>
                                    <td> <a  class="form-control"href="">{{ $details['name'] }}</a></td>

                                    <td ><input class="form-control" type="number" onchange="Calc(this);" value="{{ $details['selling_Price'] }}" name="selling_Price"></td>
                                    <td  ><input class="form-control" min="1" onchange="Calc(this);"  max="10" type="number" value="{{ $details['qty'] }}" name="qty"></td>
                                    <td ><input  class="form-control" type="number"  name="subTotal"></td>

                                </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </form>

                    <div class="coupon-cart">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <form action="{{route('coupon.apply')}}" method="post" class="form-group mb-0">
                                    {{csrf_field()}}
                                    <input type="text" name="coupon_code" id="coupon_code" class="form-control" placeholder="کد تخفیف">
                                    <button type="submit" class="default-btn radius-btn">
                                        اعمال کد
                                    </button>
                                </form>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <a href="{{route('update.cart')}}" class="default-btn update-cart radius-btn">
                                    بروزرسانی سبد
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @php $total = 0 @endphp
                @foreach((array) session('cart') as $id => $details)
                    @php $total += $details['selling_Price'] * $details['qty'] @endphp
                @endforeach
                <div class="col-lg-4">
                    <div class="cart-totals">
                        <h3 class="cart-checkout-title">مجموع سبد خرید</h3>

                        <ul>
                            <li>جمع هزبته ها :<input disabled type="number" class="form-control" id="FTotal" name="FTotal" ></li>
                            <li>  هزینه ارسال :<input  type="number" class="form-control" id="FGST" name="FGST" onchange="GetTotal()"></li>
                            <li>تخفیف :<span>

                                    @if(session()->has('coupon'))
                                        -{{selling_Price(session()->get('coupon')['discount'])}}
                                    @endif

                                </span></li>
                            <li>جمع کل : <input disabled type="number" class="form-control" id="FNet" name="FNet"></li>

                        </ul>

                        <a href="checkout.html" class="default-btn radius-btn">
                            ادامه و پرداخت
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function BtnDel(v)
        {
            $(v).parent().parent().remove();
        }
        function Calc(v)
        {
            var index = $(v).parent().parent().index();
            var qty= document.getElementsByName("qty")[index].value;
            var selling_Price= document.getElementsByName("selling_Price")[index].value;
            var subTotal = qty * selling_Price;
            document.getElementsByName("subTotal")[index].value=subTotal;
            GetTotal();
        }
        function GetTotal()
        {
            var sum=0;
            var amts=document.getElementsByName("subTotal");
            for (let index = 0 ;index<amts.length;index++)
            {
                var subTotal = amts[index].value;
                sum=+(sum) + + (subTotal);
            }
            document.getElementById("FTotal").value=sum;
            var gst =document.getElementById("FGST").value;
            var net = + (sum) + +(gst);
            document.getElementById("FNet").value=net;
        }
    </script>
@endsection

@section('scripts')
    <script type="text/javascript">

        $(".update-cart").change(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    qty: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>

@endsection


