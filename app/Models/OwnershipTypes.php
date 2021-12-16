<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnershipTypes extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['type'];

    //relacion 1:M
   public function ownership()
   {
       return $this->hasMany(Ownership::class);
   }
}
