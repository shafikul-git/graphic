<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeforeAfter extends Model
{
    /** @use HasFactory<\Database\Factories\BeforeAfterFactory> */

    use HasFactory;
    protected $guarded = [];

    public function before_image() {
        return $this->belongsTo(FileUpload::class, 'before_image', 'id');
    }

    public function after_image() {
        return $this->belongsTo(FileUpload::class, 'after_image', 'id');
    }



}
