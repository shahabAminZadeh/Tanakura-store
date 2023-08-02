<footer class="main-footer">
    <strong>CopyLeft &copy; 2018 <a href="http://github.com/hesammousavi/">حسام موسوی</a>.</strong>
</footer>
<!-- Control Sidebar -->

<!-- /.control-sidebar -->
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{asset('admin/dist/js/code.js')}}"></script>

<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/https://code.jquery.com/ui/1.12.1/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/plugins/bootstrap/js/jquery.validate.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('admin/https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>
<script src="{{asset('admin/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('adminT/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin/https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js')}}"></script>
<script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('admin/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<script src="{{asset('/js/app.js')}}"></script>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{asset('admin/dist/js/code.js')}}"></script>
<script type="text/javascript">
    $(document).ready(
        function ()
        {
            $('#photo').change(function (e)
            {
                var reader = new FileReader();
                reader.onload=function (e)
                {
                    $('#ShowImageAdmin').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        }
    )    ;
</script>
<script type="text/javascript">
    $(document).ready(
        function ()
        {
            $('#image').change(function (e)
            {
                var reader = new FileReader();
                reader.onload=function (e)
                {
                    $('#ShowImageAdmin').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        }
    )    ;

</script>
<script type="text/javascript">
                $(document).ready(function (){
                    $('#myForm').validate({
                        rules:{
                            name:{
                                required:true,
                            },
                        },
                        message :{
                            name:{
                                required:'لطفا نام برند رو وارد کنید',
                            },
                        },
                        errorElement: 'span',
                        errorPlacement:function (error,element)
                        {
                            error.addClass('invalid-feedback');
                            element.closest('.form-group').append(error);
                        },
                        highlight:function (element,errorClass,validClass)
                        {
                            $(element).addClass('is-invalid');
                        },
                        unhighlight:function (element,errorClass,validClass)
                        {
                            $(element).removeClass('is-invalid');
                        },
                    });
                })
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script>
    $(function () {
        $('input')
            .on('change', function (event) {
                var $element = $(event.target);
                var $container = $element.closest('.example');

                if (!$element.data('tagsinput')) return;

                var val = $element.val();
                if (val === null) val = 'null';
                var items = $element.tagsinput('items');

                $('code', $('pre.val', $container)).html(
                    $.isArray(val)
                        ? JSON.stringify(val)
                        : '"' + val.replace('"', '\\"') + '"'
                );
                $('code', $('pre.items', $container)).html(
                    JSON.stringify($element.tagsinput('items'))
                );
            })
            .trigger('change');
    });
</script>
</script>


<script type="text/javascript">
    $(document).ready(function (){
        $('select[name="division_id"]').on('change',function ()
        {
            var division_id = $(this).val();
            if (division_id){
                $.ajax({
                    url:"{{url('/district/ajax')}}/"+division_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data){
                        $('select[name="district_id"]').html('');
                        var d =$('select[name="district_id"]').empty();
                        $.each(data,function (key , value){
                                $('select[name="district_id"]').append(
                                    '<option value="'+ value.id + '" > '+value.
                                        name+ '</option>' ) ;
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

</body>
</html>
