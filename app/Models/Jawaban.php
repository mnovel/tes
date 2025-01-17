<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasUuids;

    protected $fillable = [
        'sesi_id',
        'pertanyaan_id',
        'option_id',
    ];

    public function sesi()
    {
        return $this->belongsTo(Sesi::class);
    }

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class);
    }

    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
