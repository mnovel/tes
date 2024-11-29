<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesi extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'bakat_id'];

    public function bakat()
    {
        return $this->belongsTo(Bakat::class, 'bakat_id');
    }
}
