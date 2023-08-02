@extends('admin.master.master')
@section('main_content')

    <div class="card-body table-responsive p-0">
        <h5 style="margin-right: 90px;color: #4d4d4c">فروشنده های غیر فعال </h5>
        <table class="table table-hover">
            <tbody><tr>
                <th>شماره فروشگاه</th>
                <th>نام فروشگاه</th>
                <th>سال الحاق</th>
                <th>ایمیل فروشنده</th>
                <th>وضعیت</th>
                <th>عملیات</th>

            </tr>
            @foreach($inActiveVendors as $key=>$inActiveVendor)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$inActiveVendor->name}}</td>
                    <td>{{$inActiveVendor->join_vendor}}</td>
                    <td>{{$inActiveVendor->email}}</td>
                    <td><span class="btn btn-secondary">{{$inActiveVendor->status}}</span></td>
                    <td><a class="btn badge-info" href="{{route('AdminVendorINActiveDetails',['id'=>$inActiveVendor->id])}}">تغییر وضعیت</a></td>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td>شماره مدیر</td>
                <td>نام فروشگاه</td>
                <td>سال الحاق</td>
                <td>ایمیل فروشنده</td>
                <td>وضعیت</td>
                <td>عملیات</td>
            </tr>
            </tbody>
        </table>
    </div>




@endsection
