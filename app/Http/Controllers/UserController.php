<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\UserModel;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function showLogin()
    {
        return view("login");
    }

    public function customLogin(Request $request)
    {
       $validate =  $request->validate([
            'username'    => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('index');
        }

        return back()->withErrors('De opgegeven username/password combinatie klopt niet.');
    }

    public function logOut(Request  $request){
        Auth::logout();
        return redirect('/');
    }


    public function showRegister(){
        return view("register");
    }

    public function registerUser(Request $request){

        $validate =  $request->validate([
            'username'    => 'required',
            'password' => 'required',
            'authorname' => 'required'
        ]);

        $user = new UserModel();
        $user->username = $validate['username'];
        $user->password = Hash::make($validate['password']);
        $user->authorname = $validate['authorname'];
        $user->save();

        return redirect()->intended('login');
    }

}
