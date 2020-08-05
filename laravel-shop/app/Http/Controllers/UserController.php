<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckAge;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function showFormRegister(){
        return view('register');
    }
    function showFormLogin(){
        return view('login');
    }
    function login(Request $request){
        if($request->username == 'admin' && $request->password == 'admin')
            return view('data');
        else return redirect('welcome');
    }
    function register(Request $request){
        $username = $request->username;
        $password = $request->password;
        
//        $age = Carbon::parse($request->birth)->age;
//        if($age < 18){
//            echo 'You are not allow to use this system';
//            return back();
//        } else return view('login');


    }
}
