<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\type;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin extends Controller
{   
    
    public function dashboard(){
        $typeCount = array();     
      $total = post::count();
    //   User::where("status",1)->count()
      $type = DB::table('loaitin')->select('id','ten')->get();
      foreach($type as $val){
        $value = post::where("idLT",$val->id)->count();
        array_push($typeCount ,['name' => $val->ten ,'value'=> $value]) ;
      }
        return view('admin.dashboard' , ['total' => $total , 'typeCount' => $typeCount]);
    }
    public function getType(){
        $categories = DB::table('loaitin')->get();
        return view('admin.type',[           
            'categories'=>$categories]);
    }
    public function deleteType($id){
        if(!empty($id)){
            DB::table('loaitin')->where('id', $id)->delete();
            return redirect()->route('admin_getType');
        }               
    }
    public function addType(){
        return view('admin.addType');
    }
    public function handleAddType(){
        $value = new type;
        $value->ten=$_POST['nameType'];
        $value->lang=$_POST['langType'];
        $value->save();
       return redirect()->route('admin_getType');
    }
    public function updateType($id){
  
        $query = DB::table('loaitin')->where('id',$id)->first();
        return view('admin.updateType',['data'=>$query]);
    }
    public function handleUpdateType(){
        $id = $_POST['id'];
        $handle = type::find($id);
        if($handle==null){
            return redirect()->route('admin_getType');
        }else{
            $handle->ten=$_POST['nameType'];
            $handle->lang=$_POST['langType'];
            $handle->save();
            return redirect()->route('admin_getType');
        }
    }
    // POST
    public function getPost(){
        $post = DB::table('tin')->paginate(15);
        return view('admin.post',[           
            'post'=>$post]);
    }
    public function deletePost($id){
        if(!empty($id)){
            DB::table('tin')->where('id', $id)->delete();
            return redirect()->route('admin_getPost');
        }      
    }
    public function addPost(){       
        $query = DB::table('loaitin')->select('id','ten')->orderBy('id');
        $data =$query->get(); 
        return view('admin.addPost',['categories'=>$data]);
    }
    public function handleAddPost(){
        $value = new post;
        $value->tieuDe=$_POST['tieuDe'];
        $value->tomTat=$_POST['tomTat'];
        $value->noiDung=$_POST['addpost'];
        $value->slug=Str::slug($_POST['tieuDe']);
        $value->idLT=$_POST['idLT'];
        $value->save();
       return redirect()->route('admin_getPost');
    }
    public function updatePost($id){
        $data = DB::table('tin')->where('id',$id)->first();
        $query = DB::table('loaitin')->select('id','ten')->orderBy('id');
        $categories =$query->get(); 
        return view('admin.updatePost',['data'=>$data,'categories'=>$categories]);
    }
    public function handleUpdatePost(){
        $id = $_POST['id'];
        $handle = post::find($id);
        if($handle==null){
            return redirect()->route('admin_getPost');
        }else{
            $handle->tieuDe=$_POST['tieuDe'];
            $handle->tomTat=$_POST['tomTat'];
            $handle->slug=Str::slug($_POST['tieuDe']);
            $handle->noiDung=$_POST['noidung'];
            $handle->idLT=$_POST['idLT'];
            $handle->save();
            return redirect()->route('admin_getPost');
        }
    }
    public function listAccount(){
        return view('admin.listAccount');
    }
    public function accountDetail(){
        return view('admin.profile');
    }
}
