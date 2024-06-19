<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class applicationcontroller extends Controller
{
    public function app(){
        return view('application/Application');
    }
}
