<?php

namespace App\Http\Controllers;
use App\Models\Upload;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index()
    {
    $ddd = Upload::all();
        return view('Upload', ['data' => $ddd]);
      // return view('demo');
    }

    public function store(Request $request)
    {
       $val = $request->validate([
            'file' => 'required',
            'name' => 'required'
        ]);

        if ($request->file('file')) {
            $bbb = $request->name;
            $file = $request->file('file');
            $fileName = $bbb . '.' . $file->extension();
            $filePath = $file->move('upload', $fileName);
            Upload::create([
          'name' => $bbb,
          'file' => $fileName
          ]);

            return response()->json(['success' => 'File uploaded successfully'.$filePath, 'file_path' => '/storage/' . $filePath]);
        }

        return response()->json(['error' => $val->errors()]);
    }
}