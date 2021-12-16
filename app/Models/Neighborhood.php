<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    use HasFactory;
    public $timestamps=false;
    //protected $fillable=['operation'];

    //relacion 1:M
    public function ownership()
    {
        return $this->hasMany(Ownership::class);
    }
    
    //relacion 1:M inversa
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
