<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'products_price',
        'shipping_fee',
        'payment_method',
        'shipping_option',
        'receiver_name',
        'receiver_address',
        'receiver_phone',
        'status',
        'tracking_number',
        'customer_id'
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function productSnapshots()
    {
        return $this->hasMany(ProductSnapshot::class);
    }
}
