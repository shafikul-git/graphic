<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoCounter extends Model
{
    /** @use HasFactory<\Database\Factories\AutoCounterFactory> */
    use HasFactory;
    protected $guarded = [];
}
