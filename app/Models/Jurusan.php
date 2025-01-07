<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $hidden = ['created_at', 'updated_at'];

    public function bakat()
    {
        return $this->belongsToMany(Bakat::class, 'bakat_jurusan');
    }

    public function perguruanTinggi()
    {
        return $this->belongsToMany(PerguruanTinggi::class, 'jurusan_perguruan_tinggi');
    }
}
