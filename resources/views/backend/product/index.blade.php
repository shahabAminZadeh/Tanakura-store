@extends('admin.master.master')
@section('main_content')

    <div class="card-body table-responsive p-0">
        <h4 style="margin: 15px;color: #4d4d4c">همه محصولات</h4>
        <table class="table table-hover">
            <tbody><tr>
                <th></th>
                <th> آیدی محصولات </th>
                <th>  موضوع محصولات </th>
                <th> قیمت محصولات </th>
                <th>  QTY </th>
                <th>  توضیحات محصولات </th>
                <th>  وضعیت محصولات </th>
                <th> عکس محصولات </th>
                <th> اقدامات </th>
            </tr>
            @foreach($products as $key=>$product)
                <tr>
                    <td></td>
                    <td>{{$key+1}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->status}}</td>
                    <td><img src="{{(!empty($product->thambnail)) ? url('upload/backend/product/'.$product->image): url('upload/backend/image/b.png')}}" style="height: 100px;" ></td>
                    <td class="d-flex">
                        <a href="" class="btn btn-sm btn-info"> ویرایش </a>
                        <a style="background-color: mediumvioletred;margin-right: 10px" id="delete" href="" class="btn btn-sm btn-info"> حذف </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td> آیدی محصولات </td>
                <td>  موضوع محصولات </td>
                <td> قیمت محصولات </td>
                <td>  QTY </td>
                <td>  توضیحات محصولات </td>
                <td>  وضعیت محصولات </td>
                <td> عکس محصولات </td>
                <td> اقدامات </td>
            </tr>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('admin/dist/js/code.js')}}"></script>

@endsection
