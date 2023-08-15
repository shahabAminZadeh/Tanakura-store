<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    ///////////////////////PERMISSION
    public function permission_index()
    {
        $permissions=Permission::all();
        return view('backend.pages.permission.index',compact('permissions'));
    }
/////////////////////////////
    public function permission_create()
    {
        return view('backend.pages.permission.store');
    }
//////////////////////////////////////
    public function permission_store(Request $request)
    {
        $request ->validate([
            'name'=>'required',
            'group_name'=>'required',

        ]);

         $role = Permission::create([

            'name'=>$request->name,
            'group_name'=>$request->group_name,

        ]);
        $notification=array(
            'message'=>'ثبت دسترسی با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->route('IndexPermission')->with($notification);
    }
////////////////////////////
    public function permission_edit($id)
    {
        $permission=Permission::find($id);
        return view('backend.pages.permission.edit',compact('permission'));
    }
//////////////////////////////////
    public function permission_update(Request $request,$id)
    {

        $request->validate([
            'name' => 'required',
            'group_name' => 'required',
        ]);
        $data = Permission::find($id);
        $data->update([

            'name'=>$request->name,
            'group_name'=>$request->group_name,

        ]);
        $notification=array(
            'message'=>'آپدیت دسترسی با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }
///////////////////////////

    public function permission_destroy(Permission $permission)
    {
        $permission->delete();
        $notification=array(
            'message'=>'حدف با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }
    ///////////////////////ROLE
    public function role_index()
    {
        $roles=Role::all();
        return view('backend.pages.role.index',compact('roles'));
    }
/////////////////////////////
    public function role_create()
    {
        return view('backend.pages.role.store');
    }
//////////////////////////////////////
    public function role_store(Request $request)
    {
        $request ->validate([
            'name'=>'required',


        ]);

        $role = Role::create([

            'name'=>$request->name,


        ]);
        $notification=array(
            'message'=>'ثبت نقش با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->route('IndexRole')->with($notification);
    }
////////////////////////////
    public function role_edit($id)
    {
        $role=Role::find($id);
        return view('backend.pages.role.edit',compact('role'));
    }
//////////////////////////////////
    public function role_update(Request $request,$id)
    {

        $request->validate([
            'name' => 'required',
        ]);
        $data = Role::find($id);
        $data->update([

            'name'=>$request->name,

        ]);
        $notification=array(
            'message'=>'آپدیت دسترسی با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }
///////////////////////////

    public function role_destroy(Role $role)
    {
        $role->delete();
        $notification=array(
            'message'=>'حدف با موفقیت انجام شد',
            'alert-type'=>'danger'
        );
        return redirect()->back()->with($notification);
    }

    ///route create RollPermission
    ////////////////////
    public function roll_permission_create()
    {
        $roles=Role::all();
        $permission=Permission::all();
        $permission_groups=User::getPermissionGroups();
        return view('backend.pages.role.createRollPermission',compact('roles','permission_groups','permission'));
    }
    ////////////////
    public function roll_permission_store(Request $request)
    {
        $data=array();
        $permissions=$request->permission;
        foreach ($permissions as $item){
            $data['role_id']=$request->role_id;
            $data['permission_id']=$item;
            DB::table('role_has_permissions')->insert($data);
        }
        $notification=array(
            'message'=>'ثبت نقش با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->route('IndexRole')->with($notification);

    }
    /////////////////////////////
    public function roll_permission_index()
    {
        $roles=Role::all();
        return view('backend.pages.role.allRollPermission',compact('roles'));
    }
    ////////////////////////
    public function roll_permission_edit($id)
    {
        $role=Role::roll_permission_update($id);
        $permissions=Permission::all();
        $permission_groups=User::getPermissionGroups();
        return view('backend.pages.role.editRollPermission',compact('role','permissions','permission_groups'));
    }
    //////////////////////
    public function roll_permission_update(Request $request,$id)
    {

        $role=Role::findOrFail($id);
        $permissions=$request->permission;
        if (!empty($permissions)){
            $role->syncPermissions($permissions);
        }
        $notification=array(
            'message'=>'بروزرسانی  با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->route('rollPermissionIndex')->with($notification);
    }
    /////////////////////
    public function roll_permission_destroy($id)
    {
        $role=Role::findOrFail($id);
        if (!is_null($role)){
            $role->delete();
        }
        $notification=array(
            'message'=>'حذف  با موفقیت انجام شد',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
