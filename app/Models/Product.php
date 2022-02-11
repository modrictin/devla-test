<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'stock'
    ];

    public function currency() : BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

}
