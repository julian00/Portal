<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ownership extends Model
{
    use HasFactory;
    public $timestamps=false;
    
    protected $guarded = ['id'];

    //relacion 1:M polimorfica
    public function images()
    {
        return $this->morphMany(Image::class, "imageable");
    }
}
