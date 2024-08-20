<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ext_id',
        'code',
        'ext_code',
        'article',
        'buy_price',
        'article',
        'brand',
        'stock',
        'reserve',
        'quantity',
    ];

    public function basket()
    {
        return $this->hasMany(Basket::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
