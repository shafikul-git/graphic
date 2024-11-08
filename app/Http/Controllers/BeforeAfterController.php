<?php

namespace App\Http\Controllers;

use App\Models\BeforeAfter;
use Illuminate\Http\Request;

class BeforeAfterController extends Controller
{
    public function index(){
        return view("");
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'goto_link' => 'nullable|string',
            'unique_key' => 'required|string',
            'before_image' => 'required|numeric',
            'after_image' => 'required|numeric',
        ]);

        $storeData = BeforeAfter::create($request->all());

        if($storeData){
            return redirect()->back()->with('success','Before After Added Sucessful');
        } else{
            return redirect()->back()->with('error','Someting went wrong');
        }
    }
}
