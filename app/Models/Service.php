<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['service'];

    //relacion 1:M
   public function ownerService()
   {
       return $this->belongsToMany(Ownership::class);
   }
}
