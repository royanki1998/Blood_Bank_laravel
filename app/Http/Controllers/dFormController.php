<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
}
