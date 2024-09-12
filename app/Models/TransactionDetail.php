<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransactionDetail extends Model
{
    use HasFactory, HasUuids;

    protected $with = ['paket'];
    protected $guarded = ['id'];

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }
    public function paket(): BelongsTo
    {
        return $this->belongsTo(Paket::class);
    }
}
