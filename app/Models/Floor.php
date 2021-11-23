<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;

    public function rooms()
    {
        return $this->hasMany('App\Models\Room');
    }

    public function building()
    {
        return $this->belongsTo('App\Models\Building');
    }
    
}
