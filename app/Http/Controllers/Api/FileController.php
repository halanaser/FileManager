<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\File;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::guard('sanctum')->user();
        $files = $user->File()->where('trash', 0)->with('user')->paginate();
   
        return $filess;
    }

   
    public function uploadFile(Request $request){
        $request->validate([
            'attachments'=>'required|file',
            // 'attachments'=>'required|mimes:doc,docx,pdf,txt,csv|max:2048',
         ]);
         $user = Auth::guard('sanctum')->user();
        if($request->hasfile('attachments')){
            $files = $request->attachments;
           if($files->isValid()){
              $path=$files->store('/',[
               'disk'=> 'uploads',
           ]); 
            $fileNew = $user->File()->create([
             'file_name' => $files->getClientOriginalName(),
            'file_path'=> $path,
            'file_size'=>$files->getSize()."bytes",
            'file_type' => $files->extension(),
            'parent_id'=>null,    
             'type'=>'1',
         ]); }

        }
     return  response()->json([
        "success" => true,
        "message" => "File successfully uploded",
        $fileNew, 201]);
    }
    public function Createfolder(Request $request)
    {
    
        $request->validate([
            'folder_name' => 'required'
         ]);
        $user = Auth::guard('sanctum')->user();
        $files = $user->File()->create([
            'type'=> 0,
            'folder_name' => $request->folder_name,
        ]);
        
        return response()->json([
            "success" => true,
            "message" => "Folder successfully created",
            $files, 201]);
    }
    
}
