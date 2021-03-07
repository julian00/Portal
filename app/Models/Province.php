<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['province'];

    public function cities()
    {
        return $this->hasMany('App\Models\Province','id_province','id');
    }
}
