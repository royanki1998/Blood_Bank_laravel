<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
       return view('auth.register');
       
    }
    public function loginUser(Request $req)
    {
        //dd($req->all());
        $req->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user = User::where('email','=',$req->email)->first();
        if($user)
        {
            if(Hash::check($req->password,$user->password))
            {
                $req->session()->put('loginID',$user->id);
                return redirect('index');
            }
            else
            {
                return back()->with('fail','Password does not match');
            }
        }
        else
        {
            return back()->with('fail','User email does not exist');
        }
    }
    
    public function registerUser(Request $req)
    {
        //dd($req->all());

        $req->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);

        $user= new User();
        $user->fname = $req->fname;
        $user->lname = $req->lname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password)    ;
        $res = $user->save();
        if($res)
        {
            return back()->with('success','You have been registered');
        }
        else
        {
            return back()->with('fail','Something went wrong');
        }

    }

    public function logout()
    {
        if(Session::has('loginID'))
        {
            Session::pull('loginID');
            return redirect('login');
        }
    }
}
