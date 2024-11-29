<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'bakat_id'];

    protected $casts = [
        'bakat_id' => 'array',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function bakat()
    {
        return Bakat::whereIn('id', $this->bakat_id)->pluck('name');
    }

    public function perguruanTinggi()
    {
        return $this->hasMany(PerguruanTinggi::class, 'jurusan_id');
    }
}
