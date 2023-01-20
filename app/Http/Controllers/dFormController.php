<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blood;
use Session;

class dFormController extends Controller
{
    function showForm()
    {
        $LoginId = Session::get('loginID');
        $user=User::where('id','=',$LoginId)->first();

        if($user->gender=='Male')
        {
            return redirect('/userDonateM')->with('userId ',$LoginId);
        }
        else
        {
            return redirect('/userDonateF')->with('userId',$LoginId);
            //eturn view('userDonateF',['userId'=>$req->id]);
        }
    
    }
    function donatStatusM(Request $req)
    {
        if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            return back()->with('donorEligible','You are eligible for donatiion');
        }
        }
        }
        }
        }
        }
        }
        }
        }
        }
        }
        }
        return back()->with('donorNotEligible','You are not eligible for donation');
    }

    function donatStatusF(Request $req)
    {
        if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            if($req->r1=="no")
        {
            return redirect('/userProfile')->with('donorEligible','You are eligible for donatiion');
        }
        }
        }
        }
        }
        }
        }
        }
        }
        }
        }
        }
        return redirect('userProfile')->with('donorNotEligible','You are not eligible for donation');
    }
    
}
