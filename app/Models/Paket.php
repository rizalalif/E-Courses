<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function paket_kategori()
    {
        return $this->belongsTo(KategoriPaket::class, 'kategori_id', 'id');
    }

    public function paket_detail()
    {
        return $this->hasMany(PaketDetail::class);
    }
}
