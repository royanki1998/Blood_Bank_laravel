<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin;
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
                return redirect('/');
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
            'name'=>'required',
            'dob'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'contact'=>'required|unique:users|max:10|min:10',
            'adhaar_no'=>'required|unique:users|max:12|min:12',
            'email'=>'required|email|unique:users',
            'password'=>'confirmed|required',
            'password_confirmation'=>'required'
        ]);
            
            $user= new User();
            $user->name = $req->name;
            $user->gender = $req->gender;
            $user->email = $req->email;
            $user->dob = $req->dob;
            $user->address = $req->address;
            $user->contact = $req->contact;
            $user->adhaar_no = $req->adhaarNo;
        
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
            return redirect('/');
        }
    }



    public function adminLoginPage()
    {
        return view('auth.adminLogin');
        
    }
    public function adminLogin(Request $req)
    {
        //dd($req->all());
        $req->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $admin = Admin::where('username','=',$req->username)->first();
        if($admin)
        {
            if($req->password==$admin->password)
            {
                $req->session()->put('adminName',$admin->username);
                return redirect('index');
            }
            else
            {
                return back()->with('fail','Password does not match');
            }
        }
        else
        {
            return back()->with('fail','This admin does not exist!');
        }

    }
    public function adminLogout()
    {
        if(Session::has('adminName'))
        {
            Session::pull('adminName');
            return redirect('adminLogin');
        }
    }
}
