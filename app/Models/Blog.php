<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
     'title',
     'description',
     'content',
     'uploaded_by',
     'image_path'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}