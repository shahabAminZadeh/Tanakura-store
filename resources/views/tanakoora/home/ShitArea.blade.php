<div class="modal fade cart-shit" id="exampleModal-cart" tabindex="-2" aria-hidden="true">
    <div class="cart-shit-wrap">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close-btn" data-bs-dismiss="modal">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
                    <ul class="cart-check-btn">
                        <li>
                            <a href="{{route('index.basket')}}" class="default-btn radius-btn">
                                سبد خرید
                            </a>
                        </li>
                        <li class="checkout">
                            <a href="{{route('checkOut.basket.form')}}" class="default-btn radius-btn">
                                بررسی محصول
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
