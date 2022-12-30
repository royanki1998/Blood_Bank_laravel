<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\donor;
use App\Models\recipient;
use App\Models\blood;
use DB;


class dbController extends Controller
{
    function dbDonor()
    {
        $data = donor::paginate(5);
        return view('donorTable',['donors'=>$data]);
    }

    function dbRecipient()
    {
        $data = recipient::paginate(5);
        return view('recipientTable',['recipients'=>$data]);
    }

    function dbBlood()
    {
        $data = blood::all();
        return view('bloodTable',['bloods'=>$data]);
    }

    function showBlood(Request $req)
    {
        $data = blood::where('blood_group',$req->blood_group
        )->get();
        return view('bloodTable',['bloods'=>$data]);
    }

    function addDonor(Request $req)
    {

        $donor = new donor;
        $donor->donor_adhaar_no=$req->adhaar_no;
        $donor->name = $req->name;
        $donor->email = $req->email;
        $donor->phone = $req->phone;
        $donor->address = $req->address;
        $donor->dob = $req->dob;
        $donor->gender = $req->gender;
        $donor->weight = $req->weight;
        $donor->blood_group = $req->bloodGroup;
        $donor->save();

        return back()->with('donorAdded','Donor added successfully.');
    }
}