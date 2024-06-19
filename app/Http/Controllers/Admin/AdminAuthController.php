<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use function Laravel\Prompts\select;

use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\password;

class AdminAuthController extends Controller
{
    public function AdminLogin(){
      
        return view("admin/AdminLogin");
    }
    public function admin()
    {
    $admin = Auth::guard('admin')->user();
    
    return view("admin/admin", compact('admin'));
    }

        public function AdminLoginpost(Request $request)
        {
            $credentials = $request->only('email', 'password');
            
            
            $user = DB::table('admin')
                ->where('email', $credentials['email'])
                ->first();
            
            // Checking if the user existsing
            if (password_verify($credentials['password'], $user->password)) {
                
                Auth::loginUsingId($user->id);
                
                
                session(['admin_name' => $user->name]);
                
                
                return redirect('admin/admin')->with('success', 'Login successful');
            }
            return back()->with('error', 'You are not an admin');
        }

        public function adminlogout(Request $request)
        {
           
            Auth::logout();
            return redirect('admin/AdminLogin')->with(['success' => 'Logout successfuly admin!!!']);
            
        }    

        
        
}
