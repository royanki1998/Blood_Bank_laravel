<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donor;

class dbController extends Controller
{
    function dbDonor()
    {
        $data = donor::paginate(5);
        return view('donorTable',['donors'=>$data]);
    }
}
