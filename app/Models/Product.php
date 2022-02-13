<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $with = ['currency'];

    protected $fillable = [
        'name',
        'price',
        'stock',
        'currency_id'
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

}
