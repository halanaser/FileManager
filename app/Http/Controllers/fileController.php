<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use App\Models\file;

class fileController extends Controller
{
   
    public function show( ){
        $user=Auth::user();
        $files = File::where('user_id', '=', $user->id )
        ->where('trash', 0)
        
        ->get();

       $Recent=File::orderBy('id', 'desc')
       ->where('trash', 0)
       ->where('type', 0)
       ->paginate(3);

        return  view('home', [
            'files' => $files,
            'recents'=>$Recent,
        ]);

    }
    public function createfolder(Request $request ){
        // dd($request->all);
        $request->validate([
            'folder_name' => 'required'
         ]);
        $foldereNew = File::create([
            'user_id'=> Auth::user()->id,
            'type'=> 0,
            'folder_name' => $request->folder_name,
        ]);
        $foldereNew->save();
        return redirect('home')
        ->with('success', 'create folder  Successfully!');

    }
    

    public function openfolder($id ){
        $user=Auth::user();
        $files = File::where('user_id', '=', $user->id )
        ->where('trash', 0 )
        ->where('parent_id', '=', $id)
        ->paginate();
      
        $Recent=File::orderBy('id', 'desc')
        ->where('trash', 0)
        ->where('type', 0)
        ->paginate(3);

        return  view('folder', [
            'files' => $files,
            'recents'=>$Recent,
        ]);

    }


    public function uploadFile(Request $request){

     //dd($id);
    //  dd($request->hasfile('attachments'));
        if($request->hasfile('attachments')){
            $files = $request->attachments;
        //    dd( $files);
            foreach($files as $file){
            if($file->isValid()){
               $path=$file->store('/',[
                   'disk'=> 'uploads',
               ]); 
           
                $fileNew = File::create([
                    'file_name' => $file->getClientOriginalName(),
                   'file_path'=> $path,
                   'file_size'=>$file->getSize()."bytes",
                   'file_type' => $file->extension(),
                   'parent_id'=>null,
                    'user_id'=>Auth::user()->id,
                    'type'=>'1',
                ]);
    
                $fileNew->save();   
               
            
             
            
            
        }
    }

         }
 
         return redirect('home')
         ->with('success', 'Uploade file Successfully!');
 
     
        }
        public function openfile($id ){
            $files = File::find($id);
           $path= $files->file_path;
           return response()->file(public_path('/uploads/'.$path));
           // return redirect('/uploads/'.$path);
           
        }   
        public function downloadfile($id ){
            $files = File::find($id);
           $path= $files->file_path;
           return response()->download(public_path('/uploads/'.$path));
           // return redirect('/uploads/'.$path);
           
        }  
    
 
   
  

    


}
