<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orientation extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['orientation'];

    //relacion 1:M
   public function ownership()
   {
       return $this->hasMany(Ownership::class);
   }
}
