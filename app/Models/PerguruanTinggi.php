<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerguruanTinggi extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'rank', 'jurusan_id', 'status'];

    protected $casts = [
        'jurusan_id' => 'array',
    ];

    public function jurusan()
    {
        return Jurusan::whereIn('id', $this->jurusan_id)->pluck('name');
    }
}
