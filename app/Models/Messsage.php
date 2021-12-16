<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messsage extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['messages', 'id_user'];

    //relacion 1:M inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
