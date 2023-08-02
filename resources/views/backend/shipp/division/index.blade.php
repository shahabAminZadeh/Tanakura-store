@extends('admin.master.master')
@section('main_content')

    <div class="card-body table-responsive p-0">
        <h4 href="{{route('ُDivisionIndex')}}" style="margin: 15px;color: #4d4d4c">همه ناوگانها</h4>
        <table class="table table-hover">
            <tbody><tr>
                <th></th>
                <th> آیدی ناوگان </th>
                <th>  نام ناوگان </th>
                <th> اقدامات </th>
            </tr>
            @foreach($divisions as $key=>$division)
                <tr>
                    <td></td>
                    <td>{{$key+1}}</td>
                    <td>{{$division->name_division}}</td>
                    <td class="d-flex">
                        <a href="{{route('DivisionEdit',['division'=>$division->id])}}" style="margin-left: 10px"  class="btn btn-sm btn-info"> ویرایش </a>
                        <a id="delete" href="{{route('ُDivisionDestroy',['division'=>$division->id])}}" style="background-color: #c71515;margin-right: 10px" class="btn btn-sm btn-info"> حذف </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td> آیدی ناوگان </td>
                <td>  نام ناوگان </td>
                <td> اقدامات </td>
            </tr>
            </tbody>
        </table>
    </div>




@endsection
