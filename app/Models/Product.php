<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    protected $table = 'products';
    public $timestamps = false;


    protected $fillable = [
        "product_id",
        "product_name",
        "product_details",
        "price",
        "stock"
    ];
}
