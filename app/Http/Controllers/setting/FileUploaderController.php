<?php

namespace App\Http\Controllers\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploaderController extends Controller
{
    public function test(){
        return view('dashboard.setting.cehck');
    }
    public function store(Request $request){
        return response()->json([
            $request
        ]);
    }
}
