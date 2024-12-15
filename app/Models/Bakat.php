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
        return Jurusan::whereJsonContains('bakat_id', $this->id);
    }

    public function profesi()
    {
        return Profesi::whereJsonContains('bakat_id', $this->id);
    }
}
