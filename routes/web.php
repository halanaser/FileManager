<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fileController;
use App\Http\Controllers\AsscessoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('test');
// });
Route::get('/', function () {
    return view('index');
})->middleware(['guest']);

Route::get('home', [fileController::class, 'show'])
                ->middleware('auth')
                ->name('home');  
Route::put('home', [fileController::class, 'uploadFile'])
                ->middleware('auth')
                ->name('upload');
Route::put('home/{id}', [fileController::class, 'uploadFile'])
                ->middleware('auth')
                ->name('uploadfileinfolder');
                
Route::post('home/create', [fileController::class, 'createfolder'])
                ->middleware('auth')
                ->name('createfolder'); 
                           

Route::get('home/folder/{id}', [fileController::class, 'openfolder'])
                ->middleware('auth')
                ->name('openfolder'); 
Route::get('home/favarout/{id}', [AsscessoryController::class, 'setfavarout'])
                ->middleware('auth')
                ->name('makefavarout'); 
Route::get('home/unfavarout/{id}', [AsscessoryController::class, 'deletefavarout'])
                ->middleware('auth')
                ->name('deletefavarout'); 
                
Route::get('home/delete/{id}', [AsscessoryController::class, 'delete'])
                ->middleware('auth')
                ->name('delete');     
Route::get('home/open/{id}', [fileController::class, 'openfile'])
                ->middleware('auth')
                ->name('openfile');
 Route::get('home/dwonload/{id}', [fileController::class, 'downloadfile'])
                ->middleware('auth')
                ->name('dwonloadfile');    
                                       

Route::get('Trash/restore/{id}', [AsscessoryController::class, 'Restordropfile'])
                ->middleware('auth')
                ->name('Restordropfile');
Route::get('Trash/delete/{id}', [AsscessoryController::class, 'destroy'])
                ->middleware('auth')
                ->name('destroy');   
Route::get('Trash', [AsscessoryController::class, 'showdropfile'])
                ->middleware('auth')
                ->name('trashes');             

require __DIR__.'/auth.php';
