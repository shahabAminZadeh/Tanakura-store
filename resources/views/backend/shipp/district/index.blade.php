@extends('admin.master.master')
@section('main_content')

    <div class="card-body table-responsive p-0">
        <h4 href="{{route('ُDistrictCreate')}}" style="margin: 15px;color: #4d4d4c">افزودن مناطق ناوگانها</h4>
        <table class="table table-hover">
            <tbody><tr>
                <th></th>
                <th> آیدی منطقه ناوگان </th>
                <th>  نام منطقه ناوگان </th>
                <th>  نام ناوگان </th>
                <th> اقدامات </th>
            </tr>
            @foreach($districts as $key=>$district)
                <tr>
                    <td></td>
                    <td>{{$key+1}}</td>
                    <td>{{$district->name}}</td>
                    <td>{{$district['division']['name_division']}}</td>
                    <td class="d-flex">
                        <a href="{{route('DistrictEdit',['district'=>$district->id])}}" style="margin-left: 10px"  class="btn btn-sm btn-info"> ویرایش </a>
                        <a id="delete" href="{{route('DistrictDestroy',['district'=>$district->id])}}" style="background-color: #c71515;margin-right: 10px" class="btn btn-sm btn-info"> حذف </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td> آیدی منطقه ناوگان </td>
                <td>  نام منطقه ناوگان </td>
                <td>  نام ناوگان </td>
                <td> اقدامات </td>
            </tr>
            </tbody>
        </table>
    </div>




@endsection
