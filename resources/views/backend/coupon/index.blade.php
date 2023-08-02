@extends('admin.master.master')
@section('main_content')
    <div class="card-body table-responsive p-0">
        <h4 style="margin-right: 50px;margin-top: 20px;margin-bottom: 20px;color: #4d4d4c;">همه کوپون ها</h4>
        <table class="table table-hover">
            <tbody><tr>
                <th></th>
                <th> آیدی برند </th>
                <th>  موضوع برند </th>
                <th> عکس برند </th>
                <th> اقدامات <a   style="margin-right: 60px;text-align: left" class="btn btn-success" href="{{route('ُCouponCreate')}}">افزودن برند ها</a>    </th>

            </tr>
            @foreach($coupons as $key=>$coupon)
                <tr>
                    <td></td>
                    <td>{{$key+1}}</td>
                    <td>{{$coupon->name}}</td>
                    <td>{{$coupon->discount}}</td>
                    <td>{{Carbon\Carbon::parse($coupon->validity)->format('D,d f y')}}</td>
                    <td class="d-flex">
                        <a href="{{route('ُCouponEdit',['coupon'=>$coupon->id])}}" class="btn btn-sm btn-info"> ویرایش </a>
                        <a style="background-color: mediumvioletred;margin-right: 10px" id="delete" href="{{route('ُCouponDestroy',['coupon'=>$coupon->id])}}" class="btn btn-sm btn-info"> حذف </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td> آیدی کوپون </td>
                <td>  موضوع کوپون </td>
                <td>  مقدار کوپون </td>
                <td>  زمان کوپون </td>
                <td> اقدامات </td>
            </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('admin/dist/js/code.js')}}"></script>

@endsection
