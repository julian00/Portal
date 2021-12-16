<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ownership extends Model
{
    use HasFactory;
    public $timestamps=false;
    
    protected $guarded = ['id','created_at','updated_at'];

    //relacion 1:M inversa
    public function ownershipType()
    {
        return $this->belongsTo(OwnershipTypes::class);
    }
    public function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }
    public function deedDetail()
    {
        return $this->belongsTo(DeedDetail::class);
    }
    public function orientation()
    {
        return $this->belongsTo(Orientation::class);
    }
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
    public function operation()
    {
        return $this->belongsTo(Operation::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //relacion M:M 
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function notifications()
    {
        return $this->belongsToMany(Notification::class);
    }

    //relacion 1:M polimorfica
    public function images()
    {
        return $this->morphMany(Image::class, "imageable");
    }
}
