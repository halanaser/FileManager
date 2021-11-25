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

class AsscessoryController extends Controller
{
    //
    public function setfavarout($id){
        
         
        $files = File::find($id);
        $files->favarout = 1;

        $files->save();
       

        return redirect('home');

    }
    public function deletefavarout($id){
        
        $files = File::find($id);
       
        $files->favarout = 0;
        $files->save();
       
        return redirect('home');
          



    }
    public function showdropfile(){
    
        $user=Auth::user();
 
        $files = File::where('user_id', '=', $user->id )
         ->where('trash', 0)
         ->paginate();
         
        $Recent=File::orderBy('created_at', 'desc')
        ->where('trash', 0)
        ->where('type', 0)
        ->paginate(3);
      
        $Trash = File::where('user_id', '=', $user->id )
         ->where('trash', 1)
         ->paginate();
 
         return  view('trash', [
             'trash' => $Trash,
             'files' => $files,
             'recents'=>$Recent,
         ]); 
        }  
    public function delete($id){
      
        $files = File::find($id);
        $files->trash = 1;
        $files->save();
        return redirect('home')
        ->with('success', 'delete Successfully!');
    }

    public function Restordropfile($id){
        $files = File::find($id);
        $files->trash = 0;
        $files->save();
        return redirect('Trash');
       


    }
    public function destroy($id){
      
        $files = File::find($id);
        $files->delete();

        return redirect('Trash')
        ->with('success', 'Deleted Successfully!');
    }

}
