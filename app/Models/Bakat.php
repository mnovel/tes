<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Bakat extends Model
{
    use HasFactory, HasUuids;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = [
        'name',
        'short_description',
        'full_description',
        'recommendation',
        'icon'
    ];

    public function jurusan()
    {
        return $this->hasMany(Jurusan::class, 'bakat_id');
    }

    public function profesi()
    {
        return $this->hasMany(Profesi::class, 'bakat_id');
    }
}
