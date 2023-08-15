@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c">ثبت دسترسی</h4>
                <div class="card card-primary">
                    <form id="myForm" name="myForm" method="post" action="{{route('rollPermissionStore')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">

                            <br>
                            <select name="role_id" class="form-control select2 select2-hidden-accessible" style="width: 95%;text-align: center" tabindex="-1" aria-hidden="true">
                                <option selected="">نقش را انتخاب کنید</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div style="margin: 25px" class="form-check">

                                <input id="flexCheckDefault" class="form-check-input" type="checkbox">
                                <label for="flexCheckDefault" class="form-check-label">انتخاب همه</label>

                        </div>
                        <div class="row">
                            <div class="col-3"  style="display: inline">
                                <div class="form-check">
                                    @foreach($permission_groups as $group)
                                    <input   id="flexCheckDefault" class="form-check-input" type="checkbox">
                                    <label for="flexCheckDefault" class="form-check-label">{{$group->group_name}}</label>
                                    @endforeach
                                </div>
                            </div>
                            @php
                                $permissions= \App\Models\User::getPermissionByGroupName($group->group_name)
                            @endphp

                            <div class="col-9"style="display: inline">
                                <div class="form-check">
                                    @foreach($permissions as $permission)
                                    <input name="permission[]"   value="{{$permission->id}}" id="flexCheckDefault{{$permission->id}}" class="form-check-input" type="checkbox">
                                    <label class="form-check-label" for="flexCheckDefault{{$permission->id}}">{{$permission->name}}</label>
                                    @endforeach.
                                </div>
                            </div>
                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> افزودن </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



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
