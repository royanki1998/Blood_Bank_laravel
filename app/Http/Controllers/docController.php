<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Response;
use Storage;

class docController extends Controller
{
    

  function showAdhaar(Request $req)
  {
    if($req->path)
    {
        $filePath = storage_path('/app/'.$req->path);
    return response()->file($filePath);
    }
    else
    {
        return back();
    }
    
  }
  function showPres(Request $req)
  {
    if($req->path)
    {
        $filePath = storage_path('/app/'.$req->path);
    return response()->file($filePath);
    }
    else
    {
        return back();
    }
    
  }

}
