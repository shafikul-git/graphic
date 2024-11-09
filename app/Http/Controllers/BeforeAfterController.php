<?php

namespace App\Http\Controllers;

use App\Models\BeforeAfter;
use App\Models\FileUpload;
use Illuminate\Http\Request;

class BeforeAfterController extends Controller
{
    public function index()
    {


        return view("dashboard.setting.beforeafterSetting.beforeafter");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'goto_link' => 'nullable|string',
            'unique_key' => ['required', 'string', function ($attribute, $value, $fail) {
                $correctKey = preg_replace('/\s+/', '_', $value);
                if (BeforeAfter::where('unique_key', $correctKey)->exists()) {
                    $fail('The unique key has already been taken.');
                }
            }],
            'before_image' => 'required|numeric',
            'after_image' => 'required|numeric',
        ]);

        $correctKey = preg_replace('/\s+/', '_', $request->unique_key);

        $storeData = BeforeAfter::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'goto_link' => $request->goto_link,
            'unique_key' => $correctKey,
            'before_image' => $request->before_image,
            'after_image' => $request->after_image,
        ]);

        if ($storeData) {
            return redirect()->back()->with('success', 'Before After Added Sucessful');
        } else {
            return redirect()->back()->with('error', 'Someting went wrong');
        }
    }

    public function getData(){
        $allBeforeAfter = BeforeAfter::with(['before_image', 'after_image'])->get();
        return response()->json($allBeforeAfter);
    }
}
