<?php

namespace App\Http\Controllers;

use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\ValidationException;

class FreeTrialController extends Controller
{
    public function index()
    {
        return view("");
    }
    public function store(Request $request)
    {
        $getDate = new \DateTime("now", new DateTimeZone("Asia/Dhaka"));
        $currentDate = $getDate->format('Y_m_d H-i-s');

        $request->validate([
            "country" => "required|string",
            "name" => "required|string",
            "instruction" => "required|string",
            "email" => "required|email",
            "files.*" => "required|file|mimes:jpeg,png,jpg,gif,webp|max:30720", // Ensure this is correct
        ]);

        $storeFileNam  = [];

        if($request->hasFile("files")){
            foreach($request->file('files') as $file){
                $fileName = $file->getClientOriginalName();
                $path = $file->storePubliclyAs("sampleFile", uniqid() . '___' . $currentDate .  '___' . $fileName , "public");
                array_push($storeFileNam, $path);
            }
        }
        return $storeFileNam;

    }
}
