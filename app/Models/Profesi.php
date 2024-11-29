<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesi extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'bakat_id'];

    protected $casts = [
        'bakat_id' => 'array',
    ];

    public function bakat()
    {
        return Bakat::whereIn('id', $this->bakat_id)->pluck('name');
    }
}
