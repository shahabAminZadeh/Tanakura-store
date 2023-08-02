
@extends('admin.master.master')
@section('main_content')

    <div class="card-body table-responsive p-0">
        <h4 style="margin: 15px;color: #4d4d4c">همه زیر دسته بندی ها</h4>
        <table class="table table-hover">
            <tbody><tr>
                <th></th>
                <th> آیدی زیر دسته بندی </th>
                <th>  موضوع دسته بندی </th>
                <th>  موضوع زیر دسته بندی </th>
                <th> اقدامات </th>
            </tr>
            @foreach($sub_categories as $key=>$sub_category)
                <tr>
                    <td></td>
                    <td>{{$key+1}}</td>
                    <td>{{$sub_category['Category']['name']}}</td>
                    <td>{{$sub_category->name}}</td>
                    <td class="d-flex">
                        <a href="{{route('AdminSubCategoryEdit',$sub_category->id)}}" style="margin-left: 10px"  class="btn btn-sm btn-info"> ویرایش </a>
                        <a style="background-color: mediumvioletred;margin-right: 10px" id="delete" href="{{route('AdminSubCategoryDestroy',['sub_category'=>$sub_category->id])}}" class="btn btn-sm btn-info"> حذف </a>
                    </td>
            @endforeach
            <tr>
                <td></td>
                <td> آیدی دسته بندی </td>
                <td>  موضوع دسته بندی </td>
                <td> موضوع زیر دسته بندی </td>
                <td> اقدامات </td>
            </tr>
            </tbody>
        </table>
    </div>




@endsection
