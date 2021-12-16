<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['city','id_province'];

    //relacion 1:M inversa
    public function province()
    {
        return $this->belongsTo(City::class);
    }
    
    //1:M
    public function neighborhood()
    {
        return $this->hasMany(Neighborhood::class);
    }
}


