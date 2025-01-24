<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanSurvei extends Model
{
    use HasFactory;

    protected $fillable = [
        'sesi_id',
        'question_id',
        'answer'
    ];

    public function sesi()
    {
        return $this->belongsTo(sesi::class);
    }

    public function question()
    {
        return  $this->belongsTo(Survei::class, 'question_id');
    }
}
