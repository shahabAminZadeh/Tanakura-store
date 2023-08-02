@extends('admin.master.master')
@section('main_content')

    <div class="card-body table-responsive p-0">
        <h4 href="{{route('ُStateCreate')}}" style="margin: 15px;color: #4d4d4c">افزودن ناوگان شهری</h4>
        <table class="table table-hover">
            <tbody><tr>
                <th></th>
                <th> آیدی شهر ناوگان </th>
                <th>  نام شهر ناوگان </th>
                <th>  نام ناوگان </th>
                <th>  نام منطقه ناوگان </th>
                <th> اقدامات </th>
            </tr>
            @foreach($states as $key=>$state)
                <tr>
                    <td></td>
                    <td>{{$key+1}}</td>
                    <td>{{$state->name}}</td>
                    <td>{{$state['division']['name_division']}}</td>
                    <td>{{$state['district']['name']}}</td>
                    <td class="d-flex">
                        <a href="{{route('StateEdit',['state'=>$state->id])}}" style="margin-left: 10px"  class="btn btn-sm btn-info"> ویرایش </a>
                        <a id="delete" href="{{route('StateDestroy',['state'=>$state->id])}}" style="background-color: #c71515;margin-right: 10px" class="btn btn-sm btn-info"> حذف </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td> آیدی منطقه ناوگان </td>
                <td>  نام شهر ناوگان </td>
                <td>  نام ناوگان </td>
                <td>  نام منطقه ناوگان </td>
                <td> اقدامات </td>
            </tr>
            </tbody>
        </table>
    </div>




@endsection
