@extends('admin.master.master')
@section('main_content')

    <div class="card-body table-responsive p-0">
        <h4 style="margin: 15px;color: #4d4d4c">همه بنرها</h4>
        <table class="table table-hover">
            <tbody><tr>
                <th></th>
                <th> آیدی بنرها </th>
                <th>  موضوع بنرها </th>
                <th>  آدرس بنرها </th>
                <th> عکس بنرها </th>
                <th> اقدامات </th>
            </tr>
            @foreach($banners as $key=>$banner)
                <tr>
                    <td></td>
                    <td>{{$key+1}}</td>
                    <td>{{$banner->tittle}}</td>
                    <td>{{$banner->url}}</td>
                    <td ><img   src="{{(!empty($banner->image)) ? url('upload/backend/banner/'.$banner->image): url('upload/backend/banner/banner.jpg')}}" style="height: 100px;width: 100px" ></td>
                    <td class="d-flex">
                        <a href="{{route('ُBannerEdit',['banner'=>$banner->id])}}" style="margin-left: 10px"  class="btn btn-sm btn-info"> ویرایش </a>
                        <a id="delete" href="{{route('ُBannerDestroy',['banner'=>$banner->id])}}" style="background-color: #c71515;margin-right: 10px" class="btn btn-sm btn-info"> حذف </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td> آیدی بنرها </td>
                <td>  موضوع بنرها </td>
                <td>  آدرس بنرها </td>
                <td> عکس بنرها </td>
                <td> اقدامات </td>
            </tr>
            </tbody>
        </table>
    </div>




@endsection
