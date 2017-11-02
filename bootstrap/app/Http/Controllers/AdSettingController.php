<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use DB;
use App\Session;
use App\Clss;
use App\Section;
use App\Subject;



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

    public function addSec($id){
        $ses = Session::where('Status', '=', 'Current')->first();
        $cls = Clss::find($id);
    
        $m = DB::table('clss_section')
            ->where('clss_id','=', $id)
            ->max('section_id');
    
        $n = DB::table('sections')        
            ->max('id');
        echo $ses->id;
        //dd($ses);
    
        //echo "Max:".$m;
        //echo "Max:".$n;
        if($m < $n){
            $cls->sections()->attach(++$m,['session_id'=>$ses->id]);
        }
        // foreach($cls->sections as $c){
        //     echo $c."<br>";
        // }
        
        return back();
    }


    public function delSec($id){
        $ses = Session::where('Status', '=', 'Current')->first();
        $cls = Clss::find($id);
    
        $m = DB::table('clss_section')
            ->where('clss_id','=', $id)
            ->max('section_id');
    
        $n = DB::table('sections')        
            ->max('id');
    
        //echo "Max:".$m;
        //echo "Max:".$n;
        if($m > 0){
            $cls->sections()->detach($m,['session_id'=>$ses->id]);
        }
        // foreach($cls->sections as $c){
        //     echo $c."<br>";
        // }
        
        return back();
    }






    public function addSubjForClss(Request $request){
        $ses = Session::where('Status', '=', 'Current')->first();
        
        $arr = explode('/',$request->clsid);
        
        $cls = Clss::find($arr[0]);  
        //Summative subjects
        
        if($request->input('mybox')){            
            $b = array('extype_id'=>1,'session_id'=>$ses->id);            
            $a = array_fill_keys($request->mybox, $b);
            $cls->subjects()->sync($a,false);
        }
        //Formative subjects
        if($request->input('mybox1')){
            $b = array('extype_id'=>2,'session_id'=>$ses->id);            
            $a = array_fill_keys($request->mybox1, $b);
            $cls->subjects()->sync($a,false);
        }
        return back();
    }



}
