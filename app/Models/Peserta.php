<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{

    use HasUuids;

    protected $fillable = [
        'name',
        'email',
        'sekolah_id',
        'kelas_id',
        'perguruan_tinggi_id',
        'jurusan_id',
    ];

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function perguruanTinggi()
    {
        return $this->belongsTo(PerguruanTinggi::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function sesi()
    {
        return $this->hasMany(Sesi::class);
    }
}
