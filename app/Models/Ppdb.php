<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nisn',
        'nik',
        'no_kk',
        'place_of_birth',
        'date_of_birth',
        'gender',
        'child_order',
        'total_brother',
        'phone',
        'address',
        'father_name',
        'father_nik',
        'father_place_of_birth',
        'father_date_of_birth',
        'father_last_education',
        'father_profession',
        'father_phone',
        'father_address',
        'mother_name',
        'mother_nik',
        'mother_place_of_birth',
        'mother_date_of_birth',
        'mother_last_education',
        'mother_profession',
        'mother_phone',
        'mother_address',
    ];
    
}
