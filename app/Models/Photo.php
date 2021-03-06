<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file',
        'type_id',
    ];

    public function type()
    {
        return $this->belongsTo(PhotoCategory::class);
    }
}
