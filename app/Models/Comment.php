<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['content'];
    
    public function commentable()// se define la relacion 
    {
        return $this->morphTo();//morphTo para guargar el modelo que se va ejecutar
        //this es el model pueda ser post video
    }

}

