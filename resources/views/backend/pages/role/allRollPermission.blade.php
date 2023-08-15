@extends('admin.master.master')
@section('main_content')
    <div class="card-body table-responsive p-0">
        <h4 style="margin-right: 50px;margin-top: 20px;margin-bottom: 20px;color: #4d4d4c;">همه دسترسی ها</h4>
        <table class="table table-hover">
            <tbody><tr>
                <th></th>
                <th> آیدی دسترسی </th>
                <th>  نام دسترسی </th>
                <th>  نام مجوز </th>

                <th> اقدامات <a   style="margin-right: 60px;text-align: left" class="btn btn-success" href="{{route('CreateRole')}}">افزودن نقش </a>    </th>

            </tr>
            @foreach($roles as $key=>$item)
                <tr>
                    <td></td>
                    <td>{{$key+1}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                    @foreach($item->permissions as $perm )
                        <span class="badge rounded-pill bg-danger" >{{$perm->name}}</span>
                    @endforeach
                    </td>
                    <td class="d-flex">
                        <a href="{{route('rollPermissionEdit',$item->id)}}" class="btn btn-sm btn-info"> ویرایش </a>
                        <a href="{{route('rollPermissionِDestroy',$item->id)}}" style="background-color: mediumvioletred;margin-right: 10px" id="delete"  class="btn btn-sm btn-info"> حذف </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td> آیدی دسترسی </td>
                <td>  نام دسترسی </td>
                <td> اقدامات </td>
            </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('admin/dist/js/code.js')}}"></script>



<!-- select all check box -->
<script type="text/javascript">
    $('#flexCheckDefault').click(function (){
        if ($(this).is(':checked')){
            $('input[type=checkbox]').prop('checked',true);
        }else {
            $('input[type=checkbox]').prop('checked',false);

        }
    })
</script>
@endsection
