<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['message','id_user'];

    //relacion 1:M inversa
    public function ownership()
    {
        return $this->belongsTo(Ownership::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
