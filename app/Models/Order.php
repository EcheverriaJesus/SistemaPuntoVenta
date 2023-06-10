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
        'customer_name',
        'direction',
        'number_phone',
        'delivery_date',
        'leave',
        'subtract',
        'description',
        'total',
        'id_product',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'delivery_date' => 'date',
        'leave' => 'float',
        'subtract' => 'float',
        'total' => 'double',
    ];
}
