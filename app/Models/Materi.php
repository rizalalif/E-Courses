<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Materi extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable=[
        'name',
        'status',
        'description'
    ];

    public function paket_detail():HasOne
    {
        return $this->hasOne(MateriDetail::class);
    }

    // public function paket():MorphOne
    // {
    //     return $this->morphOne(Paket::class,'paketable');
    // }
}
