<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/setting', function(){
    return view('/setting/setting');
});


Route::get('/test', function(){
    $cls = App\Clss::all();
    $sts = DB::table('clss_exam_extype_status')->get();

    return view('test')
        ->with('cls', $cls)
        ->with('sts', $sts);
});


Route::get('/session', 'AdSettingController@session');
Route::post('/addSession', 'AdSettingController@addSession');
Route::get('/editSession/{n}', 'AdSettingController@editSession');

Route::get('/clssec',function(){
    $clss = App\Clss::all();
    $section = App\Section::all();
    return view ('/setting/clssec')
    ->with('clss', $clss)
    ->with('section', $section);
});


Route::get('/clssub', function(){
    $session = App\Session::where('Status','=','Current')->get();
    $cls = App\Clss::all();
    $sub = App\Subject::all();
    $extypes = App\Extype::all();
    $clssub = DB::table('clss_subject')->get();
    //echo $session;
    //dd($clssub);
    return view('/setting/clssub')
        ->with('session', $session)
        ->with('cls', $cls)        
        ->with('subjects', $sub)
        ->with('extypes', $extypes)
        ->with('clssub', $clssub);
});

Route::post('/addSubjForClss', 'AdSettingController@addSubjForClss');



Route::get('/addSec/{n}', 'AdSettingController@addSec');
Route::get('/delSec/{n}', 'AdSettingController@delSec');



Route::get('/examsch', function(){
    $sessions = App\Session::all();
    $exms = App\Exam::all();
    $exmtypes = App\Extype::all();

    $rec = App\Extype::count();

    return view('/setting/exam')
    ->with('sessions', $sessions)
    ->with('exms', $exms)
    ->with('exmtypes', $exmtypes)
    ->with('rec', $rec);
});

Route::get('/refSubjForClss/{$a}', function($a){
    $cls = Clss::find($a);
    //$cls->subjects()->sync([]);
    //return "hi";
});










Route::get('/clssubfm', function(){
    $session = App\Session::where('Status','=','Current')->first();
    $cls = App\Clss::all();
    $clssub = DB::table('clss_subject')->get();
    $exam = App\Exam::where('session_id', $session->id)->get();
    //echo $exam;
    

    return view('/setting/clssubfm')
        ->with('session', $session)
        ->with('cls', $cls)
        ->with('clssub', $clssub)
        ->with('exam', $exam);
});









Route::post('/register-submit', 'AdminController@registerSubmit');
Route::post('/login-submit', 'AdminController@loginSubmit');

Route::group(['middleware' => 'admin'], function(){
    Route::get('/dashboard', 'AdminController@dashboard');

    Route::get('/logout',function(){
        session()->flush();
        return redirect()->to('/home');
    });


});