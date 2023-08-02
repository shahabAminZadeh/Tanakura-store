@extends('admin.master.master')
@section('main_content')

    <div class="card-body table-responsive p-0">
        <h4 style="margin: 15px;color: #4d4d4c">همه دسته بندی ها</h4>
        <table class="table table-hover">
            <tbody><tr>
                <th></th>
                <th> آیدی دسته بندی </th>
                <th>  موضوع دسته بندی </th>
                <th> عکس دسته بندی </th>
                <th> اقدامات </th>
            </tr>
            @foreach($categories as $key=>$category)
                <tr>
                    <td></td>
                    <td>{{$key+1}}</td>
                    <td>{{$category->name}}</td>
                    <td ><img   src="{{(!empty($category->image)) ? url('upload/backend/image/'.$category->image): url('upload/backend/image/i.png')}}" style="height: 100px;width: 100px" ></td>
                    <td class="d-flex">
                 <a href="{{route('AdminCategoryEdit',['category'=>$category->id])}}" style="margin-left: 10px"  class="btn btn-sm btn-info"> ویرایش </a>
                 <a  href="{{route('AdminCategoryDestroy',['category'=>$category->id])}}" style="background-color: mediumvioletred;margin-right: 10px"  id="delete"  class="btn btn-sm btn-info"> حذف </a>


                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td> آیدی دسته بندی </td>
                <td>  موضوع دسته بندی </td>
                <td> عکس دسته بندی </td>
                <td> اقدامات </td>
            </tr>
            </tbody>
        </table>
    </div>




@endsection
