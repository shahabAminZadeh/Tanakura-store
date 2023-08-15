<section class="subscribe-area bg-color-e3e8ee">
    <div class="container">
        <div class="subscribe-wrap ptb-54">
            <div class="subscribe-bg">
                <div class="subscribe-content">
                    <h3>عضویت در خبرنامه ما</h3>
                    <p>برای اطلاع از آخرین بروزرسانی ها در خبرنامه مشترک شوید</p>
                </div>

                <form class="newsletter-form style-three" data-toggle="validator">
                    <input type="email" class="form-control" placeholder="ایمیل خود را وارد کنید" name="EMAIL" required autocomplete="off">

                    <button class="submit-btn radius-btn" type="submit">
                        مشترک شدن
                    </button>

                    <div id="validator-newsletter" class="form-result"></div>
                </form>

                <p>ما هرگز آدرس ایمیل شما را با دیگران به اشتراک نمی گذاریم</p>
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe  Area -->
@php

$sting=\App\Models\Stting::find(1);


@endphp
<!-- Start Footer  Area -->
<div class="footer-area bg-color-e3e8ee pt-54 pb-30">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="single-footer-widget">
                    <img src="{{URL::asset('upload/sting/image'.$sting->logo)}}" class="logo" alt="Image">

                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                    <span>ارتباط با ما:</span>

                    <ul class="social-link">
                        <li>
                            <a href="https://www.{{$sting->facebook}}.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.{{$sting->youtube}}.com/" target="_blank">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.{{$sting->telegram}}.com/" target="_blank">
                                <i class="ri-telegram-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.{{$sting->instagram}}.com/" target="_blank">
                                <i class="ri-instagram-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="single-footer-widget ml-30">
                    <h3>اطلاعات</h3>

                    <ul class="import-link">
                        <li>
                            <a href="about.html">درباره ما</a>
                        </li>
                        <li>
                            <a href="contact.html">تماس با ما</a>
                        </li>
                        <li>
                            <a href="terms-conditions.html">شرایط و ضوابط</a>
                        </li>
                        <li>
                            <a href="store-location.html">برندها</a>
                        </li>
                        <li>
                            <a href="privacy-policy.html">موارد مهم</a>
                        </li>
                        <li>
                            <a href="privacy-policy.html">حریم خصوصی</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="single-footer-widget ml-30">
                    <h3>پشتیبانی</h3>

                    <ul class="import-link">
                        <li>
                            <a href="store-location.html">موقعیت فروشگاه</a>
                        </li>
                        <li>
                            <a href="order-tracking.html">رهگیری سفارش</a>
                        </li>
                        <li>
                            <a href="products.html">جستجو محصول</a>
                        </li>
                        <li>
                            <a href="faq.html">سوالات متداول</a>
                        </li>
                        <li>
                            <a href="contact.html">پیشتیبانی آنلاین</a>
                        </li>
                        <li>
                            <a href="terms-conditions.html">شرایط و ضوابط</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="single-footer-widget">
                    <h3>اطلاعات تماس</h3>

                    <ul class="info-list">
                        <li>
                            <i class="ri-map-pin-line"></i>
                            {{$sting->address}}
                        </li>
                        <li>
                            <i class="ri-phone-line"></i>
                            <a href="tel:+973-635-8147">{{$sting->phone_one}}</a>
                        </li>
                        <li>
                            <i class="ri-mail-send-line"></i>
                            <a href="mailto: contact@groe.com"> contact@groe.com</a>
                        </li>
                        <li class="m-0 p-0">
                            <span>ساعت کاری:</span>
                        </li>
                        <li>
                            <i class="ri-time-line"></i>
                            شنبه - جمعه 7:00 صبح تا 8:00 شب
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="single-footer-widget">
                    <h3>دانلود نسخه موبایل</h3>
                    <p>%30 تخفیف در اولین خرید شما</p>

                    <ul class="app-btn">
                        <li>
                            <a href="https://www.apple.com/store" target="_blank">
                                <img src="src="{{asset('tanakoora/assets/images/app-store.png')}}" alt="Image">
                            </a>
                        </li>
                        <li>
                            <a href="https://play.google.com/store/apps" target="_blank">
                                <img src="src="{{asset('tanakoora/assets/images/google-play.png')}}" alt="Image">
                            </a>
                        </li>
                    </ul>

                    <span class="payment">پرداخت امن</span>

                    <ul class="payment-option">
                        <li>
                            <img src="src="{{asset('tanakoora/assets/images/payment/payment-1.png')}}" alt="Image">
                        </li>
                        <li>
                            <img src="src="{{asset('tanakoora/assets/images/payment/payment-2.png')}}" alt="Image">
                        </li>
                        <li>
                            <img src="src="{{asset('tanakoora/assets/images/payment/payment-3.png')}}" alt="Image">
                        </li>
                        <li>
                            <img src="src="{{asset('tanakoora/assets/images/payment/payment-4.png')}}" alt="Image">
                        </li>
                        <li>
                            <img src="src="{{asset('tanakoora/assets/images/payment/payment-5.png')}}" alt="Image">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer  Area -->

