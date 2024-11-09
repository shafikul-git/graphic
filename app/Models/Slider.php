<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        "name","title","description","goto_link","unique_key","images"
    ];
    protected $casts = [
        "images"=> "array",
    ];
}
