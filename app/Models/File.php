<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
      
    protected $fillable = [
        'id','folder_name','file_name','file_path','file_size','file_type','parent_id',
        'user_id','type','trash','favarout','created_at','updated_at'
    ];
    protected $casts =[
        'file_path'=>'json'

   
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
