<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use function Laravel\Prompts\select;

use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\password;
use Illuminate\Support\Facades\Session;


class instractorcontroller extends Controller
{   ////Dashboardinstractor///
    public function Dashboardinstractor(){
        return view('instractor.Dashboardinstractor');
    }
    public function instractorLogin(){
        return view('instractor.InstractorLogin');
    }
    


    public function  instractorLoginpost(Request $request){
       
       
        $credentials = $request->only('email', 'password');
            
            
            $user = DB::table('instractor')
                ->where('email', $credentials['email'])
                ->first();
            
            // Check if the user exists
            if ($user) {
               
                if (password_verify($credentials['password'], $user->password)) {
                    
                    Auth::loginUsingId($user->id); 
                    
                    // Redirect to the admin dashboard with success message and admin name
                    return redirect('instractor/Dashboardinstractor')->with(['success' => true, 'name' => $user->name])->with('keep', 'success');
                }
            }
            
            // If user doesn't exist or password is incorrect
            return back()->with('error', 'Invalid not instractor');
        }
       
       



    public function instractorlogout(Request $request)
    {
        session::flush();
        
        return redirect('instractor/instractorLogin')->with(['success'=> 'Logout successful']);
    }    
   

    protected function getformdata(){
        //$datform= DB::table('form_data');

        $dataformget = DB::table('form_data')
        ->select('form_data.id','form_data.Firstname as fn','form_data.LastName' ,'form_data.start',
        'form_data.car_category as ct' ,'form_data.description as desc')->get();


        return view('instractor/formdataindextable',compact('dataformget'));
    }
    

}
