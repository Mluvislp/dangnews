<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class account extends Controller
{
    public function listAccount(){
       $users =  DB::table('users')->get();
        return view('admin.account.listAccount' , ['users' =>  $users]);
    }
    public function updateAccount($id){
       $user =  User::find($id);
        $allRoles = \Spatie\Permission\Models\Role::all();
       $modelHasRole =  DB::table('model_has_roles')->select('role_id')->where('model_id',$id)->get()->toArray();
       if(isset($modelHasRole[0])){
         $roleOfModel = DB::table('roles')->where('id',$modelHasRole[0]->role_id)->get()->toArray();
       }else{
        $roleOfModel = '';
       }
      
       return view('admin.account.accountDetail' , ['user' =>  $user , 'role'=>$roleOfModel , 'allRoles' => $allRoles]);
    }
    public function updateRole(){
        $id = $_POST['id_user'];
        $user =  User::find($id);
        $user->assignRole($_POST['role']);
        $listUsers =  DB::table('users')->get();
         return view('admin.account.listAccount' , ['users' =>  $listUsers]);
     }
}
