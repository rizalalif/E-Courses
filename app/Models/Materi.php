<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Materi extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    public function paket(): MorphMany
    {
        return $this->morphMany(PaketDetail::class, 'paketable');
    }
}
