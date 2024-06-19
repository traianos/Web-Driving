<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class studentstoinstractorController extends Controller
{
    public function indexform(){
        return  view("studentstoinstractor.form");
    }
     public function createFrom(Request $request)
    {   

    $formData = new FormData();
    $formData->FirstName = $request->FirstName;
    $formData->LastName = $request->LastName;
    $formData->start = $request->start;
    $formData->car_category = $request->carlist;
    $formData->description = $request->description;
    $formData->save();
        

    return redirect("Dashboard")->with("success","το μηνυμα σταλθηκε επιτυχος στον καθηγητη");
       
       
    }


}
