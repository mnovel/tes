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


    protected $fillable = [
        'name',
        'short_description',
        'full_description',
        'recommendation',
        'icon'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function jurusan()
    {
        return $this->belongsToMany(Jurusan::class, 'bakat_jurusan');
    }

    public function profesi()
    {
        return $this->belongsToMany(Profesi::class, 'bakat_profesi');
    }

    public function option()
    {
        return $this->hasMany(Option::class);
    }
}
