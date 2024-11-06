<?php

namespace App\Http\Controllers;

use DateTimeZone;
use App\Models\FreeTrial;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class FreeTrialController extends Controller
{
    public function index()
    {
        return view("frontend.freetrial");
    }

    public function sample(Request $request){
        $search = $request->input('search');
        $option = $request->input('option');

        $query = FreeTrial::query();
       if($search && $option){
        $query->where($option, 'LIKE', '%' . $search . '%' );
       } elseif ($search){
        $query->where(['name', 'email'], 'LIKE', '%' . $search . '%' );
       }

        $allSample = $query->orderByDesc('id')->paginate(3)->appends(request()->query());
        return view('dashboard.freeTrial', compact('allSample'));
    }

    public function store(Request $request)
    {
        $getDate = new \DateTime("now", new DateTimeZone("Asia/Dhaka"));
        $currentDate = $getDate->format('Y_m_d H-i-s');

        $request->validate([
            "name" => "required|string|not_regex:/<[^>]*>/",
            "email" => "required|email|not_regex:/<[^>]*>/",
            'category' => 'required|not_in:null',
            "country" => "required|string|not_regex:/<[^>]*>/",
            "instruction" => "required|string|not_regex:/<[^>]*>/",
            'fileLink' => 'nullable|string|required_without:files',
            "files" => "array|required_without:fileLink",
            "files.*" => "file|mimes:jpeg,png,jpg,gif,webp|max:30720",
        ]);

        $storeFileNam  = [];
        foreach ($request->file('files') as $index => $file) {
            Log::info("File $index: ", [
                'original_name' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
                'mime_type' => $file->getMimeType()
            ]);
        };
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

    public function destroy($id)
    {
        return $id;
    }
    public function singleData($id)
    {
       $data  = FreeTrial::find($id);
       return response()->json($data);
    }

    
}
