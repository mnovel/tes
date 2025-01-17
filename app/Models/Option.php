<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory, HasUuids;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'pertanyaan_id',
        'answer',
        'bakat_id',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class);
    }

    public function bakat()
    {
        return $this->belongsTo(Bakat::class);
    }

    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }
}
