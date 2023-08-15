@extends('admin.master.master')
@section('main_content')
<div class="container">
    <div class="rol m-2" >
        <div class="col-md-6"><div class="card">
                <h4 style="margin: 15px;color: #4d4d4c">ویرایش دسترسی</h4>
                <div class="card card-primary">
                    <form id="myForm" name="myForm" method="post" action="{{route('rollPermissionUpdate',$role->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">

                            <br>
                            <select name="role_id" class="form-control select2 select2-hidden-accessible" style="width: 95%;text-align: center" tabindex="-1" aria-hidden="true">
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                            </select>
                        </div>
                        <div style="margin: 25px" class="form-check">

                                <input id="flexCheckDefault" class="form-check-input" type="checkbox">
                                <label for="flexCheckDefault" class="form-check-label">انتخاب همه</label>

                        </div>
                        <div class="row">
                            <div class="col-3"  style="display: inline">
                                @foreach($permission_groups as $group)
                                <div class="form-check">

                                        @php
                                            $permissions= \App\Models\User::getPermissionByGroupName($group->group_name)
                                        @endphp
                                        <input value=""  id="flexCheckDefault" {{\App\Models\User::roleHasPermissions($role,$permissions) ? 'checked' : ''}} class="form-check-input" type="checkbox">
                                    <label for="flexCheckDefault" class="form-check-label">{{$group->group_name}}</label>
                                </div>
                                @endforeach
                            </div>

                            <div class="col-9"style="display: inline">
                                @foreach($permissions as $permission)
                                <div class="form-check">

                                    <input name="permission[]"   value="{{$permission->id}}" id="flexCheckDefault{{$permission->id}}" {{$role->hasPermissionTo($permission->name)?'checked':''}} class="form-check-input" type="checkbox">
                                    <label class="form-check-label" for="flexCheckDefault{{$permission->id}}">{{$permission->name}}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> بروزرسانی  </button>
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
