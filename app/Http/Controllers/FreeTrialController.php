<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreeTrialController extends Controller
{
    public function index()
    {
        return view("");
    }
    public function store(Request $request)
    {
        return $request;
        $request->validate([
            "file"=> "required|file",
            "country" => "required|string",
            "name"=> "required|string",
            "instruction"=> "required|string",
            "email"=> "required|email",
        ]);



    }
}
