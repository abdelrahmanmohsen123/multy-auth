<?php

namespace App\Http\Controllers\Seller;


use App\Models\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
  //
  public function index(){
    return view('seller.seller_login');
}


public function dashboard(){
    // dd('hi');
    return view('seller.index');
}

public function login(Request $request){
    // dd($request->all());
    if(Auth::guard('seller')->attempt(['email'=>$request->email,'password'=>$request->password])){
        return redirect()->route('seller.dashboard')->with('error','seller Loged successfully ');
    }else{
        return back()->with('error','Invalid Email Or Password  ');
    }

}

public function seller_logout(){
    Auth::guard('seller')->logout();
    return redirect()->route('login_form')->with('error','seller Loged out successfully ');

}

public function seller_register(){
    return view('seller.seller_register');
}

public function seller_store(Request $request){
    // dd($request->all());
    Seller::create([
        'name'=>$request->username,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),

    ]);

    return redirect()->route('login_form')->with('error','seller created successfully ');
}
}
