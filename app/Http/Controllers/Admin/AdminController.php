<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.admin_login');
    }


    public function dashboard(){
        return view('admin.index');
    }

    public function login(Request $request){
        // dd($request->all());
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('admin.dashboard')->with('error','Admin Loged successfully ');
        }else{
            return back()->with('error','Invalid Email Or Password  ');
        }

    }

    public function admin_logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('error','Admin Loged out successfully ');

    }

    public function admin_register(){
        return view('admin.admin_register');
    }

    public function admin_store(Request $request){
        // dd($request->all());
        Admin::create([
            'name'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),

        ]);

        return redirect()->route('login_form')->with('error','Admin created successfully ');
    }
}