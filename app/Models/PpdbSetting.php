<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpdbSetting extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'open',
        'close',
        'announcement',
        'announcement_url',
        'image',
    ];
}
