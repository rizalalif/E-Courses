<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalDetail extends Model
{
    use HasFactory,HasUuids;

    protected $guarded = ['id'];
    use HasFactory;

    public function soal()
    {
        return $this->belongsTo(Soal::class);
    }
}
