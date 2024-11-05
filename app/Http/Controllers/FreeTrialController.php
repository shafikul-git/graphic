<?php

namespace App\Http\Controllers;

use App\Models\FreeTrial;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\ValidationException;

class FreeTrialController extends Controller
{
    public function index()
    {
        return view("frontend.freetrial");
    }

    public function sample(){
        return view('dashboard.freeTrial');
    }
    public function allSample(){
        $allSample = FreeTrial::orderByDesc('id')->paginate(10);
        $allSample->transform(function($item){
            $item->instruction = strip_tags($item->instruction);
            return $item;
        });
        return response()->json($allSample);
    }
    public function store(Request $request)
    {
        $getDate = new \DateTime("now", new DateTimeZone("Asia/Dhaka"));
        $currentDate = $getDate->format('Y_m_d H-i-s');

        $request->validate([
            "name" => "required|string|not_regex:/<[^>]*>/",
            "email" => "required|email|unique:free_trials,email",
            'category' => 'required|not_in:null',
            "country" => "required|string|not_regex:/<[^>]*>/",
            "instruction" => "required|string|not_regex:/<[^>]*>/",
            'fileLink' => 'nullable|string|required_without:files',
            "files.*" => "nullable|file|mimes:jpeg,png,jpg,gif,webp|max:30720|required_without:fileLink",
        ]);

        $storeFileNam  = [];

        if ($request->hasFile("files")) {
            foreach ($request->file('files') as $file) {
                $fileName = $file->getClientOriginalName();
                $path = $file->storePubliclyAs("FreeTrial", uniqid() . '____' . $currentDate .  '____' . $fileName, "public");
                array_push($storeFileNam, $path);
            }
        }

        $sampleAdd = FreeTrial::create([
            'name' => $request->name,
            'email' => $request->email,
            'category' => $request->category,
            'country' => $request->country,
            'instruction' => $request->instruction,
            'fileLink' => $request->fileLink,
            'files' => $storeFileNam,
        ]);

        if($sampleAdd){
            return redirect()->back()->with('success', 'Sample Added');
        }
        return redirect()->back()->with('error', 'Someting Went Wrong');
    }
}
