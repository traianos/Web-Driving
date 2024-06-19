<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class diplomaController extends Controller
{
    public function indexdimploma(Request $request ){
        if (Auth::check()) {
            // Fetch the authenticated user
            $user = Auth::user();
    
            // Eager load the categories relationship
            $user->user::with('categories')->get();
            
            
            return view('diplomainfo.DiplomaInfo', compact('users'));    
            
        } else {
            
            return redirect()->route('login')->with('error', 'Please log in to view file records.');
        }

        return view('diplomainfo.DiplomaInfo', compact('users'));
    }
}
