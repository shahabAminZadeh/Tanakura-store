<div class="modal fade cart-shit" id="exampleModal-cart" tabindex="-1" aria-hidden="true">
    <div class="cart-shit-wrap">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close-btn" data-bs-dismiss="modal">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
                @php $total = 0 @endphp
                @foreach((array) session('cart') as $id => $details)
                    @php $total += $details['selling_Price'] * $details['qty'] @endphp
                @endforeach
                <div class="modal-body">
                    <ul class="cart-list">
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <li>
                                    <i class="ri-delete-bin-line"></i>
                                    <img src="{{ $details['thambnail'] }}" alt="Image">
                                    <a href="shopping-cart.html">
                                        {{ $details['name'] }}
                                    </a>
                                    <span>${{ $details['selling_Price'] }} تومان</span>
                                    <span >{{ $details['qty'] }} تعداد</span>
                                </li>
                            @endforeach
                        @endif

                    </ul>

                    <ul class="payable">
                        <li>
                            هزینه پرداخت
                        </li>
                        <li class="total">
                            <span>$ {{ $total }} تومان</span>
                        </li>
                    </ul>

                    <ul class="cart-check-btn">
                        <li>
                            <a href="{{ route('cart') }}" class="default-btn radius-btn">
                                سبد خرید
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

