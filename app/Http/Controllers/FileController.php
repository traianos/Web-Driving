<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    
    public function files(){
        return view("fileupload");

    }  
    
    public function store(Request $request){
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,pdf|max:2048'
            
        ]);

        try{
            $name = now()->timestamp.".{$request->file->getClientOriginalName()}";
            $path = $request->file('file')->storeAs('files', $name, 'public');

            File::create([
                'file'=> "/storage/{$path}"
            ]);

            return redirect()->back()->with('success','File Upload Successfully!!');
        }catch(\Exception $e){
            return redirect()->back()->with('error','Something goes wrong while uploading file!');
        }
    }

    



    public function displayFiles()
    {
        $files = File::select('id',  'file', 'created_at')->get();
        return view('displayfileupload', compact('files'));
        return view('displayfileupload');
    }

    public function download($id)
    {
        $file = File::findOrFail($id);
        $filePath = storage_path("app/public/" . str_replace('/storage/', '', $file->file));
        return response()->download($filePath);
    }
}

