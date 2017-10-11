<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Session;



class AdSettingController extends Controller
{
    //
    public function session(){
        $sessions = Session::all();
        return view('/setting/session')->with('sessions',$sessions);
    }

    public function addSession(Request $request){
        $session = new Session;

        $session->Name = $request->currses;
        $session->pr_session_id = $request->prevses;
        $session->stDate = $request->fromdt;
        $session->enDate = $request->todt;
        $session->Status = 'Closed';

        $session->save();
        return "Accepted";
    }   

    public function editSession($n){

        //DB::beginTransaction();

        

        DB::table('sessions')->update(['Status'=>'Closed']);
        
        $session = Session::find($n);
        $session->Status = 'Current';
        $session->save();


        // $session = Session::find($n);
        // $session->Status = 'Current';
        // $session->save();



        // if (!$session)
        // {
        //     DB::rollbackTransaction();
        // }
        // DB::commitTransaction();


        // try {
            
        
        //     DB::commit();
        //     // all good
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     // something went wrong
        // }


        return back();
    }
}
