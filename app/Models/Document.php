<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['user_id','title','file_path','content','status'];

    public function chunks(){
        return $this->hasMany(DocumentChunk::class);
    }
}
