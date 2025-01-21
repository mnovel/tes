<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    use HasUuids;

    protected $fillable = ['peserta_id', 'versi_id', 'status'];

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    public function versi()
    {
        return $this->belongsTo(VersiPertanyaan::class);
    }

    public function bakat()
    {
        return $this->belongsToMany(Bakat::class, 'sesi_bakat')->withPivot('total');
    }

    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }
}
