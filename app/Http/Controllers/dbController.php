<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\donor;
use App\Models\recipient;
use App\Models\blood;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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
        $data = blood::paginate(5);
        return view('bloodTable',['bloods'=>$data]);
    }

    function showBlood(Request $req)//blood table page
    {
        $data = blood::where('blood_group',$req->blood_group
        )->get();
        return view('bloodTable',['bloods'=>$data]);
    }
    function showBloodTable()
    {
        $data = DB::table('bloods')
                ->join('recipients','recipients.recipient_adhaar_no','=','bloods.recipient_adhaar_no')
                ->where('bloods.availablity','=',0)
                ->get();
        return view('allotedBlood',['bloods'=>$data]);
    }

    function addBlood(Request $req)
    {
        $donor = donor::where('donor_adhaar_no','=',$req->donorId)->first();
        
        $donationData = Carbon::create($req->date);
        $expiryDate=$donationData->addDays(42);
        $lastDonated = Carbon::create($req->date);

        $tempLast = $lastDonated->subMonths(6);
        
        if($donor)
        {
            if($tempLast>$donor->last_donated)
            {
                    for($count=0;$count<$req->unit;$count++)
                {
                    $blood = new blood;
                    $blood->availablity=1;
                    $blood->valid_upto=$expiryDate;
                    $blood->donor_adhaar_no =$req->donorId;
                    $blood->blood_group=$donor->blood_group;
                    $blood->d_date=$req->date;
                    $blood->save();
                }

                $donor->last_donated=$req->date;
                $donor->save();
                return back()->with('bloodAddSuccess','Blood added succesfully.');
            }
            else
            {
                return back()->with('bloodAddFail','Donor can only donate after 6 months from previous donation!');
            }
            
        }
        else{
            return back()->with('bloodAddFail','Donor not found!');
        }
    }
    function addDonor(Request $req)//success message handing pending here
    {

        $donor = new donor;
        $donor->donor_adhaar_no = $req->adhaar_no;
        $donor->name            = $req->name;
        $donor->email           = $req->email;
        $donor->phone           = $req->phone;
        $donor->address         = $req->address;
        $donor->dob             = $req->dob;
        $donor->gender          = $req->gender;
        $donor->weight          = $req->weight;
        $donor->blood_group     = $req->bloodGroup;
        $donor->save();
        return back()->with('donorAdded','Donor added successfully.');
    }
    function addRecipient(Request $req)//success message handing pending here
    {

        $recipient = new recipient;
        $recipient->recipient_adhaar_no = $req->adhaar_no;
        $recipient->name                = $req->name;
        $recipient->email               = $req->email;
        $recipient->phone               = $req->contact;
        $recipient->address             = $req->address;
        $recipient->dob                 = $req->dob;
        $recipient->gender              = $req->gender;
        $recipient->weight              = $req->weight;
        $recipient->blood_group         = $req->bloodGroup;
        $recipient->save();
        
        return back()->with('recipientAdded','Recipient added successfully.');

    }

/* ..............................................................Manage Blood .......................................*/
    
    function allotBlood(Request $req)
    {
        //dd($req->all());
        $recipient = Recipient::where('recipient_adhaar_no','=',$req->r_id)->first();
        $bloodCount = Blood::where('blood_group','=',$recipient->blood_group)
                            ->where('availablity','=',1)
                            ->where('valid_upto','>',$req->date)
                            ->count();
                            
        $bloods = Blood::where('blood_group','=',$recipient->blood_group)
                        ->where('availablity','=',1)->get();
        //$bloods = DB::table('bloods')
        //            ->select('blood_id')
        //            ->where('blood_group','=',$recipient->blood_group,'and','avalability','=',1)
         //           ->get();
        
        if($recipient)
        {
            if($bloodCount>=$req->unit)
                {
                    $affected=null;
                    $count = $req->unit;
                    foreach( $bloods as $blood)
                    {
                        if($count==0)
                        {
                            break;
                        }
                        $blood->availablity=0;
                        $blood->recipient_adhaar_no=$req->r_id;
                        $blood->r_date=$req->date;
                        $affected=$blood->save();
                        $count--;
 
                    }
                    if($affected)
                    {
                        return back()->with('allotSuccess','Blood is alloted successfully');
                    }
                    else
                    {
                        return back()->with('allotFail','Oops Something went wrong');
                    }
                    


                }
            else
            {
                return back()->with('allotFail','Blood is not available');
            }

        }
        else{
            return back()->with('allotFail','Recipient not found');
        }
    }
}