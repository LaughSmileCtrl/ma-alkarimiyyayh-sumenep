<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_graduate',
        'total_teacher',
        'total_student',
    ];

    protected $attributes = [
        'total_graduate' => 0,
        'total_teacher' => 0,
        'total_student' => 0,
    ];
}
