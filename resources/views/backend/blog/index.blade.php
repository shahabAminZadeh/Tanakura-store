@extends('admin.master.master')
@section('main_content')
    <div class="card-body table-responsive p-0">
        <h4 style="margin-right: 50px;margin-top: 20px;margin-bottom: 20px;color: #4d4d4c;">همه دسته بندی ها</h4>
        <table class="table table-hover">
            <tbody><tr>
                <th></th>
                <th> آیدی بلاگ </th>
                <th>  موضوع بلاگ </th>
                <th>  عکس بلاگ </th>
                <th>  متن کوتاه بلاگ </th>
                <th>  متن طولانی بلاگ </th>
                <th> اقدامات <a   style="margin-right: 60px;text-align: left" class="btn btn-success" href="{{route('ُCategoryBlogCreate')}}">افزودن دسته بندی ها</a>    </th>

            </tr>
            @foreach($blogs as $key=>$blog)
                <tr>
                    <td></td>
                    <td>{{$key+1}}</td>
                    <td>{{$blog->tittle}}</td>
                    <td><img src="{{(!empty($blog->image)) ? url('upload/backend/image/'.$blog->image): url('upload/backend/image/b.png')}}" style="height: 100px;width: 100px" ></td>
                    <td>{{$blog->short_body}}</td>
                    <td>{{$blog->long_body}}</td>
                    <td class="d-flex">
                        <a href="{{route('ُBlogEdit',['blog'=>$blog->id])}}" class="btn btn-sm btn-info"> ویرایش </a>
                        <a style="background-color: mediumvioletred;margin-right: 10px" id="delete" href="{{route('ُBlogDestroy',['blog'=>$blog->id])}}" class="btn btn-sm btn-info"> حذف </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td> آیدی بلاگ </td>
                <td>  موضوع بلاگ </td>
                <td>  عکس بلاگ </td>
                <td>  متن کوتاه بلاگ </td>
                <td>  متن طولانی بلاگ </td>
                <td></td>
                <td> اقدامات </td>
            </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('admin/dist/js/code.js')}}"></script>

@endsection
