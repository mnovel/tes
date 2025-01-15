<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VersiPertanyaan extends Model
{

    use HasUuids;

    protected $fillable = ['name', 'status'];

    protected $hidden = ['created_at', 'updated_at'];

    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class);
    }
}
