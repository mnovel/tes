<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'level',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
