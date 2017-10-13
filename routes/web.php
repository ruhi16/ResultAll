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












Route::get('/addSec/{n}', function($id){
    $ses = App\Session::where('Status', '=', 'Current')->get();
    $cls = App\Clss::find($id);

    $m = DB::table('clss_section')
        ->where('clss_id','=', $id)
        ->max('section_id');

    $n = DB::table('sections')        
        ->max('id');

    //echo "Max:".$m;
    //echo "Max:".$n;
    if($m < $n){
        $cls->sections()->attach(++$m,['session_id'=>$ses]);
    }
    // foreach($cls->sections as $c){
    //     echo $c."<br>";
    // }
    
    return back();
});


Route::get('/delSec/{n}', function($id){
    $ses = App\Session::where('Status', '=', 'Current')->get();
    $cls = App\Clss::find($id);

    $m = DB::table('clss_section')
        ->where('clss_id','=', $id)
        ->max('section_id');

    $n = DB::table('sections')        
        ->max('id');

    //echo "Max:".$m;
    //echo "Max:".$n;
    if($m > 0){
        $cls->sections()->detach($m,['session_id'=>$ses]);
    }
    // foreach($cls->sections as $c){
    //     echo $c."<br>";
    // }
    
    return back();
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