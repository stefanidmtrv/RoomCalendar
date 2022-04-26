<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class StNum extends Model
{

    use HasFactory;

    protected $table = "stnum";
    protected $guarded = ['id'];

}