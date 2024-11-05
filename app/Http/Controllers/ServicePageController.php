<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicePageController extends Controller
{

    public function servicePage ($name = null)
    {
        if($name){
            return view('frontend.servicePageLayout', ['name' => $name]);
        } else{
            return view('frontend.allservice');
        }

    }
}
