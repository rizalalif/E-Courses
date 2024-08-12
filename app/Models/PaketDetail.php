<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class PaketDetail extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    public function paket()
    {
        return $this->belongsTo(Paket::class,'paket_id','id');
    }

    public function paketable(): MorphTo
    {
        return $this->morphTo();
    }
}
