<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminatte\support\facades\valitador;

class ForgotPasswordController extends Controller
{
    public function resetpass(){
        return view('forgot-password');
    }

    public function  resetpassPost(Request $request){

        $request->validate([

            'email' => 'required|email|exists:users',

        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([

            'email' => $request->email, 

            'token' => $token, 

            'created_at' => Carbon::now()

        ]);
        $request->validate([
            'email' => 'required|email',
        ]);
    
      
        $token = Str::random(60);
    
        // Send the email
        Mail::send('emails.forgetPassword', ['token' => $token], function($message) use ($request) {
           
            $fromAddress = env('MAIL_FROM_ADDRESS');
            $fromName = env('MAIL_FROM_NAME', 'Your Application Name');
    
           
            $validator = Validator::make(['email' => $fromAddress], [
                'email' => 'required|email',
            ]);
    
            if ($validator->fails()) {
                throw new \Exception('Invalid email address format.');
            }
    
            $message->to($request->email);
            $message->from($fromAddress, $fromName);
            $message->subject('Reset Password');
        });
    
        return back()->with('message', 'We have e-mailed your password reset link!');

    }






    public function ResetPassword($token) { 

        return view('New-password ', compact('token'));

    }

     
    
    
    
    
    
    public function resetPasswordPost(Request $request) {
        $request->validate([

            'email' => 'required|email|exists:users',

            'password' => 'required|string|min:6|confirmed',

            'password_confirmation' => 'required'

        ]);

        $updatePassword = DB::table('password_resets')

            ->where([

            'email' => $request->email, 

            'token' => $request->token

        ])->first();

        
        if(!$updatePassword){

             return redirect()->to(route('ResetPassword'))->with('error','Invalid');
        }


        $user = User::where('email', $request->email)

        ->update(['password' => Hash::make($request->password)]);


         

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

  

        return redirect('login')->with('success', 'Your password has been changed!');

    }






    






}
