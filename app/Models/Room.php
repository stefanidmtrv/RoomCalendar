<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = "rooms";
    protected $guarded = ['id'];
    
    public function floor()
    {
        return $this->belongsTo('App\Models\Floor');
    }

    public function displays()
    {
        return $this->hasMany('App\Models\Display');
    }

    public function events()
    {
        return $this->hasMany('App\Models\Event');
    }
}
