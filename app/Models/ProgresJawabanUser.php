<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class ProgresJawabanUser extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    public function paketUser():MorphMany
    {
        return $this->morphMany(PaketUser::class, 'paket_user');
    }
}