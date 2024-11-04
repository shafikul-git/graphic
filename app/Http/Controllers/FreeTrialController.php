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
        $request->validate([
            "files"=> "required|file|mimes:jpeg,png,jpg,gif,webp,arw|max:30720",
            "country" => "required|string",
            "name"=> "required|string",
            "instruction"=> "required|string",
            "email"=> "required|email",
        ]);

        if($request->file("files")){
            dd($request->file('files'));
            $fileName = $request->file("files")->getClientOriginalName();
            $extension = $request->file("files")->getClientOriginalExtension();
            $request->file("files")->storeAs("public", time(). '___' . $fileName . '___' . uniqid() , $extension);
            return "upload ok";
        }
        return "ok";

    }
}
