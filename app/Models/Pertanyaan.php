<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory, HasUuids;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = ['versi_id', 'type', 'question'];

    protected $hidden = ['created_at', 'updated_at'];

    public function versi()
    {
        return $this->belongsTo(VersiPertanyaan::class);
    }

    public function option()
    {
        return $this->hasMany(Option::class);
    }

    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }
}
