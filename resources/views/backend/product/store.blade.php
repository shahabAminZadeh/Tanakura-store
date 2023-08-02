@extends('admin.master.master')
@section('main_content')
<div class="container">
    <form method="post" action="{{route('ProductStore')}}" enctype="multipart/form-data">
        @csrf
    <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-7" style="border: 1px #e1d9d9 solid;margin: 25px">

                <div class="form-group">
                    <label   style="display: block;margin-top: 20px" for="color">رنگ محصول</label>
                    <input name="color" type="text" class="form-control p-4" data-role="tagsinput"/>
                </div>
                <div class="form-group">
                    <label style="display: block;margin-top: 20px" for="size">سایز محصول</label>
                    <input name="size" type="text" class="form-control p-4" data-role="tagsinput"/>
                </div>
                <div class="form-group">
                    <label style="display: block;margin-top: 20px" for="tags">تگ محصول</label>
                    <input name="tags" type="text" class="form-control p-4" data-role="tagsinput"/>
                </div>
                <div class="form-group">
                    <label for="name">نام محصول</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="نام را وارد کنید">
                </div>
                <div  class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                    توضیحات جزئی
                </span>
                    <input name="short_description" id="short_description" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group">
                    <span  class="input-group-text"> توضیحات کامل </span>
                    <textarea name="long_description" rows="6" class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="form-group">
                    <label for="inputProductTitle">  عکس اصلی </label>
                    <input name="thambnail"  type="file" class="form-control" id="thambnail" onchange="mainThamUrl(this)" >
                    <img src="" id="mainThmb" />
                </div>
                <div class="form-group">
                    <label for="inputProductTitle"> سایر عکسها </label>
                    <input  name="multi_img[]"   type="file" class="form-control" multiple="" id="formFileMultiple" >
                </div>

            </div>
            <div class="col-md-3" style="border: 1px #e1d9d9 solid;margin: 25px">
                <div class="card-body">
                    <div class="row" style="margin-top: 25px">
                        <div class="col-6">
                            <input name="selling_Price" type="text" class="form-control" placeholder="  قیمت محصول ">
                        </div>
                        <div class="col-6">
                            <input name="code" type="text" class="form-control" placeholder="  کد محصول ">
                        </div>
                        <hr style="color: white">
                        <div class="col-6">
                            <input name="qty" type="text" class="form-control" placeholder=" تعداد محصول">
                        </div>
                        <div class="col-6">
                            <input name="discount" type="text" class="form-control" placeholder="تخفیف محصول ">
                        </div>
                    </div>
                </div>
                <div style="margin-top: 15px" class="form-group">
                    <label for="brand_id">برند محصول</label>
                    <select name="brand_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}" selected="selected">{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category_id">دسته محصول</label>
                    <select name="category_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        <option></option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputCollection" >زیر دسته محصول</label>
                    <select name="subcategory_id" class="form-control select2 select2-hidden-accessible" id="inputCollection" >
                        <option></option>
                    </select>
                </div>
                <div class="form-group">
                    <label>فروشگاه</label>
                    <select name="vendor_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        @foreach($activeVendor as $av)
                            <option value="{{$av->id}}">{{$av->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-check form-switch">
                    <input value="1" name="featured" class="form-check-input" type="checkbox" id="featured">
                    <label style="margin-right:25px " class="form-check-label" for="featured"> محصول محبوب </label>
                </div>
                <div class="form-check form-switch">
                    <input value="1" name="hot_deals" class="form-check-input" type="checkbox" id="hot_deals">
                    <label style="margin-right:25px " class="form-check-label" for="hot_deals"> خرید داغ !!  </label>
                </div>
                <div class="form-check form-switch">
                    <input value="1" name="special_deals" class="form-check-input" type="checkbox" id="special_deals">
                    <label style="margin-right:25px " class="form-check-label" for="special_deals"> پیشنهاد ویژه </label>
                </div>
                <div class="form-check form-switch">
                    <input value="1" name="special_offer" class="form-check-input" type="checkbox" id="special_offer">
                    <label  style="margin-right:25px " class="form-check-label" for="special_offer">محصول پرفروش </label>
                </div>
                <button type="submit" class="btn btn-block btn-outline-info">ثبت محصول</button>

            </div>


         </div>
    </form>
</div>
<script type="text/javascript">
    function mainThamUrl(input){
        if (input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload=function (e) {
                $('#mainThmb').attr('src', e.target.result).which(80).height(80);

            };
            reader.readAsDataURL(input.files[0])
        }
    }

</script>

    <script>
        $( document ). ready ( function ( ) {
            $ (' #multi_img '). on ( ' change ' , function ( ) {
                 if ( window. File && window. FileReader && window. FileList && window  . Blob )
                     // check File API supported browser
                 {
                     var data = $(this) [0].files;
                     $.each(data, function (index, file) {
                         // loop though each file
                         if (/(\.|\/ ) ( gif jpe ? g | png ) $ /i.test(file.type)) {
                             var fRead = new FileReader();
                             fRead.onload = (function (file) {
                                 return function (e) {
                                     var img = $('<img/>').addClass('thumb').attr('src', e.target.result).width(100)
                                         .height(80);
                                     $(' #preview_img').append(img);
                                 };
                             })(file);
                             fRead.readAsDataURL(file);
                         }
                     });
                 }else {
                 alert("your browser dosen't support File API")
                 }
            });
            });
    </script>


<script type="text/javascript">
    $(document).ready(function (){
        $('select[name="category_id"]').on('change',function ()
        {
            var category_id = $(this).val();
            if (category_id){
                $.ajax({
                    url:"{{url('/subcategory/ajax')}}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data){
                        $('select[name="subcategory_id"]').html('');
                        var d =$('select[name="subcategory_id"]').empty();
                        $.each(data,function (key , value){
                            $('select[name="subcategory_id"]').append(
                                '<option value="'+ value.id + '" > '+value.
                                  subcategory_name+ '</option>' ) ;
                            }
                        );
                    },
                });
            }else{
                alert('danger');
            }
        });
    });
</script>




@endsection
