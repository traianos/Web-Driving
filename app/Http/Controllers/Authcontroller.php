<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Laravel\Prompts\password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use illuminate\validation\Rule;

class Authcontroller extends Controller
{
    public function login(){
        return view('login');
    }


    public function register(){
        return view('register');
    }

    
    public function registerpost(Request $request){
       $incomefields=$request->validate([
        'name'=>['required','min:3','max:40'],
        'email'=>['required'],
        'password'=>['required'],
       
       ]);

       $incomefields['password']=bcrypt($incomefields['password']);
       $user = user::create($incomefields);
      

       return back()->with('success','You have register');
       

        //dd($request->all('name','email'));
    }
    public function loginpost(Request $request){
        ////unique email or name; not finished///////
       $incomefields=$request->only('email','password');
        if(Auth::attempt($incomefields)){
            return redirect()->route('Dashboard')->with('success', 'Login successful');
           // $request->session()->regenerate();  
           //['email' => $request->email]
        }
        return back()->with('error','error email or password');


    }

    public function Dashboard(){
        return view("Dashboard");
    }

    public function logout(Request $request)
    {
        
        Auth::logout();
        return redirect('/login')->with(['success' => 'Logout successfuly !!!']);
    }

}
   
    
       


