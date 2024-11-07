<?php

namespace App\Http\Controllers\setting;

use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class FileUploaderController extends Controller
{
    public function index(){
        return response()->json([
            'testf' => 'ok'
        ]);
    }
    public function store(Request $request)
    {
        $getDate = new \DateTime("now", new DateTimeZone("Asia/Dhaka"));
        $currentDate = $getDate->format('Y_m_d H-i-s');
        $storeFileNam = [];

        if ($request->hasFile('file')) {
            $files = $request->file('file');

            if (is_array($files)) {
                foreach ($files as $file) {
                    $changeName = $currentDate . '_' . $file->getClientOriginalName();
                    $path = $file->move(public_path('uploads'), $changeName);
                    $storeFileNam[] = $path;
                }
            } else {
                $changeName = $currentDate . '.' . $files->getClientOriginalExtension();
                $path = $files->move(public_path('uploads'), $changeName);
                $storeFileNam[] = $path;
            }

            
            Log::info('info', $storeFileNam);
            return response()->json(['success' => 'Files uploaded successfully', 'paths' => $storeFileNam]);
        }

        return response()->json(['error' => 'No files uploaded'], 400);
    }

}
