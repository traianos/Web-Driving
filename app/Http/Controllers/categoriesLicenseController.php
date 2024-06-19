<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriesLicenseController extends Controller
{
    public function indexcar()
    {

        return view('categoriesLicense/car');
    }

    
    public function indexmotor()
    {

        return view('categoriesLicense/motor');
    }


    public function indextruck()
    {

        return view('categoriesLicense/truck');
    }

    public function indexbus()
    {

        return view('categoriesLicense/bus');
    }

    public function indexpei()
    {

        return view('categoriesLicense/pei');
    }


    public function indexadr()
    {

        return view('categoriesLicense/adr');
    }
    public function indextaji()
    {

        return view('categoriesLicense/taji');
    }


























}
