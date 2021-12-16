<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeedsDetails extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['detail','id_propiedad'];

    //relacion 1:1
   public function ownership()
   {
       return $this->hasOne(Ownership::class);
   }
}
