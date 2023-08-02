@extends('admin.master.master')
@section('main_content')

    <div class="card-body table-responsive p-0">
        <h4 style="margin-right: 50px;margin-top: 20px;margin-bottom: 20px;color: #4d4d4c;">همه برند ها</h4>
        <table class="table table-hover">
            <tbody><tr>
                <th></th>
                <th> آیدی برند </th>
                <th>  موضوع برند </th>
                <th> عکس برند </th>
                <th> اقدامات <a  style="margin-right: 60px;text-align: left" class="btn btn-success" href="{{route('AdminBrandCreate')}}">افزودن برند ها</a>    </th>

            </tr>
            @foreach($brands as $key=>$brand)
                <tr>
                    <td></td>
                    <td>{{$key+1}}</td>
                    <td>{{$brand->name}}</td>
                    <td><img src="{{(!empty($brand->image)) ? url('upload/backend/image/'.$brand->image): url('upload/backend/image/b.png')}}" style="height: 100px;width: 100px" ></td>
                    <td class="d-flex">
                        <a href="{{route('AdminBrandEdit',['brand'=>$brand->id])}}" class="btn btn-sm btn-info"> ویرایش </a>
                        <a style="background-color: mediumvioletred;margin-right: 10px" id="delete" href="{{route('AdminBrandDelete',['brand'=>$brand->id])}}" class="btn btn-sm btn-info"> حذف </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td> آیدی برند </td>
                <td>  موضوع برند </td>
                <td> عکس برند </td>
                <td> اقدامات </td>
            </tr>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('admin/dist/js/code.js')}}"></script>

@endsection