<!-- Start Copy Right Area -->
<div class="copy-right-area">
    <div class="container">
        <p>
            © گرو. تمام حقوق قالب محفوظ است. طراحی و توسعه توسط <a href="https://www.rtl-theme.com/author/barat" target="_blank">Barat Hadian</a>
        </p>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Newsletter Modal -->
<div class="popup-overlay popup-hide">
    <div class="container">
        <div class="align-middle">
            <div class="popup-body">
                <div class="popup-close">
                    <i class="ri-close-fill"></i>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="modal-newsletter">
                            <h3>عضویت در خبرنامه ما</h3>
                            <p>برای دریافت به‌روزرسانی‌های پیشنهادات ویژه، در خبرنامه فروشگاه گرو مشترک شوید.</p>

                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="form-control" placeholder="ایمیل خود را وارد کنید" name="EMAIL" required autocomplete="off">

                                <button class="default-btn radius-btn" type="submit">
                                    مشترک شدن
                                </button>
                                <div id="validator-newsletter-2" class="form-result"></div>

                                <div class="agree-label">
                                    <input type="checkbox" id="chb1">
                                    <label for="chb1">
                                        این پاپ آپ را دوباره نشان ندهید
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="newsletter-img">
                            <img src="{{asset('tanakoora/assets/images/newsletter-img.jpg')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Newsletter Modal -->

<!-- Start Product View One Area -->
<div class="modal fade product-details-area" id="exampleModal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal">
                        <span aria-hidden="true">
							<i class="ri-close-line"></i>
						</span>
            </button>

            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-image">
                        <img id="pimage"  alt="Image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="product-details-desc">
                        <h3><a id="pname"></a> </h3>

                        <div class="price">
                            <span class="new-price" id="pprice">1100 تومان <del id="oldprice">2100 تومان</del></span>
                        </div>

                        <div class="product-review">
                            <div  class="rating">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <a href="#" class="rating-count">(15 نظر مشتری)</a>
                        </div>

                        <p id="body">لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم ساختار متن را در بر می گیرد. استاندارد صنعت بوده است.</p>

                        <div class="quantities-wrap">
                            <span class="quantities">تعداد:</span>

                            <div class="product-quantity">
                                <div class="input-counter">
											<span class="minus-btn">
												<i class="ri-subtract-line"></i>
											</span>

                                    <input name="qty" id="qty" type="text" value="1">

                                    <span class="plus-btn">
												<i class="ri-add-line"></i>
											</span>
                                </div>
                            </div>

                            <a href="shopping-cart.html" class="default-btn radius-btn">
                                <button type="submit" onclick="" class="ri-shopping-cart-line"></button>
                                افزودن به سبد
                            </a>
                        </div>

                        <div id="ColorArea" style="margin: 20px">
                            <select id="color" class="form-select">

                            </select>
                        </div>
                        <div id="SizeArea" style="margin: 20px">
                            <select id="size" class="form-select">

                            </select>
                        </div>
                        <a href="wishlist.html" class="default-btn radius-btn wishlist-btn">
                            <i class="ri-heart-line"></i>
                            علاقه مندی
                        </a>

                        <ul class="sku">
                            <li>
                                شناسه:
                                <span  id="pcode"></span>
                            </li>
                            <li>
                                دسترسی:
                                <span id="tag"></span>
                            </li>
                            <li >
                                برند:
                                <span id="brand_id"></span>
                            </li>
                            <li >
                                دسته بندی ها:
                                <span id="category_id"></span>
                            </li>
                        </ul>



                        <ul class="social-wrap">
                            <li>
                                <span>اشتراک گذاری:</span>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product View One Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-fill"></i>
    <i class="ri-arrow-up-s-fill"></i>
