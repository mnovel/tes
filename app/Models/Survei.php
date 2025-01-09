<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survei extends Model
{
    protected $fillable = ['question', 'type', 'status'];

    protected $hidden = ['created_at', 'updated_at'];
}
