<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $dates = ['start_date_time', 'end_date_time'];
    protected $table = "events";
    protected $guarded = ['id'];
    public function room()
    {
        return $this->belongsTo('App\Models\Room');
    }

    
}