</div>
<!-- End Go Top Area -->

<!-- Jquery Min JS -->
<script src="{{asset('tanakoora/assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap Bundle Min JS -->
<script src="{{asset('tanakoora/assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Meanmenu Min JS -->
<script src="{{asset('tanakoora/assets/js/meanmenu.min.js')}}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{asset('tanakoora/assets/js/owl.carousel.min.js')}}"></script>
<!-- Wow Min JS -->
<script src="{{asset('tanakoora/assets/js/wow.min.js')}}"></script>
<!-- Range Slider Min JS -->
<script src="{{asset('tanakoora/assets/js/range-slider.min.js')}}"></script>
<!-- Form Validator Min JS -->
<script src="{{asset('tanakoora/assets/js/form-validator.min.js')}}"></script>
<!-- Contact JS -->
<script src="{{asset('tanakoora/assets/js/contact-form-script.js')}}"></script>
<!-- Ajaxchimp Min JS -->
<script src="{{asset('tanakoora/assets/js/ajaxchimp.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('tanakoora/assets/js/custom.js')}}"></script>
<script src="{{asset('tanakoora/assets/js/search.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{\Illuminate\Support\Facades\Session::get('alert-type','info')}}"
    switch (type) {
        case 'info':
            toastr.info("{{\Illuminate\Support\Facades\Session::get('message')}}");
            break;

        case 'success':
            toastr.success("{{\Illuminate\Support\Facades\Session::get('message')}}");
            break;

        case 'warning':
            toastr.warning("{{\Illuminate\Support\Facades\Session::get('message')}}");
            break;

        case 'error':
            toastr.error("{{\Illuminate\Support\Facades\Session::get('message')}}");
            break;
    }
    @endif



</script>
<script type="text/javascript">
    const site_url="http://127.0.0.1:8000/";
    $("body").on("keyup","#search",function (){
        let text = $("#search").val();

        if (text.length>0)
        {
            $.ajax({
                data:{search:text},
                url:site_url + "search/search_Products",
                method:'post',
                beforeSend: function(request){
                    return request.setRequestHeader('X-CSRF-TOKEN',("meta[name='csrf-token']"))
                },
                success:function (result){
                    $("#searchProducts").html(result);
                }
            });

        }
        if (text.length<1) $("#searchProducts").html("")
    });

</script>

<script type="text/javascript">
    $(document).ready(
        function () {
            $('#photo').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#ShowImageAdmin').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        }
    )    ;
</script>
<script type="text/javascript">

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })
    function productView(id){
        $.ajax({
            type:'GET',
            url:'/product/view/modal/'+id,
            dataType:'json',
            success:function (data)
            {
               $('#pname').text(data.product.name);
               $('#pprice').text(data.product.selling_Price);
               $('#pcode').text(data.product.code);
               $('#pcategory').text(data.product.category.name);
               $('#pbrand').text(data.product.brand.name);
               $('#pimage').attr('src','/'+data.product.thambnail);


               if(data.product.price == null){
                   $('#pprice').text('');
                   $('#oldprice').text('');
                   $('#pprice').text(data.product.selling_Price	)
               }else {
                   $('#pprice').text(data.product.selling_Price	);
                   $('#oldprice').text(data.product.selling_Price);
               }
               $('select[name="size"]').empty();
               $.each(data.size,function (key,value){
                   $('select[name="size"]').append('<option value="'+value+'">'+value+'</option>')
                   if(data.size==""){
                       $('#SizeArea').hide();

                   }else {
                       $('#SizeArea').show();
                   }
               });
                $('select[name="color"]').empty();
                $.each(data.color,function (key,value){
                    $('select[name="color"]').append('<option value="'+value+'">'+value+'</option>')
                    if(data.color==""){
                        $('#colorArea').hide();

                    }else {
                        $('#colorArea').show();
                    }
                });
            }
        })
    }

</script>
</body>
</html>
