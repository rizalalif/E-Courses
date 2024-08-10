<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Paket extends Model
{
    use HasUuids;
    use HasFactory;

    protected $with = 'category';
    protected $fillable = [
        'thumbnail',
        'kategori_id',
        'name',
        'description',
        'status',
        'day_active_paket',
        'paket_type',
        'price',
        'discount',
    ];


    public function category(): BelongsTo
    {
        return $this->belongsTo(KategoriPaket::class, 'kategori_id', 'id');
    }

    public function paket_detail()
    {
        return $this->hasMany(PaketDetail::class);
    }


}
