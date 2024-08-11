<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriPaket extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'name',
        'description'
    ];
    

    public function pakets(): HasMany
    {


        return $this->hasMany(Paket::class);
    }
}
