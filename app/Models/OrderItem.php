<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'amount', 'price', 'rating', 'review', 'reviewed_at'
    ];
    protected $dates = [
        'reviewed_at'
    ];
    public $timestamps = false;

    public function commodity()
    {
        return $this->belongsTo(Commodity::class);
    }

    public function commoditySku()
    {
        return $this->belongsTo(CommoditySku::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
