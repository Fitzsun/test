<?php

namespace App;

use App\Product;
use App\ProductNav;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';

    public function belongsToCategory()
    {
        return $this->belongsTo(ProductNav::class);
    }
}
