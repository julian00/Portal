<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['id_ownership','id_user'];

    //relacion 1:M inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    } 

    public function ownerships()
    {
        return $this->belongsTo(Ownership::class);
    }
}
