<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductNav extends Model
{
    protected $table='product_navs';

    public function childNav()
    {
        return $this->hasMany('App\ProductNav','parent_id','id');
    }

    public function allChildrenNavs()
    {
        return $this->childNav()->with('allChildrenNavs');
    }
}
