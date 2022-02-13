<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    const STATUS_CREATED = 'created';
    const STATUS_ADDRESS_SAVED = 'address_saved';
    const STATUS_COMPLETE = 'complete';

    protected $fillable = [
        'user_id',
        'status',

    ];

    public function scopeNew($query)
    {
        return $query->where('status', '=', self::STATUS_CREATED);
    }
    public function scopeProcessed($query)
    {
        return $query->where('status', '=', self::STATUS_ADDRESS_SAVED);
    }
    public function scopeCompleted($query)
    {
        return $query->where('status', '=', self::STATUS_COMPLETE);
    }

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
