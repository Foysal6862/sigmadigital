<?php

namespace App\Http\Controllers;

use App\UserAddManage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.user.add-user');
    }

    public function saveUser(Request $request){
        $user = new UserAddManage();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();

        return redirect('/user/add')->with('message','User info save successfully');
    }

    public function manage(){
        $users = UserAddManage::all();
        return view('admin.user.manage-user', ['users'=>$users]);
    }

    public function editUser($id){
        $user = UserAddManage::find($id);
        return view('admin.user.edit-user', ['user'=>$user]);
    }

    public function updateUser(Request $request){
        $user = UserAddManage::find($request->user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();

        return redirect('/user/manage')->with('message', 'User info update successfully');
    }

    public function showUser($id){
        $user = UserAddManage::find($id);
        return view('admin.user.show-user', ['user'=>$user]);
    }

    public function deleteUser($id){
        $user = UserAddManage::find($id);
        $user->delete();

        return redirect('/user/manage')->with('message', 'User info delete successfully');
    }
}
