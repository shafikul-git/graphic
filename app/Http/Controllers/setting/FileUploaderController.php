<?php

namespace App\Http\Controllers\setting;

use DateTimeZone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileUploaderController extends Controller
{
    public function test(){
        return view('dashboard.setting.cehck');
    }
    public function store(Request $request)
    {
        $getDate = new \DateTime("now", new DateTimeZone("Asia/Dhaka"));
        $currentDate = $getDate->format('Y_m_d H-i-s');
        $storeFileNam = [];

        if ($request->hasFile('file')) {
            // Handle single or multiple file uploads
            $files = $request->file('file');

            // If multiple files, loop through them
            if (is_array($files)) {
                foreach ($files as $file) {
                    $changeName = $currentDate . '_' . $file->getClientOriginalName();
                    $path = $file->move(public_path('uploads'), $changeName);
                    $storeFileNam[] = $path;
                }
            } else {
                // For single file upload
                $changeName = $currentDate . '.' . $files->getClientOriginalExtension();
                $path = $files->move(public_path('uploads'), $changeName);
                $storeFileNam[] = $path;
            }

            return response()->json(['success' => 'Files uploaded successfully', 'paths' => $storeFileNam]);
        }

        return response()->json(['error' => 'No files uploaded'], 400);
    }

}
