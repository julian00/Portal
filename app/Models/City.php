<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['city','id_province'];

    public function province()
    {
        return $this->belongsTo('App\Models\City','id_province','id');
    }
}
