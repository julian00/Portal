<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['province'];

     //creo la relacion 1:M
     public function cities()
     {
         return $this->hasMany(City::class);
     }

}
