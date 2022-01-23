<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file',
        'is_public',
        'type_id',
    ];

    protected $attributes = [
        'is_public' => 0,
    ];
}
