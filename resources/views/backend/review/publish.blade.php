@extends('admin.master.master')
@section('main_content')

    <div class="card-body table-responsive p-0">
        <h4 style="margin-right: 50px;margin-top: 20px;margin-bottom: 20px;color: #4d4d4c;">کامنت های فعال</h4>
        <table class="table table-hover">
            <tbody><tr>
                <th></th>
                <th> آیدی کامنت </th>
                <th> متن کامنت </th>
                <th> محصول </th>
                <th> کاربر </th>
                <th> امتیاز </th>
                <th> وضعیت </th>
                <th> اقدامات  </th>

            </tr>
            @foreach($review as $key=>$item)
                <tr>
                    <td></td>
                    <td>{{$key+1}}</td>
                    <td>{{Str::limit($item->comment,25 )}}</td>
                    <td>{{$item['product']['name']}}</td>
                    <td>{{$item['user']['name']}}</td>
                    <td>
                        @if($item->rating == 0)
                            امتیازی داده نشده
                        @elseif($item->rating == 1)
                            <i class="ri-star-fill"></i>
                        @elseif($item->rating == 2)
                            <i class="ri-star-fill" ></i>
                            <i class="ri-star-fill" ></i>

                        @elseif($item->rating == 3 )
                            <i class="ri-star-fill" ></i>
                            <i class="ri-star-fill" ></i>
                            <i class="ri-star-fill" ></i>

                        @elseif($item->rating == 4 )
                            <i class="ri-star-fill" ></i>
                            <i class="ri-star-fill" ></i>
                            <i class="ri-star-fill" ></i>
                            <i class="ri-star-fill" ></i>

                        @elseif($item->rating == 5 )
                            <i class="ri-star-fill" ></i>
                            <i class="ri-star-fill" ></i>
                            <i class="ri-star-fill" ></i>
                            <i class="ri-star-fill" ></i>
                            <i class="ri-star-fill" ></i>
                        @endif
                    </td>
                    <td>

                        <span class="btn btn-danger"> غیر فعال </span>

                    </td>
                    <td>
                        <a class="btn btn-info" href="{{route('delete',$item->id)}}">فعال کردن</a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td> آیدی کامنت </td>
                <td> متن کامنت </td>
                <td> محصول </td>
                <td> کاربر </td>
                <td> امتیاز </td>
                <td> وضعیت </td>
            </tr>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('admin/dist/js/code.js')}}"></script>

@endsection
