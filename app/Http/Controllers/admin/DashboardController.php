<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function registered(){
    	$users = User::all();
    	return view('Admin.register')->with('users',$users);
    }

    public function registeredit(Request $request, $id){
    	$users = User::findOrFail($id);
    	return view('Admin.register-edit')->with('users',$users);
    }
    public function registerupdate(Request $request, $id){
    	$users = User::find($id);
    	$users->name=$request->input('username');
    	$users->usertype=$request->input('userType');
    	$users->update();
    	return redirect('role-register')->with('status','your data is updated');

    }
    public function registerdelete(Request $request, $id){
    	$users = User::findOrFail($id);
    	$users->delete();
    	return redirect('role-register')->with('status','your data is delete');

    }
}
