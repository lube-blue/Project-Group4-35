<?php

namespace App\Http\Controllers\Admin;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.user.index',compact('user'));
     }
     public function edit($id){
        $users = User::find($id);
        return view('admin.user.edit',compact('users'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('user');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user');
    }
}
