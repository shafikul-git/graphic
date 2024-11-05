<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeTrial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'country', 'instruction', 'category', 'file_link', 'files'
    ];

    protected $casts = [
        'files' => 'array'
    ];
}
