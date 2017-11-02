<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

use App\Http\Requests\LoginValidation;
use App\Http\Requests\RegisterValidation;

class AdminController extends Controller
{
    //
    public function registerSubmit(RegisterValidation $request){
    	$vEm = User::where('email','like',$request->email)->count();

    	if($vEm != 0){
    		session()->put('error','This Email is already registered, use alternative one!');
	    	return redirect()->to('/register');
    	}

    	if($request->password == $request->confpassword){	
	    	$user = new User;
			$user->name 	= $request->name;
			$user->email 	= $request->email;
			$user->password = md5($request->password);
			$user->email 	= $request->email;
			$user->save();

	   		session()->put('error','Successfully User Registered.');
	    	return redirect()->to('/login');

    	}else{
    		session()->put('error','Password does not matched!');
    		return redirect()->to('/register');
    	}
    }

    public function loginSubmit(LoginValidation $request){
    	$vUs = User::where('email','like',$request->email)
                   ->where('password','like',md5($request->password));
        if($vUs->count() == 1){
            session()->put('user',$request->email);
            session()->put('role','Admin');
            session()->put('error','Succesfully Login');
            //return "Welcome, you are now Logged In...";
            return redirect()->to('/dashboard');
        }else{
            //session()->put('user',$request->email);
            session()->put('error','Email or Password does not matched');
            return redirect()->to('/login');            
        } 
    }

    public function dashboard(){
        $users = User::all();
        return view('/dashboard')->with('users', $users);
    }
}
