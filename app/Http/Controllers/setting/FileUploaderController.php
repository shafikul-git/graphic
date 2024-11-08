<?php

namespace App\Http\Controllers\setting;

use DateTimeZone;
use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FileUploaderController extends Controller
{
    public function index()
    {
        $allFiles = FileUpload::orderByDesc('id')->cursorPaginate(4);
        return response()->json($allFiles);
    }

    public function store(Request $request)
    {
        $getDate = new \DateTime("now", new DateTimeZone("Asia/Dhaka"));
        $currentDate = $getDate->format('Y_m_d H-i-s');
        $storeFileNam = [];

        if ($request->hasFile('file')) {
            $files = $request->file('file');

            $data = [];

            if (is_array($files)) {
                foreach ($files as $file) {
                    $changeName = $currentDate . '___' . uniqid() . '___' . $file->getClientOriginalName();
                    $path = $file->storeAs('upload', $changeName, 'public');
                    $storeFileNam[] = $path;
                }
            } else {
                $changeName = $currentDate . '.' . $files->getClientOriginalExtension();
                $path = $files->storeAs('upload', $changeName, 'public');
                $storeFileNam[] = $path;
            }

            foreach ($storeFileNam as $fileName) {
                $insertData = FileUpload::create([
                    'file_name' => $fileName,
                    'user_id' => Auth::user()->id,
                ]);
                array_push($data, $insertData);
            }


            return response()->json(['success' => 'Files uploaded successfully', 'paths' => $data]);
        }
        Log::info('info', ['requst' => $request]);
        return response()->json(['error' => 'No files uploaded'], 400);
    }
}
